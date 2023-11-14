# TRAZAlem

Sistema de trazabilidad de reprocesamiento de material en centrales de esterilización

## Dependencias de Software

- Docker
- [PHP v8.2](https://www.php.net/)
- [PHP Composer](https://getcomposer.org/)
- [Laravel 8](https://laravel.com/)

## Instalación

1. Instale Docker Engine para su plataforma como se explica en el siguiente [link](https://docs.docker.com/engine/install/)
2. Clone los archivos de este repositorio, por ejemplo con `git clone git@github.com:isdrael4590/TRAZALEM.git`
3. Instale las dependencias de software necesarias para correr el proyecto, por ejemplo para Ubuntu:

    ```bash
    sudo apt update && sudo apt install php composer php-gd php-curl
    ```

4. Para iniciar con las opciones de desarrollo o correr los contenedores, instale las dependencias de PHP proyecto a través del siguiente comando:

    ```bash
    composer update
    ```

5. Los contenedores utilizan [variables de entorno](https://docs.docker.com/compose/environment-variables/set-environment-variables/) para establecer valores globales de funcionamiento, en la primera configuración, por favor haga una copia del archivo `.env.example` y renombrelo como `.env` y editelo si es necesario, un ejemplo como se hace en Linux sería de la siguiente forma:

    ```bash
    cp .env.example .env
    ```

6. El proyecto utiliza la herramienta [sail](https://laravel.com/docs/8.x/sail) de Laravel para gestionar los contenedores, para iniciar el desarollo, inice los contenedores con el siguiente comando:

    ```bash
    sudo chown -R $USER: .
    ./vendor/bin/sail up -d
    ./vendor/bin/sail artisan up
    ./vendor/bin/sail artisan key:generate # En otro terminal
    ```

7. El proyecto correra y estará disponible en la dirección [http://localhost](http://localhost)

## Problemas conocidos

- El contenedor `trazalem-laravel.test-1` no puede iniciar por el siguiente error `Error response from daemon: driver failed programming external connectivity on endpoint trazalem-laravel.test-1 (67b23e08d5ce30af77f98658cc73d76c01ed8a1c1ac892e4eb7891e3ef0a3d93): Error starting userland proxy: listen tcp4 0.0.0.0:80: bind: address already in use`
Por favor, desactive el servidor Apache con el siguiente comando(En Ubuntu)

    ```bash
    sudo systemctl stop apache2
    ```

- El contenedor `trazalem-mysql` no puede iniciar por el siguiente error `Error response from daemon: driver failed programming external connectivity on endpoint trazalem-mysql-1 (e04ce5302d35b11e855ba9742e965594c610d166d078edf0ce7ebedd5d2da20c): Error starting userland proxy: listen tcp4 0.0.0.0:3306: bind: address already in use`
Por favor, desactive el servidor local de MySQL con el siguiente comando(En Ubuntu):

    ```bash
    sudo systemctl stop mysql
    ```

    O cambie la variable de entorno `DB_HOST` a la dirección del servidor que contiene la base datos.

- Se presenta el siguiente erro: `mysqld: File './binlog.index' not found (OS errno 13 - Permission denied)`, por favor, haga respaldo de la base de datos y escriba el siguiente comando en consola para resetear el contenido de los contenedores: `docker compose down --volumes &&  ./vendor/bin/sail up`
