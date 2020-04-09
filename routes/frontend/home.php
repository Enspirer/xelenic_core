<?php
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PartnershipsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\ProfileController;
use App\Http\Controllers\Frontend\CloudServiceController;
use App\Http\Controllers\Frontend\MyServicesController;
use App\Http\Controllers\Frontend\CloudServices\Services\AutFactor;
use App\Http\Controllers\Frontend\CloudServices\Services\APIManager;
use App\Http\Controllers\Frontend\CloudServices\Services\WebsiteBuilder;
/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('about', [AboutController::class, 'index'])->name('frontend.about');
Route::get('services', [ServicesController::class, 'index'])->name('frontend.services');
Route::get('products', [ProductsController::class, 'index'])->name('frontend.products');
Route::get('partnerships', [PartnershipsController::class, 'index'])->name('frontend.partnerships');
Route::get('blog', [BlogController::class, 'index'])->name('frontend.blog');
Route::get('faq', [FaqController::class, 'index'])->name('frontend.faq');
Route::get('contact', [ContactController::class, 'index'])->name('frontend.contact');
Route::get('team', [TeamController::class, 'index'])->name('frontend.team');
Route::get('events', [EventsController::class, 'index'])->name('frontend.events');
Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');


//API Builder API Endpoints
Route::get('api/get-table-data/{app_key}/{table_id}/{user_id}', [APIManager::class, 'api_get_table_data'])->name('api_get_table_data');



/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        // User Dashboard Specific
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        //Cloud Service Controller
        Route::get('cloud-service', [CloudServiceController::class, 'index'])->name('cloud_services');
        Route::get('cloud-service/view_service/{id}', [CloudServiceController::class, 'view_service'])->name('cloud_services.view');
        Route::post('cloud-service/insert_armc', [CloudServiceController::class, 'addservices'])->name('cloud_services.addservices');

        //API Builder (API Manager Controller)
        Route::post('cloud-service/api_builder/create_app', [APIManager::class, 'create_app'])->name('api_builder.create_app');
        Route::get('cloud-service/api_builder/{app_id}/{api_key}/user-relnetworkQtemd0092/{user_id}/{service_id}', [APIManager::class, 'view_app_page'])->name('api_builder.view_app_page');
        Route::post('cloud-service/api_builder-erts/change_app_type', [APIManager::class, 'change_app_type'])->name('api_builder.change_app_type');
        Route::get('cloud-service/api_builder-erts/dashboard/{app_id}/{api_key}/aws-gpis/{user_id}/{service_id}', [APIManager::class, 'api_dashboard'])->name('api_builder.dashboard');
        Route::post('cloud-service/api_builder-erts/insert_table', [APIManager::class, 'create_table'])->name('api_builder.create_table');
        Route::get('cloud-service/api_builder-erts/delete_table/{table_id}', [APIManager::class, 'delete_table'])->name('api_builder.delete_table_permenent');
        Route::get('cloud-service/api_builder-erts/edit-table/{table_id}/{table_key}/{service_id}/{app_id}', [APIManager::class, 'table_edit_page'])->name('table_edit_page');
        Route::get('cloud-service/api_builder-erts/view-data-entry/{table_id}/{table_key}/{service_id}/{app_id}', [APIManager::class, 'view_data_entry'])->name('view_data_entry');
        Route::post('cloud-service/api_builder-erts/insert_record', [APIManager::class, 'insert_record'])->name('api_builder.insert_record');
        Route::post('cloud-service/api_builder-erts/insert_data_field', [APIManager::class, 'insert_data_field'])->name('api_builder.insert_data_field');
        Route::get('cloud-service/api_builder-erts/delete/{field_id}/{table_id}', [APIManager::class, 'delete_data_field'])->name('api_builder.delete_id');


        //API Builder (API Endpoints)
        //My Service Common Function
        Route::get('my-services/indexing/', [MyServicesController::class, 'index'])->name('my_service.index');
        Route::get('my-services/open-service/{service_id}/{service_token}', [MyServicesController::class, 'open_service'])->name('my_service.open_service');


        //Auth Factor
        Route::post('activat-auth-factor/activate_auth-factor-erts/activate', [AutFactor::class, 'activate_auth_factor'])->name('api_builder.activate_auth_factor');
        Route::post('activat-auth-factor/activate_auth-factor-erts/deactivate', [AutFactor::class, 'deactivate_auth_factor'])->name('api_builder.deactivate_auth_factor');


        //QulintWebsite Builder
        Route::get('qulint-builder/website-builder/{q_id}/{service_id}', [WebsiteBuilder::class, 'builder_panel'])->name('qulint_builder.builder_panel');
        Route::post('qulint-builder/website-builder/insert_page', [WebsiteBuilder::class, 'insert_page'])->name('qulint_builder.insert_page');
        Route::post('qulint-builder/website-builder/save-qulint', [WebsiteBuilder::class, 'save_page'])->name('qulint_builder.save_page');
        Route::post('qulint-builder/website-builder/website', [WebsiteBuilder::class, 'save_website'])->name('qulint_builder.save_website');

        Route::get('qulint-builder/preview/{q_id}', [WebsiteBuilder::class, 'preview_qulint'])->name('qulint_builder.preview_qulint');



        // User Account Specific
        Route::get('account', [AccountController::class, 'index'])->name('account');
        // User Profile Specific
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');










    });
});
