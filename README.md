# CinemaXXII
Nuestro programa se basa en una pagina dinamica de un cinema en donde podremos acceder a reviews y mandar correo a la administración del cinema.  también agregamos un listado a las películas que hayamos agregado o modificado como administrador.      


Proyecto Cinema  por:  

Angelo Tijerina Rodriguez  
Gerardo Arce Torres    

Instalación Después de descargar el proyecto debemos de entrar a esto por medio de la consola.    
$ cd nombreRepositorio 

Ejecutamos el siguiente comando. 

$ composer install 

Modificamos el nombre del archivo .env.example. por .env y agregamos nuestras credenciales (de lo contrario el programa no correra correctamente).  

Ejecutamos las migraciones.    

$ php artisan migrate  

Ejecutamos los seeders.    

$ php artisan db:seed  

Por ultimo solo debemos generar una key para nuestra app.     

$ php artisan key:generate  

Listo ya podemos ejecutar el proyecto Cinema.    

$ php artisan serve  

(lo mandamos hasta ahorita porque no sabiamos como subir un repositorio a Git) 
