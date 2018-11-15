<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
    //return "Hola";
});

Route::get('/home', function () {
    return view('welcome');
    //return "Hola";
});
Route::get('/grafica1', function () {
    return view('grafica1');
    //return "Hola";
});

Route::get('/grafica2', function () {
    return view('grafica2');
    //return "Hola";
});

Route::get('/datatable', function () {
    return view('datatable');
    //return "Hola";
});
Route::get('/form1', function () {
    return view('form1');
    //return "Hola";
});

Route::get('/form2', function () {
    return view('form2');
    //return "Hola";
});

//Ruta con PHP clasica con el metodo GET nuestro el id de un usuario
Route::get('/usr', function() {
	return 'Mostrando el id del usuario: '.$_GET['id'];
	//en la URL se deberia de invocar mediante: localhost/usr?id=5
});

//Ruta con LARAVEL mostrando el id de usuario con PARAMETROS{{}}
Route::get('/usr/{id}', function($id) {
	return "Mostrando el id del usuario con parametros: {$id}";
	//en la URL se deberia de invocar mediante: localhost/usr?id=5
})->where('id','[0-9]+');


//Ruta para crear usuarios
Route::get('/usr/nuevo', function() {
	return "Creando nuevo usuario";
});

//Ruta con 2 parametros
Route::get('/saludo/{name}/{nickname?}', function($name,$nickname=null) {
	if($nickname){
		return "Bienvenido {$name}, tu apodo es: {$nickname}";
	}else{
		return "Bienvenido {$name}, no tienes apodo";
	}
});