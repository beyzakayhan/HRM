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
Route::get('/', 'AnasayfaController@index')->name('anasayfa');
Route::get('/personal-info', 'EmployeeController@index')->name('personal-info');
Route::get('/personal-info-add', 'EmployeeController@create')->name('personal-info-add');
Route::get('/overtime-info-add', 'PersonalInfoController@overtimeAdd')->name('overtime-info-add');
Route::get('/salary-info-add', 'PersonalInfoController@salaryAdd')->name('salary-info-add');
Route::get('/salary-info', 'PersonalInfoController@salaryInfo')->name('salary-info');
Route::get('/overtime-info', 'PersonalInfoController@overtimeInfo')->name('overtime-info');

Route::get('/department-info', 'DepartmentController@index')->name('department-info');
Route::get('/department-add', 'DepartmentController@create')->name('department-add');
Route::post('department-save', 'DepartmentController@save')->name('department-save');

Route::get('designation-info', 'DesignationController@index')->name('designation-info');
Route::get('designation-add', 'DesignationController@create')->name('designation-add');
Route::post('designation-save', 'DesignationController@save')->name('designation-save');
Route::get('designation', 'DesignationController@getDesignation')->name('designations');

Route::get('/permission-form', 'PermissionController@permissionForm')->name('permission-form');
