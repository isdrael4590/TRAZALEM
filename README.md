# TRAZALEM

Sistema de trazabilidad de reprocesamiento de material en centrales de esterilización

## Dependencias de Software

- Docker
- MySQL v8
- PHP v8.2

## Instrucciones de instalación

1. Instale Docker Engine para su plataforma como se explica en el siguiente [link](https://docs.docker.com/engine/install/)
2. Clone los archivos de este repositorio, por ejemplo con `git clone git@github.com:isdrael4590/TRAZALEM.git`
3. Las contraseñas de MySQL son almacenadas a través de [Docker secrets](`https://docs.docker.com/compose/use-secrets/`) por seguridad. Antes de iniciar el programa, es necesario crear dos archivos en la carpeta `db` llamados `root_password.txt` y `user_password.txt` para establecer las constraseñas de MySQL, use cualquier editor de texto para realizar esta tarea o con el siguiente comando en Linux.

    ```bash
    echo passwd_root_secreto > db/root_password.txt
    echo passwd_user_secreto > db/user_password.txt
    ```

4. Los contenedores utilizan [variables de entorno](https://docs.docker.com/compose/environment-variables/set-environment-variables/) para establecer valores globales de funcionamiento, en la primera configuración, por favor haga una copia del archivo `.env.example` y renombrelo como `.env` y editelo si es necesario, un ejemplo como se hace en Linux sería de la siguiente forma:

    ```bash
    cp .env.example .env
    ```

5. Inicie los contenedores con el comando `./vendor/bin/sail up`.

## Desarrollo

- Se puede sobreescribir el comando por defecto con `docker compose -f docker-compose.yml -f docker-compose.dev.yml up -d --build` para añadir mas opciones de depuración, además esto habilita el contenedor `adminer` que puede ser usado para verificar gráficamente la Base de datos al ingresar al siguiente link [http://localhost:8080/](http://localhost:8080/)

## PAGINA DE INICIO

- Página Inicio [http://localhost:3000/dist/config/index.php](http://localhost:3000/dist/config/index.php)
- Página Prueba DB DB [http://localhost:3000/dist/config/connection.php](http://localhost:3000/dist/config/connection.php)

El presente proyecto estará contando con diferentes interfaz con la idea de implementar una RUMED ( UNIDAD DE REPROCESAMIENTO DE DISPOSITVOS MEDICOS)
LAS ETAPAS A DESARROLLARSE.

1. BASE DE DATOS. ( PAQUETES DE LAS DIFERENTES ÁREAS, REGISTRO DE NUEVOS PROCEDIMIENTOS Y ALMACENAMIENTO)
2. GENERAR EIQUETAS MEDIANTE UNA IMPRESIÓN Y DEBE INCLUIR UN QR O BARRA DE CODIGOS.
3. LEER LAS ETIQUETAS Y CLASIFICAR SI EL PROCEDIMIENTO FUE CORRECTO O NO.
4. GENERAR REPORTES MENSUAL DE LOS PROCEDIMIENTOS REALIZADOS.
