#!/bin/bash

hosts=$1
comando=$2
fecha2="$(date +%Y%m%d-%H%M)"
logs="/tmp/pssh/$fecha2"

mkdir $logs
touch $logs/hostsOffline
touch $logs/hostsOnline

# comprueba que se haya insertado comando y archivo de hosts
if [[ ( -z $hosts ) || ( -z $comando ) ]];
then
        echo "como usar el script de pssh:"
        echo ""
        echo "            ./pssh.sh ArchivoHosts Comando"
        echo ""
        echo ""
        exit
fi

# hace ping a cada uno de los host del archivo
# que se pasa en variable $hosts y guarda en archivo
# dentro de directorio $logs con nombre HostsOffline

while IFS='' read -r ip || [[ -n "$ip" ]]; do
    if ping -c 1 -W 1 $ip>/dev/null
        then
                echo "$ip  -  Encendido"
                echo $ip >> $logs/hostsOnline
        else
                echo "$ip  -  Apagado"
                echo $ip >> $logs/hostsOffline
    fi
done < "$hosts"

pssh -x "-tt" -A -i -l administrador -o $logs -h $logs/hostsOnline -I $comando

# elimina todos los logs de ip sin contenido
find $logs -size 0 -exec rm -f {} \;
