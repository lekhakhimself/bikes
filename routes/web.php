<?php

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
    return view('welcome');
});

Auth::routes();




Route::get('logout', 'Auth\LoginController@logout')->name('Logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/adminheader','admincontroller@header')-> middleware('auth')->name('adminheader');
Route::get('/admindash','admincontroller@admindashboard')->name('admindash');
Route::get('/addbikes','admincontroller@addbike')-> middleware('auth')->name('addbikes');
Route::get('/addbikescategory','admincontroller@addbikecategory')-> middleware('auth')->name('addbike_category');
Route::post('/registerbike','admincontroller@addnewbikes')->name('addnewbike');
Route::post('/registerbikecategory','BikeCategory@addNewBikesCategory')->name('addBikeCategory');
Route::get('/addbikedetails','bikeDetails@bikeDetail')-> middleware('auth')->name('addBikeDetails');
Route::post('/registerbikedetails','bikeDetails@AddBikesDetails')->name('registerBikeDetails');
Route::get('/viewgeometry','bikesGeometry@viewgeometry')-> middleware('auth')->name('viewbikesgeometry');
Route::post('/registergeometry','bikesGeometry@registerGeometry')->name('registerbikesgeometry');
Route::get('/viewimage','images@viewimage')-> middleware('auth')->name('registerimage');
Route::post('/addimage','images@addimage')->name('registernewimage');
Route::get('/viewdescription','description@adddescription')-> middleware('auth')->name('addTechnicalDescription');
Route::post('/registerdescription','description@registerDescription')->name('registerTechnicalDescription');
Route::get('/viewmenue','addmenu@viewmenus')-> middleware('auth')->name('addmenus');
Route::post('/registermenues','addmenu@registermenu')->name('registermenus');
Route::get('/viewmenueitem','menuitem@viewmenuform')-> middleware('auth')->name('addmenuitem');
Route::post('/registermenueitem','menuitem@registermenuitem')-> middleware('auth')->name('registermenuitem');
Route::get('/showbcategory','BikeCategory@showcategory')-> middleware('auth')->name('showCategory');
Route::get('/editbikecategory/{id}','BikeCategory@showeditbikecategory')-> middleware('auth')->name('editCategory');
Route::post('/updatecategory/{id}','BikeCategory@updatecategory')-> middleware('auth')->name('updateCategory');
Route::get('/deletecategory/{id}','BikeCategory@deletecategory')-> middleware('auth')->name('deleteCategory');
Route::get('/showbike','admincontroller@showbikes')-> middleware('auth')->name('ShowBikes');
Route::get('/editbikes/{id}','admincontroller@showeditbikes')-> middleware('auth')->name('editBikes');
Route::post('/updatebike/{id}','admincontroller@updatebikes')-> middleware('auth')->name('updateBike');
Route::get('/deletebike/{id}','admincontroller@deletebike')-> middleware('auth')->name('deleteBikes');
Route::get('/showbikedetails','bikeDetails@showbikedetails')-> middleware('auth')->name('ShowBikeDetails');
Route::get('/editbikedetails/{id}','bikeDetails@showeditbikedetails')-> middleware('auth')->name('editbikeDetails');
Route::get('/deletebikedetails/{id}','bikeDetails@deletedetails')-> middleware('auth')->name('deleteBikeDetails');
Route::post('/updatebikedetails/{id}','bikeDetails@UpdateBikeDetails')-> middleware('auth')->name('updateBikeDetails');
Route::get('/showbikeimages','images@showbikeimages')-> middleware('auth')->name('ShowBikeImages');
Route::get('/editbikimages/{id}','images@showeditimage')-> middleware('auth')->name('editbikeImges');
Route::post('/updateimage/{id}','images@updateimage')-> middleware('auth')->name('updateImage');
Route::get('/deleteimage/{id}','images@deleteimage')-> middleware('auth')->name('deleteBikeImage');
Route::get('/showbikegeometry','bikesGeometry@showGeometry')-> middleware('auth')->name('ShowBikeGeometry');
Route::get('/editbikegeometry/{id}','bikesGeometry@showeditgeometry')-> middleware('auth')->name('EditBikeGeometry');
Route::post('/updatebikegeometry/{id}','bikesGeometry@UpdateBikeGeometry')-> middleware('auth')->name('updateBikeGeometry');
Route::get('/deletegallery/{id}','bikesGeometry@deletegeometry')-> middleware('auth')->name('deleteBikeGeometry');
Route::get('/showdescription','description@showtechdescription')-> middleware('auth')->name('ShowTechnicalDescription');
Route::get('/showeditdescription/{id}','description@showeditbikedescription')-> middleware('auth')->name('ShowEditTechnicalDescription');
Route::post('/updateDescription/{id}','description@UpdateBikeDescription')-> middleware('auth')->name('updateBikeDescription');
Route::get('/deleteDescription/{id}','description@deletedescription')-> middleware('auth')->name('DeleteBikeDescription');
Route::get('/showmenus','addmenu@showmenu')-> middleware('auth')->name('ShowMenu');
Route::get('/showeditmenu/{id}','addmenu@showeditmenu')-> middleware('auth')->name('showedmenu');
Route::post('/updatemenu/{id}','addmenu@Updatemenu')-> middleware('auth')->name('UpdateMenu');
Route::get('/deletemenu/{id}','addmenu@deletemenu')-> middleware('auth')->name('DeleteMenu');
Route::get('/showmenuitem','menuitem@showmenuitems')-> middleware('auth')->name('ShowMenuItem');
Route::get('/showeditmenuitem/{id}','menuitem@showeditmenuitem')-> middleware('auth')->name('showedmenuItem');
Route::post('/updatemenuitem/{id}','menuitem@updatemenuItem')-> middleware('auth')->name('UpdateMenuItem');

Route::get('/deletemenuitem/{id}','menuitem@deletemenuitem')-> middleware('auth')->name('DeleteeMenuItem');
Route::get('/addconfiguration','config@configuration')-> middleware('auth')->name('AddConfiguration');
Route::post('/registerconfiguration','config@registerConfig')-> middleware('auth')->name('RegisterConfiguration');
Route::get('/showconfiguration','config@showconfigs')-> middleware('auth')->name('ShowConfiguration');
Route::get('/showeditconfig/{id}','config@showeditconfig')-> middleware('auth')->name('ShowEditConfig');
Route::post('/updateconfiguration/{id}','config@UpdateConfiguration')-> middleware('auth')->name('UpdateConfiguration');
Route::get('/deleteconfiguration/{id}','config@deleteConfiguration')-> middleware('auth')->name('DeleteConfiguration');
Route::get('/userhome','UserController@viewhome')->name('userhome');
Route::get('/userniews','UserController@viewniews')->name('userniews');
Route::get('/userfietsen','UserController@viewfietsen')->name('userfietsen');
Route::get('/useroveran','UserController@viewoverans')->name('useroveran');
Route::get('/details','UserController@viewdetails')->name('details');
Route::post('/searchbike','UserController@search')->name('search');
Route::get('/sbikedetails/{slug}','UserController@sbikedetails')->name('sbikedetails');
Route::get('/scategorydetails/{id}/','UserController@bikecatedetails')->name('scategorydetails');










