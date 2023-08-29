<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/calcs/{value_1}/{operator}/{value_2}', function ($value_1,$operator,$value_2) {
//     $data = [
//             'value_1' => $value_1,
//             'operator' => $operator,
//             'value_2' => $value_2
//             ];
//     return view('calc.calculate',$data);
// });

// Route::get('/calcs', function () {

//     return view();
// });

Route::get('/calcs/{value_1}/{operator}/{value_2}', [App\Http\Controllers\CalcController::class, 'result']);
