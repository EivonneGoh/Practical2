<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\Companies;

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



//Route::get('users', [Users::class, 'Index']);
//Route::get('users/{users}', [Users::class, 'Index']);
//Route::get('user/{username}',[Users::class, 'loadView']);
Route::get('users',[Users::class, 'testData']); // Users-> Controller, testData -> function inside the Controller
Route::view('addUser','addUser');
Route::post('addUser',[Users::class, 'addUser']);

Route::view("signUp","signUp");
Route::post("signUp",[Companies::class,'signUp']);
Route::get('deleteUser/{id}',[Users::class,'deleteUser']);

Route::get('/updateUser/{id}',[Users::class,'showUpdate']);
Route::post('/updateUser/{id}',[Users::class,'updateUser']);


Route::get("showOne",[Companies::class,'OneToOne']);
Route::get("showMany",[Companies::class,'OneToMany']);
/*Route::get('/ContactUs', function () {
    return view('contactus');
});

Route::get('/AboutUs', function () {
    return view('aboutus');
});


Route::get('/hello/{username}', function ($username) {
    return view('hello', ['user' => $username]);
});



// This should be last to avoid catching other routes
Route::get('/{username}', function ($username) {
    return redirect("AboutUs");
 });


*/
Route::get('/', function () {
    return view('try');
});
