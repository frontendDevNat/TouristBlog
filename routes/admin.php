<?php
/**
 * Created by PhpStorm.
 * User: Наталья
 * Date: 26.05.2018
 * Time: 18:42
 */

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('welcome_admin');
});