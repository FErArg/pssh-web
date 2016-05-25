# pssh-web
Visor web de los resultados de PSSH

AVISO!!!!
======
Esta es una aplicación para pruebas internas,no está preparada para usarla en producción

Requisitos
	-python-pip
	-apache2
	-php5

Mas info sobre Parallel SSH en "http://linux.die.net/man/1/pssh"

Detalle de la aplicación
======
Esta pequeña aplicación permite visualizar los archivos de "logs" generados por el comando pssh.

Ejecutando el archivo "pssh.sh", se crean archivos con el resultado del comando pasado por el script a todos los ordenadores al que se accede, estos archivos los almacena en un directorio específico para cada vez que ejecute el script.

El script "pssh.sh" genera 2 archivos antes de ejecutar el comando "pssh", hostOffline y hostOffline, para acotar la ejecución del comando pasado al "pssh" solo de los ordenadores que se encuentran en ese momenoto conectados.

Los resultados podrá verlos en formato "ordenador a ordenador", o desde el acceso de "LiveView" podrá ver todos los resultados en 2 columnas.


#BASH
======
Se debe ejecutar el archivo "bash/pssh.sh" para que cree los archivos de registro dentro del directorio que se declara en la variable "$logs", estos archivos serán mostrados por la parte "web" de esta aplicación.

1- Convertir el archivo en ejecutable

	chmod +x pshh.sh

2- Como se debe ejecutar el comando

	./pssh.sh ArchivoHost Comando

	Ejemplo
	./pssh.sh hostEjemplo "ls -lha"

3- Si no se modifica la variable $logs del archivo, creará un directorio dentro de "/tmp", cuyo nombre estará formado por "AñoMesDia-HoraMinuto"

	Ejemplo de directorio:
			/tmp/20160520-1621



#PHP
======
1- Debe copiar todo el contenido del directorio "php" en el directorio root de apache2

2- Dentro del archivo "tools/framework.php" debe editar la variable "$directorio" para que apunte al mismo directorio que la variable "$logs" del archivo "pssh.sh"

3- Para acceder al visor web debe ingresar a "http://192.168.1.1/pssh-web", donde "192.168.1.1" es la dirección IP de su servidor, y "pssh-web" es el directorio donde guardó los archivos del directorio "php"


