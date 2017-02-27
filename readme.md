## CRUD de usuarios creado en laravel

[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Esta es una aplicacion sencilla en donde se implementa un CRUD para manipular el modelo de usuarios ya existente en Larvel 5.1.


## Instrucciones de Instalacion

+ Después de descargar el proyecto entramos a este.

        $ cd nombreRepositorio

+ Ejecutamos el siguiente comando.

        $ composer install

+ Modificamos el  archivo  __.env__ y agregamos nuestras credenciales de la base de datos.

+ Ejecutamos las migraciones.

        $ php artisan migrate

+ Por ultimo solo debemos generar una key para nuestra app.

         $ php artisan key:generate

+ Listo ya podemos ejecutar el proyecto.

        $ php artisan serve
