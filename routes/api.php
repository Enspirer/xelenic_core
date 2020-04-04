<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\CloudServices\Services\APIManager;

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
    return 'apple';
});

Route::group(['middleware' => ['aut_key']], function () {
    //Get Table Details
    Route::get('cloud_service/get_tables/{app_key}/{table_key}', [APIManager::class, 'api_get_table_details'])->name('api_builder.get_table_details');

    //Get Table Fields
    Route::get('cloud_service/get_tables/{app_key}/{table_key}/get-fields', [APIManager::class, 'api_get_table_fields'])->name('api_builder.get_tables.fields');

});

