<?php

/*
|    Realizamos una llamada al Controller
*/

Route::get('/', 'HomeController@home');





/*
|   Route::get('/', function () {
|    return view('welcome');
|    });

|
*/

/*
|    Route::get('/', function() {
|        return 'hola mundo';
|    });
*/
/*
|   Crear la ruta de una url
|
|   Route::get('testing/cualquiera/nuevo', function(){
|        return 'Aprendiendo rutas';
|    })
*/

/*
|   Las rutas pueden ser caoticas a partir de las 20 o 30 paginas, a partir de
|    ahí es mejor usar Controllers
*/
/*
|   Route::get('usuarios/{nombre?}', function($nombre='Esther, Mario, Yolanda, Maria, Nuria, Jose'){
|       return $nombre;
|   })->where('nombre', '[a-zA-Z]+');
|
|        //Devuelve todos los usuarios
    });

    Route::post('usuarios', function(){
        //Crea un nuevo usuario
    });
*/

?>
