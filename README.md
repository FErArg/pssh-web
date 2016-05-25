# pssh-web
Visor web de los resultados de PSSH

AVISO!!!!
======
Esta es una aplicación para pruebas internas,no está preparada para usarla en producción

Requisitos
	*python-pip
	*apache2
	*php5


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

2- Dentro del directorio "tools" debe editar la variable
