<h1>PRACTICA LARAVEL 10, CRUD Y AUTENTICACION...</h1>
<p>Este proyecto es una práctica avanzada de Laravel 10 que incluye operaciones CRUD, autenticación de
    usuarios y está conectado a una base de datos SQL Server para almacenar y gestionar la información
    de manera eficiente.</p>

## Crear proyecto 
```
composer create-project laravel/laravel PracticaLaravel
cd PracticaLaravel
php artisan serve

#Agregamos laravel breeze
composer require laravel/breeze --dev

#Hacemos conexion con la base de datos
php artisan migrate 
php artisan breeze:install
npm install
npm run dev
npm run watch

#Cambiamos los estilos de vite por laravel mix
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<script src="{{ asset('js/app.js') }}" defer></script>
```

## Introducción del framework 
```
##Explicamos los seeders 
	php artisan make:seeder UserSeeder
	php artisan migrate:fresh --seed
	
##Explicamos las rutas y controladores 
	php artisan make:controller UserController
	php artisan make:controller UserController --resource
	
	php artisan make:request UserRequest
	
	-index     -> get, lista los valores de la tabla
	-create    -> get, vista para ver el crear
	-store     -> post para agregar 
	-show      -> get, vista para mostrar un registro 
	-edit      -> get, vista para editar el registro 
	-update    -> put, actualiza el registro
	-destroy   -> delete, elimita registro
```

* [Explicacion de que es una aplicación web.](https://excalidraw.com/#json=kIRYNcUIerf_yWSGmRT5o,KeDQ3JfjqvRAJM0WH4Vi3w)
