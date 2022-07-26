<?php

use App\Models\User;
use App\Models\Phone;
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
    // $phone = User::find(1); // find user 1
    // $phone = User::find(1)->phone; // find user 1 with phone info
    // $phone = User::find(2)->phone; // find user 2 with phone info
    // return $phone;

    // user from phone

    // $user = Phone::find(1); // find user 1 with phone info
    // $user = Phone::find(2)->user; // find user 2 with phone info
    // return $user;

    //get all users

    $users = User::all();

    // return $users;

    return view('welcome', compact('users'));
});
