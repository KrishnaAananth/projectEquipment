<?php

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

//Guests

// Guest Index Page (Home Page)
Route::get('/', 'Plain_Controllers\GuestController@index');



Auth::routes();


// Customer Profile Page
Route::get('/equipment_provider', 'Plain_Controllers\CustomerController@profile');

// Customer Profile Contacts Information Page
Route::get('/equipment_provider-profile-contact-information/{id}', 'Plain_Controllers\CustomerController@myProfileContactInformation');

// Customer Profile Address Book Page
Route::get('/equipment_provider-profile-address-book/{id}', 'Plain_Controllers\CustomerController@myProfileAddressBook');

// Customer Profile Equipments Page
Route::get('/equipment_provider-equipments/{id}', 'Plain_Controllers\CustomerController@myProfileEquipments');

//Resources

//Contact Controller
Route::resource('contact', 'Resource_Controllers\ContactController');

//Address Controller
Route::resource('address', 'Resource_Controllers\AddressController');

//Equipment Controller
Route::resource('equipment', 'Resource_Controllers\EquipmentController');

//Equipment Provider Controller
Route::resource('equipment_provider', 'Resource_Controllers\EquipmentProviderController');
