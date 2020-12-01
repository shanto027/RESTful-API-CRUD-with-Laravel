<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Get all Employees
Route::get('employees', 'EmployeeController@getEmployee');

//Get Specific empolee details
Route::get('employee/{id}', 'EmployeeController@getEmployeeId');

//Add Employee
Route::post('addEmployee', 'EmployeeController@addEmployee');

//Update Employee
Route::put('updateEmployee/{id}', 'EmployeeController@updateEmployee');

//Delete Employee
Route::delete('deleteEmployee/{id}', 'EmployeeController@deleteEmployee');
