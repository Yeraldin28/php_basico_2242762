<?php

use Facade\Ignition\SolutionProviders\InvalidRouteActionSolutionProvider;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
// cuando invoque la variable  "variable" se hacen las diferentes funciones, es lo que dice el codigo
Route::get('variable', function(){
//definir una variable
$mensaje= 20;
//funncion var_dum: analizar una variable
//muestra tipo de dato y valor
//para analizar una variable
var_dump($mensaje);
//tambien analiza la variable pero
//sin ser tan especifico
print_r($mensaje);
echo"<hr />" ;// linea
$mensaje=" hola mundo";
var_dump($mensaje);
});
Route::get('arreglos', function () {
    $estudiantes=[ "ana",
    "maria", "jorge"];
    $indoceASO=["uN" =>"ana",
    "AN" =>"maria", 6 => "jorge"];
    echo "<pre>";
    print_r($estudiantes);
    echo "</pre>";
    echo "<pre>";
    print_r($indoceASO);
    echo "</pre>";
//arreglo: estructura de datos
});
Route::get('paises', function () {
    $paises= ["colombia"=>[
"capital" => "bogota",
"moneda" =>569874

    ],
    "peru"=>[
        "capital" => "bogota",
        "moneda" =>569874
    ],
    "paraguay"=>[
        "capital" => "bogota",
        "moneda" =>569874
    ],];

foreach($paises as $nombre=> $pais){
  echo'<pre>';
  echo "<h1>$nombre</h1>";
    print_r($pais["capital"]);

    print_r($pais["moneda"]);
    echo"</pre>";
    echo "<hr />";
}





});
