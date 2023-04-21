# Proyecto base de yii2 advance

para practicas en la implementación de la capa de services, asi como el uso de los modelos Search y Query

## Instalación

Se recomienda tener instalado Docker.

1.- clonar el proyeto.

2.- Una vez clonado el proyecto, cámbiate al branch `master` y haz git pull para descargarlo

3.- Abre una terminal y sitúate en el directorio del proyecto. A continuacion ejecuta `docker-compose up` para construir los contenedores `mysql, frontend` y `backend`

4.- Entra al contenedor del frontend y estando dentro, ejecuta el comando `php init` selecciona la opcion [0]- development y automaticamente se generarán los archivos de configuración necesarios.

5.- ejecuta el comando `composer update`

6.- Configura el connection string en el archivo `common\config\main-local.php` `host=mysql`, `dbname=pruebas1`, `username=root`,`password= root_admin`

7.- Dentro del contenedor del frontend ejecuta el comando `php yii migrate`, este se encargará de generar las tablas bases del proyecto, `migration` y `user`


 

## License

[MIT](https://choosealicense.com/licenses/mit/)
