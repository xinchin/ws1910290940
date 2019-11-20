<?php

use Faker\Provider\Image;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// https://laracasts.com/discuss/channels/laravel/how-to-save-upload-image-to-directory-in-laravel-58?page=1

Route::post('/mytest', function(Request $request){

    if ($request->hasFile('image')) {
        $image      = $request->file('image');
        $fileName   = time() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path().'/images/', $fileName);
        return $request;
    }
});
