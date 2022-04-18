## Aplicacion carrito de compras con laravel

## Primeros pasos

Laravel

Instalacion 

laravel mix, se complia con node js
npm gestor de paquetes del frontend -- compilar assets
composer gestor de paquetes backend


composer create-project laravel/laravel
php artisan serve


## Inicio
 public : se encuentra imagenes js css ques e peude acceder a traves del servidor / raiz del proyecto
 vendor/autoload.php se define todas las clases.
 vendor : contiene todas las dependencias.
 kernel,: es el nucleo del framwork
 composer.json: lleva el registro de las dependencias necesarias, versiones.
 composer.lock: llleva el registro de todas las dependencias con sus respectivas versiones.

Routes : 
    api.php: rutas para crear una API
    web.php: retorna una vista

vistas: resources/views
    Listado de vistas disponibles.

App: todo relacionado con los modelos.
    http: controladores.

Config: archivos de configuracion
Database: archivos para elc argue de la base de datos
    factories
    migrations
    seeders
.env: configuracion de credenciales secretas conexion a la BD

## PHP artisan
php artisan: lista componentes y comandos que se pueden utilizar, crear modelos controladores, tareas... etc.
php artisan down : aplicaicon en mantenimiento.
php artisan up: reestablecer la aplicacion.
php artisan optimize:clear: elimina cache  en la aplicacion.
php artisan optimize: va a agregar un cache para que la ejecucion de laravel sea mas rapida.

php artisan tinker: interactua con la aplicacion, codigo puro php o componentes que inetractue con la aplicacion.
    ej: mt_rand(1,10);

helpers: Laravel incluye una variedad de funciones PHP "ayudantes" globales. Muchas de estas funciones son utilizadas por el marco mismo; sin embargo, puede usarlos en sus propias aplicaciones si lo considera conveniente.
    \Str::plural('apple');
    \Str::random(10);

## Variables de entorno
.env          :  es usado por laravel para configurar ciertas variables del proyecto.
.env.example  :  es ignorado y se usa como base para geenrar ela rchivo .env cuando sea necesario
en el archivo config/app.php utiliza el archivo .env
php artisan key:generate  : genera una llave nueva en la variable global APP_KEY
php artisan config:cache  : genera cache de la configuracion.
para acceder a los archivos de entorno se debe de realizar con la funcion config('')

## se configura la rutas para registrar las rutas apuntando a un controlador
Esto con el fin de que no se requiera registrarlo con un espacio con nombre completo, para lo cual se modifica en el archivo RouteServiceProvider.php, agregando $namespace a donde referirse cuando se nombre un controlador.->namespace($this->namespace)

## Providers
Una vez cargados por el kernel registra diferentes componentes necesarios en la aplicacion.

RouteServiceProvider.php refiere a cargar las rutas

    mapWebRoutes() rutas de la web.
    mapApiRoutes() rutas de la api.

php artisan route:list  : lista las rutas registradas.

se recomienda poner nombre a las rutas con el fin de facilitar el cambio de las url sin necesidad de cambiar otros componentes del codigo.