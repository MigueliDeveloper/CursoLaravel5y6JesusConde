<?php

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'TicketsController@create');

/* Listar Tickets */
Route::get('/tickets', 'TicketsController@index');

/* Mostrat un ticket */
Route::get('/tickets/{slug?}', 'TicketsController@show');

/* Editar un ticket */
Route::get('/tickets/{slug?}/edit', 'TicketsController@edit');

/* Metodo Post  */
Route::post('/contact', 'TicketsController@store');

/* se ejecuta el update de ticketsController */
Route::post('/tickets/{slug?}/edit', 'TicketsController@update');

/* Elininar un ticket */
Route::post('/tickets/{slug?}/edit', 'TicketsController@destroy');

/* indicamos que cuando enviamos una peticion push se debe ejecutar la acción
    newComment dentro del controller CommentsController  */
Route::post('/comment', 'CommentsController@newComment');

/*
|    Realizamos una llamada al Controller
*/

/*
    Route::get('/', 'HomeController@home');
*/

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
