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
Route::get('/addbikes','admincontroller@addbike')->name('addbikes');
Route::get('/addbikescategory','admincontroller@addbikecategory')->name('addbike_category');
Route::post('/registerbike','admincontroller@addnewbikes')->name('addnewbike');
Route::post('/registerbikecategory','BikeCategory@addNewBikesCategory')->name('addBikeCategory');
Route::get('/addbikedetails','bikeDetails@bikeDetail')->name('addBikeDetails');
Route::post('/registerbikedetails','bikeDetails@AddBikesDetails')->name('registerBikeDetails');
Route::get('/viewgeometry','bikesGeometry@viewgeometry')->name('viewbikesgeometry');
Route::post('/registergeometry','bikesGeometry@registerGeometry')->name('registerbikesgeometry');
Route::get('/viewimage','images@viewimage')->name('registerimage');
Route::post('/addimage','images@addimage')->name('registernewimage');
Route::get('/viewdescription','description@adddescription')->name('addTechnicalDescription');
Route::post('/registerdescription','description@registerDescription')->name('registerTechnicalDescription');
Route::get('/viewmenue','addmenu@viewmenus')->name('addmenus');
Route::post('/registermenues','addmenu@registermenu')->name('registermenus');
Route::get('/viewmenueitem','menuitem@viewmenuform')->name('addmenuitem');
Route::post('/registermenueitem','menuitem@registermenuitem')->name('registermenuitem');
Route::get('/showbcategory','BikeCategory@showcategory')->name('showCategory');
Route::get('/editbikecategory/{id}','BikeCategory@showeditbikecategory')->name('editCategory');
Route::post('/updatecategory/{id}','BikeCategory@updatecategory')->name('updateCategory');
Route::get('/deletecategory/{id}','BikeCategory@deletecategory')->name('deleteCategory');
Route::get('/showbike','admincontroller@showbikes')->name('ShowBikes');
Route::get('/editbikes/{id}','admincontroller@showeditbikes')->name('editBikes');
Route::post('/updatebike/{id}','admincontroller@updatebikes')->name('updateBike');
Route::get('/deletebike/{id}','admincontroller@deletebike')->name('deleteBikes');
Route::get('/showbikedetails','bikeDetails@showbikedetails')->name('ShowBikeDetails');
Route::get('/editbikedetails/{id}','bikeDetails@showeditbikedetails')->name('editbikeDetails');
Route::get('/deletebikedetails/{id}','bikeDetails@deletedetails')->name('deleteBikeDetails');
Route::post('/updatebikedetails/{id}','bikeDetails@UpdateBikeDetails')->name('updateBikeDetails');
Route::get('/showbikeimages','images@showbikeimages')->name('ShowBikeImages');
Route::get('/editbikimages/{id}','images@showeditimage')->name('editbikeImges');
Route::post('/updateimage/{id}','images@updateimage')->name('updateImage');
Route::get('/deleteimage/{id}','images@deleteimage')->name('deleteBikeImage');
Route::get('/showbikegeometry','bikesGeometry@showGeometry')->name('ShowBikeGeometry');
Route::get('/editbikegeometry/{id}','bikesGeometry@showeditgeometry')->name('EditBikeGeometry');
Route::post('/updatebikegeometry/{id}','bikesGeometry@UpdateBikeGeometry')->name('updateBikeGeometry');
Route::get('/deletegallery/{id}','bikesGeometry@deletegeometry')->name('deleteBikeGeometry');
Route::get('/showdescription','description@showtechdescription')->name('ShowTechnicalDescription');
Route::get('/showeditdescription/{id}','description@showeditbikedescription')->name('ShowEditTechnicalDescription');
Route::post('/updateDescription/{id}','description@UpdateBikeDescription')->name('updateBikeDescription');
Route::get('/deleteDescription/{id}','description@deletedescription')->name('DeleteBikeDescription');
Route::get('/showmenus','addmenu@showmenu')->name('ShowMenu');
Route::get('/showeditmenu/{id}','addmenu@showeditmenu')->name('showedmenu');
Route::post('/updatemenu/{id}','addmenu@Updatemenu')->name('UpdateMenu');
Route::get('/deletemenu/{id}','addmenu@deletemenu')->name('DeleteMenu');
Route::get('/showmenuitem','menuitem@showmenuitems')->name('ShowMenuItem');
Route::get('/showeditmenuitem/{id}','menuitem@showeditmenuitem')->name('showedmenuItem');
Route::post('/updatemenuitem/{id}','menuitem@updatemenuItem')->name('UpdateMenuItem');

Route::get('/deletemenuitem/{id}','menuitem@deletemenuitem')->name('DeleteeMenuItem');
Route::get('/addconfiguration','config@configuration')->name('AddConfiguration');
Route::post('/registerconfiguration','config@registerConfig')->name('RegisterConfiguration');
Route::get('/showconfiguration','config@showconfigs')->name('ShowConfiguration');
Route::get('/showeditconfig/{id}','config@showeditconfig')->name('ShowEditConfig');
Route::post('/updateconfiguration/{id}','config@UpdateConfiguration')->name('UpdateConfiguration');
Route::get('/deleteconfiguration/{id}','config@deleteConfiguration')->name('DeleteConfiguration');
Route::get('/userhome','UserController@viewhome')->name('userhome');
Route::get('/userniews','UserController@viewniews')->name('userniews');
Route::get('/userfietsen','UserController@viewfietsen')->name('userfietsen');
Route::get('/useroveran','UserController@viewoverans')->name('useroveran');
Route::get('/details','UserController@viewdetails')->name('details');
Route::post('/searchbike','UserController@search')->name('search');
Route::get('/sbikedetails/{slug}','UserController@sbikedetails')->name('sbikedetails');
Route::get('/scategorydetails/{id}/','UserController@bikecatedetails')->name('scategorydetails');










