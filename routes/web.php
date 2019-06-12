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
//MUESTRA LA RUTA DE LA VISTA WELCOME
//Route::get('/', function () {
//    return view('welcome');
//});

//MUESTRA LA RUTA DE LA VISTA HOLA (HOLA.BLADE.PHP)
#Route::get('/hola', function () {
#    return view('hola');
#});

//CUANDO UN USUARIO HACE UNA PETICION HTTP, LARAVEL BUSCA EN LOS ARCHIVOS DE RUTAS UNA DEFINICION QUE COINCIDA CON EL PATRON DE LA URL SEGUN EL METODO HTTP USADO, Y EN LA PRIMERA COINCIDENCIA LE MUESTRA EL RESULTADO AL USUARIO

//retornar un string url /taw
#Route::get('/taw', function () {
#    return ('Bienvenidos');
#});

#Route::get('/ho', function(){
#    return 'Mostrando el id del usuario '.$_GET['id'];
#});
// Debemos poner en la url http://127.0.0.1/8000/useer?id=5

//MOSTRAR UNA RUTA LIMPIA
#Route::get('/ho/{id}', function($id){
#    return "Mostrando el id del usuario {$id}";
#})->where ('id','[0-9]+');
//DEbemos poner en la url http://127.0.0.1/8000/ho/5

//RUTAS CON 2 PARAMETROS
#Route::get('/saludo/{name}/{nickname}', function($name,$nickname){
#    return "Bienvenido: {$name}, tu apodo es: {$nickname}";
#});
//DEbemos poner en la url http://127.0.0.1/8000/saludo/cathy/bonita

//RUTAS CON NICKNAME OPCIONAL  /**el ? es para decir que puede ser nulo */
#Route::get('/saludo2/{name}/{nickname?}', function($name,$nickname=null){
#    if($nickname){
#        return "Bienvenido: {$name}, tu apodo es {$nickname}";
#    }else{
#        return "Bienvenido: {$name}, tu no tienes apodo";
#    }
#    
#});
//DEbemos poner en la url http://127.0.0.1/8000/saludo2/cathy

//RUTAS PLANTILLA PRINCIPAL
Route::get('/', function(){
        return view('principal');
});

//RUTAS PLANTILLA PRINCIPAL
Route::get('/contenido', function(){        
        return view('principal/contenido');
});

//RUTAS PLANTILLA PRINCIPAL
#Route::get('/escritorio', function(){
#        $values=array("id"=>"escritorio");
#        return view('principal/escritorio',$values);
#});
//DEbemos poner en la url http://127.0.0.1/8000/principal

//RUTAS PLANTILLA PRINCIPAL (CON SECTION & YIELD)
Route::get('/escritorio', function(){    
    return view('principal/escritorio');
});
//DEbemos poner en la url http://127.0.0.1/8000/principal

//Route::get('/{theme}','mvcController@showTheme');


