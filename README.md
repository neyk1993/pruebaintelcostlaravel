# Introduccion

Este proyecto tiene como objetivo mostrar la destreza y la posiblidad de adaptarse a un framework totalmente nuevo. 

# Objetivo

Orientar al usuario final del como realizar la instalacion de su proyecto para su uso. 

### Instalacion

###### Carga de la carpeta al servidor 

Se debe subir o descargar todo el proyecto de git en el servidor que lo alojara normalmente den la carpeta public_html en la raiz 


###### Composer

Para poder instalar nuestro proyeto es necesario tener composer para instalar las dependencias 

si no cuenta con este en el siguente [enlace](http://michaelavilan.site/?p=1900)

se debe ejecutar el siguente comando

```
composer install
```

Despues de esto se veran reflejadas las  instalaciones de dependencias necesarias del proyecto 


###### Crear el archivo .env

Por defecto, y por razones de seguridad, el archivo .env no es tomado en cuenta en el proyecto (ya que cada contribuidor puede tener diferentes contraseñas que no deberíamos saber) así que tenemos que generar uno por nosotros mismos

Para caso practico se puede utilizar el archivo  .env.example con el siguente comando  
```
cp .env.example .env
```
como base para el nuevo archivo realizando las modificaciones de conexiones a base de datos

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pruebalaravel
DB_USERNAME=root
DB_PASSWORD=rootroot
```

###### Creacion de API KEY
Para poder utilizar esta aplicacion es necesario asignarle una llave la cual se gestiona de la siguiente manera estando dentro de la carpeta del proyecto y con terminal

```
php artisan key:generate
```

###### Ejecutar Migraciones 
Las migraciones nos sirven para tener la estructura de nuestra base de datos 

para ejecutarla es necesario tener la base de datos creada la cual se configuro en el archivo .env.

Para ejecutar la migracion se debe correr el siguiente comando en la terminal

```
php artisan migrate
```

Este comando  creara las tablas en la base de datos 


Para mas informacion

[Caso Practico](http://michaelavilan.site/?p=1958) o tambien puede utilizar la 
[Documentacion Oficial](https://laravel.com/docs/5.1/migrations)

###### Ejecutar el Proyecto

para ejecutar el proyecto se debe ingresar en la terminal 

``
php artisan serve
``

Muchas gracias por su atencion brindada espero fuera de ayuda un su vida laboral como lo sera para mi 

Buen dia 







