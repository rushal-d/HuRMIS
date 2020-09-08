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

Route::get('/', 'Auth\LoginController@showLoginForm');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('/');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/importData', 'HomeController@importData')->name('importData');
Route::get('/sampleTrainingData', 'HomeController@sampleTrainingData')->name('sampleTrainingData');

Route::group(['middleware' => ['auth', 'permissionmiddleware', 'web']], function () {

/*User management roles------ENTRUST*/
Route::resource('role', 'RoleController');
Route::resource('permission', 'PermissionController');
Route::post('/permission/add', 'PermissionController@add')->name('permission.add');
Route::post('/permission/addmenu', 'PermissionController@displayNameStore')->name('permission.addmenu');
Route::resource('user', 'UserController');
Route::resource('assignrole', 'AssignRoleController');

/*New Menu*/
Route::get('menu', 'MenuController@index')->name('menu-index');
Route::post('menu/store', 'MenuController@store')->name('menu-store');
Route::post('menu/buildMenu', 'MenuController@buildMenu')->name('menu-build-menu');
Route::post('menu/delete', 'MenuController@destroy')->name('menu-delete');
Route::get('menu/search', 'MenuController@search')->name('menu-search');
Route::post('menu/displayNameStore', 'MenuController@displayNameStore')->name('display-name-store');

/*Posts*/
Route::get('/post', 'PostController@index')->name('post.index');
Route::get('/post/create', 'PostController@create')->name('post.create');
Route::post('/post/store', 'PostController@store')->name('post.store');

/*Personal Information*/
Route::get('/personal', 'PersonalInformationController@index')->name('personal.index');
Route::get('/personal/report', 'PersonalInformationController@report')->name('personal.report');
Route::get('/personal/create', 'PersonalInformationController@create')->name('personal.create');
Route::post('/personal/store', 'PersonalInformationController@store')->name('personal.store');
Route::get('/personal/show/{id}', 'PersonalInformationController@show')->name('personal.show');
Route::get('/personal/edit/{id}', 'PersonalInformationController@edit')->name('personal.edit');
Route::patch('/personal/update/{id}', 'PersonalInformationController@update')->name('personal.update');
Route::get('/personal/destroy/{id}', 'PersonalInformationController@destroy')->name('personal.destroy');
Route::get('/personal/exportview', 'PersonalInformationController@exportView')->name('personal.exportview');
Route::get('/personal/search', 'PersonalInformationController@search')->name('personal.search');
Route::post('/personal/showByPin', 'PersonalInformationController@showByPin')->name('personal.showByPin');
Route::post('/personal/showByCouncil', 'PersonalInformationController@showByCouncil')->name('personal.showByCouncil');
Route::get('/personal/dashboard', 'PersonalInformationController@dashboard')->name('personal.dashboard');
Route::post('/personal/sendSMS', 'PersonalInformationController@sendSMS')->name('personal.sendSMS');
Route::get('/personal/reportdashboard', 'PersonalInformationController@reportdashboard')->name('personal.reportdashboard');
Route::get('/personal/searchbyinstitution/', 'PersonalInformationController@searchbyinstitution')->name('personal.searchbyinstitution');
Route::get('/personal/searchbymun', 'PersonalInformationController@searchbymun')->name('personal.searchbymun');
Route::get('/personal/searchbygender', 'PersonalInformationController@searchbygender')->name('personal.searchbygender');
Route::get('/personal/searchbydistrict', 'PersonalInformationController@searchbydistrict')->name('personal.searchbydistrict');
Route::get('/personal/searchbypost', 'PersonalInformationController@searchbypost')->name('personal.searchbypost');
Route::get('/personal/searchbyprovince', 'PersonalInformationController@searchbyprovince')->name('personal.searchbyprovince');
Route::get('/personal/searchbystatus', 'PersonalInformationController@searchbystatus')->name('personal.searchbystatus');
Route::get('/personal/searchbyexperience', 'PersonalInformationController@searchbyexperience')->name('personal.searchbyexperience');
Route::get('/personal/searchbytraining', 'PersonalInformationController@searchbytraining')->name('personal.searchbytraining');

/*Educational Qualification*/
Route::get('/qualification', 'QualificationController@index')->name('qualification.index');
Route::get('/qualification/create', 'QualificationController@create')->name('qualification.create');
Route::post('/qualification/store', 'QualificationController@store')->name('qualification.store');
Route::get('/qualification/show/{id}', 'QualificationController@show')->name('qualification.show');
Route::get('/qualification/edit/{id}', 'QualificationController@edit')->name('qualification.edit');
Route::patch('/qualification/update/{id}', 'QualificationController@update')->name('qualification.update');
Route::get('/qualification/destroy/{id}', 'QualificationController@destroy')->name('qualification.destroy');

/*Training Information*/
Route::get('/training', 'TrainingController@index')->name('training.index');
Route::get('/training/create', 'TrainingController@create')->name('training.create');
Route::post('/training/store', 'TrainingController@store')->name('training.store');
Route::get('/training/show/{id}', 'TrainingController@show')->name('training.show');
Route::get('/training/edit/{id}', 'TrainingController@edit')->name('training.edit');
Route::patch('/training/update/{id}', 'TrainingController@update')->name('training.update');
Route::get('/training/destroy/{id}', 'TrainingController@destroy')->name('training.destroy');

/*Transfer Information*/
Route::get('/transfer', 'TransferController@index')->name('transfer.index');
Route::get('/transfer/create', 'TransferController@create')->name('transfer.create');
Route::post('/transfer/store', 'TransferController@store')->name('transfer.store');
Route::get('/transfer/show/{id}', 'TransferController@show')->name('transfer.show');
Route::get('/transfer/edit/{id}', 'TransferController@edit')->name('transfer.edit');
Route::patch('/transfer/update/{id}', 'TransferController@update')->name('transfer.update');
Route::get('/transfer/destroy/{id}', 'TransferController@destroy')->name('transfer.destroy');

/*Promotion Information*/
Route::get('/promotion', 'PromotionController@index')->name('promotion.index');
Route::get('/promotion/create', 'PromotionController@create')->name('promotion.create');
Route::post('/promotion/store', 'PromotionController@store')->name('promotion.store');
Route::get('/promotion/show/{id}', 'PromotionController@show')->name('promotion.show');
Route::get('/promotion/edit/{id}', 'PromotionController@edit')->name('promotion.edit');
Route::patch('/promotion/update/{id}', 'PromotionController@update')->name('promotion.update');
Route::get('/promotion/destroy/{id}', 'PromotionController@destroy')->name('promotion.destroy');

/*Leave Information*/
Route::get('/leave', 'LeaveController@index')->name('leave.index');
Route::get('/leave/create', 'LeaveController@create')->name('leave.create');
Route::post('/leave/store', 'LeaveController@store')->name('leave.store');
Route::get('/leave/show/{id}', 'LeaveController@show')->name('leave.show');
Route::get('/leave/edit/{id}', 'LeaveController@edit')->name('leave.edit');
Route::patch('/leave/update/{id}', 'LeaveController@update')->name('leave.update');
Route::get('/leave/destroy/{id}', 'LeaveController@destroy')->name('leave.destroy');

/*Status Information*/
Route::get('/status', 'StatusController@index')->name('status.index');
Route::get('/status/create', 'StatusController@create')->name('status.create');
Route::post('/status/store', 'StatusController@store')->name('status.store');
Route::get('/status/show/{id}', 'StatusController@show')->name('status.show');
Route::get('/status/edit/{id}', 'StatusController@edit')->name('status.edit');
Route::patch('/status/update/{id}', 'StatusController@update')->name('status.update');
Route::get('/status/destroy/{id}', 'StatusController@destroy')->name('status.destroy');

/*Additional Information*/
Route::get('/additional', 'AdditionalInformationController@index')->name('additional.index');
Route::get('/additional/create', 'AdditionalInformationController@create')->name('additional.create');
Route::post('/additional/store', 'AdditionalInformationController@store')->name('additional.store');
Route::get('/additional/show/{id}', 'AdditionalInformationController@show')->name('additional.show');
Route::get('/additional/edit/{id}', 'AdditionalInformationController@edit')->name('additional.edit');
Route::patch('/additional/update/{id}', 'AdditionalInformationController@update')->name('additional.update');
Route::get('/additional/destroy/{id}', 'AdditionalInformationController@destroy')->name('additional.destroy');

});
    

Route::get('form-index', function () {
    return view('form.index');
});

Route::get('form-create', function () {
    return view('form.create');
});

Route::get('form-show', function () {
    return view('form.show');
});
Route::get('chalani-index', function () {
    return view('chalani.index');
});

Route::get('chalani-create', function () {
    return view('chalani.create');
});

Route::get('chalani-show', function () {
    return view('chalani.show');
});