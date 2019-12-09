<?php
Route::group(['middleware'=>'auth'], function(){
    Route::get('/anasayfa', 'AnasayfaController@index')->name('anasayfa');

    // Route::get('/salary-info-add', 'PersonalInfoController@salaryAdd')->name('salary-info-add');
    // Route::get('/salary-info', 'PersonalInfoController@salaryInfo')->name('salary-info');
    // Route::get('/overtime-info', 'PersonalInfoController@overtimeInfo')->name('overtime-info');
    
    Route::get('/department-info', 'DepartmentController@index')->name('department-info');
    Route::get('/department-add', 'DepartmentController@create')->name('department-add');
    Route::post('department-save', 'DepartmentController@save')->name('department-save');
    Route::post('department-update{id?}', 'DepartmentController@update')->name('department-update');
    Route::get('department-edit{id}', 'DepartmentController@edit')->name('department-edit');
    Route::get('department-remove{id}', 'DepartmentController@remove')->name('department-remove');
    
    Route::get('designation-info', 'DesignationController@index')->name('designation-info');
    Route::get('designation-add', 'DesignationController@create')->name('designation-add');
    Route::post('designation-save', 'DesignationController@save')->name('designation-save');
    Route::get('designation', 'DesignationController@getDesignation')->name('designations');
    Route::get('designation-edit/{id}', 'DesignationController@edit')->name('designation-edit');
    Route::get('designation-remove/{id}', 'DesignationController@remove')->name('designation-remove');
    Route::post('designation-update/{id}', 'DesignationController@update')->name('designation-update');
    
    Route::get('personal-info', 'EmployeeController@index')->name('personal-info');
    Route::get('employee-add', 'EmployeeController@create')->name('personal-info-add');
    Route::post('employee-save', 'EmployeeController@save')->name('personal-save');
    Route::get('employee-filter/{id}', 'EmployeeController@filter')->name('employee-filter');
    Route::get('employee-edit/{id}', 'EmployeeController@edit')->name('personal-info-edit');
    Route::get('employee-remove/{id}', 'EmployeeController@remove')->name('employee-remove');
    Route::get('employee-detail/{id}', 'EmployeeController@detail')->name('employee-detail');
    Route::post('employee-update/{id}', 'EmployeeController@update')->name('employee-update');
    
    Route::get('overtime-info', 'EmployeeWorkingShiftController@index')->name('overtime-info');
    Route::get('overtime-info-add', 'EmployeeWorkingShiftController@create')->name('overtime-info-add');
    Route::post('overtime-save', 'EmployeeWorkingShiftController@save')->name('overtime-save');
    Route::get('department-overtime-info', 'EmployeeWorkingShiftController@departmentWorkingShift')->name('department-overtime-info');
    Route::get('overtime-edit/{id}', 'EmployeeWorkingShiftController@edit')->name('overtime-edit');
    Route::get('overtime-remove/{id}', 'EmployeeWorkingShiftController@remove')->name('overtime-remove');
    Route::post('overtime-update/{id}', 'EmployeeWorkingShiftController@update')->name('overtime-update');
    
    Route::get('permission-info', 'EmployeeAttendanceController@index')->name('permission-list');
    Route::get('permission-add', 'EmployeeAttendanceController@create')->name('permission-form');
    Route::post('permission-save', 'EmployeeAttendanceController@save')->name('permission-save');
    Route::get('permission-edit/{id}', 'EmployeeAttendanceController@edit')->name('permission-edit');
    Route::post('permission-update/{id}', 'EmployeeAttendanceController@update')->name('permission-update');
    Route::get('permission-remove/{id}', 'EmployeeAttendanceController@remove')->name('permission-remove');
    Route::get('month-permission-info', 'EmployeeAttendanceController@monthPermission')->name('month-permission-list');
    Route::post('month-info', 'EmployeeAttendanceController@monthPermissionFilter')->name('month-permission-filter');
    
    Route::get('payment-info', 'EmployeePayScaleController@create')->name('salary-info');
    Route::get('payment-info-add', 'EmployeePayScaleController@save')->name('salary-info-add');
    Route::post('payment-filter', 'EmployeePayScaleController@filter')->name('filter');
    
    Route::get('announcement', 'AnnouncementController@index')->name('announcement');
    Route::get('announcement-add', 'AnnouncementController@create')->name('announcement-add');
    Route::post('announcement-save', 'AnnouncementController@save')->name('announcement-save');
    
   
    
});
Auth::routes();
    
Route::get('/home', 'HomeController@index')->name('home');