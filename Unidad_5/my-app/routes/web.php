<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::get('/', function () {
    return view('login');
});
Route::get('/home', function () {
    return ('home');
});

Route::get('/saludar/{name}/', function ($name) {
    return view('saludo',['name' => $name]);
})->where(['name' => '[A-Za-z]+']);

Route::get('/saludo/{name}/{lastname?}', function ($name, $lastname=' ') {
    return 'Hola '.$name.' '.$lastname;
})->where(['name' => '[A-Za-z]+', 'lastname' => '[A-Za-z]+']);

Route::get('/operaciones/{operacion}/{num1}/{num2}', function ($operacion,$num1, $num2) {
    switch($operacion){
        case "suma":
            return $num1 + $num2;
        break;
        case "resta":
            return $num1 - $num2;
        break;
        case "multi":
            return $num1 * $num2;
        break;
        case "div":
            return $num1 / $num2;
        break;
    }
    
})->where(['operacion' => '(suma|resta|multi|div)','num1' => '[0-9]+','num2' => '[0-9]+']);

Route::get('/user/{name}', [UserController::class, 'index'])->where(['name' => '[A-Za-z]+']);
*/
Route::get('/users', [UserController::class, 'index']);


