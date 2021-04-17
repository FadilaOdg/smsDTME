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

Route::get('/', function () {
    return view('auth.login');
});


//Route::get('/newcontact','NewcontactController@formulaire')->name('newcontact');


//Route::get('/contact/addgroup','ContactController@addgroup');
Route::get('contact/{contact}/addgroup', 'ContactController@addgroup')->name('contact.addgroup');
Route::post('contact/addtogroup', 'ContactController@addtogroup')->name('contact.addtogroup');
Route::any('contact/{contactgroup}/removefromgroup', 'ContactController@removefromgroup')->name('contact.removefromgroup');

Route::get('/users', 'UserController@getusers')->name('/users');;

Route::get('group/{group}/addcontact', 'GroupController@addcontact')->name('group.addcontact');
Route::post('group/addtocontact', 'GroupController@addtocontact')->name('group.addtocontact');
Route::any('group/{contactgroup}/removefromgroup', 'GroupController@removefromgroup')->name('group.removefromgroup');

//route création d'utilisateur
Route::resource('user','UserController');
Route::resource('typeuser','TypeuserController');
Route::resource('profil','ProfilController');
Route::resource('contact','ContactController');
Route::resource('group','GroupController');
Route::resource('typemessage','TypemessageController');
Route::resource('modele','ModeleController');
Route::resource('contactgroup','ContactGroupController');
Route::resource('message','MessageController');

Route::get('/search','UserController@search')->name('user.search');
Route::get('/recherche','TypeuserController@recherche')->name('typeuser.recherche');
Route::get('/recherch','GroupController@recherch')->name('group.recherch');
Route::get('/searching','ContactController@searching')->name('contact.searching');
Route::get('/rechercher','TypemessageController@rechercher')->name('typemessage.rechercher');
Route::get('/recherchee','ModeleController@recherchee')->name('modele.recherchee');



//Route::post('contact/Cgroupshow','ContactController@Cgroupshow')->name('Cgroupshow');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('admin', 'Admin\LoginController@showLoginForm')->name('auth.login');
//Route::post('admin', 'Admin\LoginController@login');
//Route::get('admin/home', 'AdminController@index');