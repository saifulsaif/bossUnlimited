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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/photo', 'HomeController@photo')->name('photo');
Route::get('/video', 'HomeController@video')->name('video');
Route::get('/promotion', 'HomeController@promotion')->name('promotion');
Route::get('/contact-us', 'HomeController@contact')->name('contact');
Route::get('/user-profile', 'HomeController@profile')->name('profile');
Route::get('/photos/view/{id}/{category_id}', 'HomeController@photoView')->name('photos');
Route::post('/search/photo','HomeController@searchPhoto')->name('search.photo');



Route::post('photo/save','UserController@savePhoto')->name('save.photo');
Route::get('/photo/delete/{id}', 'UserController@deletePhoto')->name('delete.photo');
Route::get('/update-profile', 'UserController@updateProfile')->name('update.profile');
Route::post('/update-profile-info', 'UserController@updateProfileInfo')->name('update.profile.info');
Route::get('/user/profile/{id}', 'UserController@userProfile');


Route::get('/admin/dashboard', 'AdminController@index')->name('admin');
Route::get('/admin/slider', 'AdminController@slider')->name('slider');
Route::post('/admin/save', 'AdminController@sliderSave')->name('slider.save');
Route::get('/admin/slider/delete/{id}', 'AdminController@sliderDelete')->name('slider.delete');

Route::get('/admin/all-photos', 'AdminController@allPhoto')->name('all_photo');
Route::get('/admin/my-photos', 'AdminController@myPhoto')->name('my_photo');
// Route::post('/admin/save', 'AdminController@sliderSave')->name('slider.save');
// Route::get('/admin/slider/delete/{id}', 'AdminController@sliderDelete')->name('slider.delete');

Route::get('/admin/category', 'AdminController@category')->name('category');
Route::post('/admin/category/save', 'AdminController@categorySave')->name('category.save');
Route::get('/admin/catgory/delete/{id}', 'AdminController@categoryDelete')->name('category.delete');

Route::get('/admin/users', 'AdminController@Users')->name('users');

Route::get('/admin/promotion', 'AdminController@Promotion')->name('admin.promotion');
Route::post('/admin/promotion/save', 'AdminController@promotionSave')->name('promotion.save');
Route::get('/admin/promotion/delete/{id}', 'AdminController@promotionDelete')->name('promotion.delete');

Route::get('/admin/setting', 'AdminController@setting')->name('setting');
Route::post('admin/setting/update','AdminController@settingUpdate')->name('setting.update');
