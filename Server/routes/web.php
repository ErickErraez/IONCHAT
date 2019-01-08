<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
   return $publicacion;

|
*/

$router->get('/', function () use ($router) {
    $publicacion = array(
         array(
            'nombre'=>'Fernando',
            'contenido'=>'Nada nos podra detener hoy en nuestro afan por disfrutar de este hermoso dia juntos.'
        ),
       array(
            'nombre'=>'Marco',
            'contenido'=>'Solo a Dios le doy la capacidad de que pueda juzgarme'
        )
       );

   return json_encode($publicacion);
});
