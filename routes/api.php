<?php

use App\Doctor;
use App\Http\Controllers\api\DoctorController;
use App\Http\Resources\DoctorsResource;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('doctors', 'Api\DoctorController@index');
Route::get('patients', 'Api\PatientController@index');
Route::get('employees', 'Api\EmployeeController@index');
Route::get('nurses', 'Api\NurseController@index');
Route::get('operations', 'Api\OperationController@index');
Route::get('ambulances', 'Api\AmbulanceController@index');
Route::get('analyzes', 'Api\AnalyzeController@index');
Route::get('anesthetics', 'Api\AnestheticController@index');
Route::get('blood', 'Api\BloodController@index');
Route::get('booking_dates', 'Api\Booking_dateController@index');
Route::get('clinics', 'Api\ClinicController@index');
Route::get('days', 'Api\DayController@index');
Route::get('deads', 'Api\DeadController@index');
Route::get('diagnoses', 'Api\DiagnoseController@index');
Route::get('doctor_problems', 'Api\Doctor_problemController@index');
Route::get('drugs', 'Api\DrugController@index');
Route::get('emergency', 'Api\EmergencyController@index');
Route::get('nationalities', 'Api\NationalityController@index');
Route::get('outpatient_clinics', 'Api\Outpatient_clinicController@index');
Route::get('patient_cases', 'Api\Patient_CaseController@index');
Route::get('patient_problems', 'Api\Patient_problemController@index');
Route::get('rooms', 'Api\RoomController@index');
Route::get('sections', 'Api\SectionController@index');
Route::get('sex', 'Api\SexController@index');
Route::get('specializations', 'Api\SpecializationController@index');
Route::get('tests', 'Api\TestController@index');
Route::get('users', 'Api\UserController@index');
Route::get('work_periods', 'Api\Work_periodController@index');
Route::get('hospitals', 'Api\HospitalController@index');
Route::get('jobs', 'Api\JobController@index');




Route::get('doctor/{id}', 'Api\DoctorController@show');
Route::get('patient/{id}', 'Api\PatientController@show');
Route::get('employee/{id}', 'Api\EmployeeController@show');
Route::get('nurse/{id}', 'Api\NurseController@show');
Route::get('operation/{id}', 'Api\OperationController@show');
Route::get('ambulance/{id}', 'Api\AmbulanceController@show');
Route::get('analyze/{id}', 'Api\AnalyzeController@show');
Route::get('anesthetic/{id}', 'Api\AnestheticController@show');
Route::get('blood/{id}', 'Api\BloodController@show');
Route::get('booking_date/{id}', 'Api\Booking_dateController@show');
Route::get('clinic/{id}', 'Api\ClinicController@show');
Route::get('day/{id}', 'Api\DayController@show');
Route::get('dead/{id}', 'Api\DeadController@show');
Route::get('diagnose/{id}', 'Api\DiagnoseController@show');
Route::get('doctor_problem/{id}', 'Api\Doctor_problemController@show');
Route::get('drug/{id}', 'Api\DrugController@show');
Route::get('emergency/{id}', 'Api\EmergencyController@show');
Route::get('nationality/{id}', 'Api\NationalityController@show');
Route::get('outpatient_clinic/{id}', 'Api\Outpatient_clinicController@show');
Route::get('patient_case/{id}', 'Api\Patient_CaseController@show');
Route::get('patient_problem/{id}', 'Api\Patient_problemController@show');
Route::get('room/{id}', 'Api\RoomController@show');
Route::get('section/{id}', 'Api\SectionController@show');
Route::get('sex/{id}', 'Api\SexController@show');
Route::get('specialization/{id}', 'Api\SpecializationController@show');
Route::get('test/{id}', 'Api\TestController@show');
Route::get('user/{id}', 'Api\UserController@show');
Route::get('work_period/{id}', 'Api\Work_periodController@show');
Route::get('hospital/{id}', 'Api\HospitalController@show');
Route::get('job/{id}', 'Api\JobController@show');


Route::delete('delete-doctor/{id}', 'Api\DoctorController@delete');
Route::delete('delete-patient/{id}', 'Api\PatientController@delete');
Route::delete('delete-employee/{id}', 'Api\EmployeeController@delete');
Route::delete('delete-nurse/{id}', 'Api\NurseController@delete');
Route::delete('delete-delete-operation/{id}', 'Api\OperationController@delete');
Route::delete('delete-ambulance/{id}', 'Api\AmbulanceController@delete');
Route::delete('delete-analyze/{id}', 'Api\AnalyzeController@delete');
Route::delete('delete-anesthetic/{id}', 'Api\AnestheticController@delete');
Route::delete('delete-blood/{id}', 'Api\BloodController@delete');
Route::delete('delete-booking_date/{id}', 'Api\Booking_dateController@delete');
Route::delete('delete-clinic/{id}', 'Api\ClinicController@delete');
Route::delete('delete-day/{id}', 'Api\DayController@delete');
Route::delete('delete-dead/{id}', 'Api\DeadController@delete');
Route::delete('delete-diagnose/{id}', 'Api\DiagnoseController@delete');
Route::delete('delete-doctor_problem/{id}', 'Api\Doctor_problemController@delete');
Route::delete('delete-drug/{id}', 'Api\DrugController@delete');
Route::delete('delete-emergency/{id}', 'Api\EmergencyController@delete');
Route::delete('delete-nationality/{id}', 'Api\NationalityController@delete');
Route::delete('delete-outpatient_clinic/{id}', 'Api\Outpatient_clinicController@delete');
Route::delete('delete-patient_case/{id}', 'Api\Patient_CaseController@delete');
Route::delete('delete-patient_problem/{id}', 'Api\Patient_problemController@delete');
Route::delete('delete-room/{id}', 'Api\RoomController@delete');
Route::delete('delete-section/{id}', 'Api\SectionController@delete');
Route::delete('delete-sex/{id}', 'Api\SexController@delete');
Route::delete('delete-specialization/{id}', 'Api\SpecializationController@delete');
Route::delete('delete-test/{id}', 'Api\TestController@delete');
Route::delete('delete-user/{id}', 'Api\UserController@delete');
Route::delete('delete-work_period/{id}', 'Api\Work_periodController@delete');
Route::delete('delete-hospital/{id}', 'Api\HospitalController@delete');
Route::delete('delete-job/{id}', 'Api\JobController@delete');


Route::post('update-doctor/{id}', 'Api\DoctorController@update');
Route::post('update-patient/{id}', 'Api\PatientController@update');
Route::post('update-employee/{id}', 'Api\EmployeeController@update');
Route::post('update-nurse/{id}', 'Api\NurseController@update');
Route::post('update-delete-operation/{id}', 'Api\OperationController@update');
Route::post('update-ambulance/{id}', 'Api\AmbulanceController@update');
Route::post('update-analyze/{id}', 'Api\AnalyzeController@update');
Route::post('update-anesthetic/{id}', 'Api\AnestheticController@update');
Route::post('update-blood/{id}', 'Api\BloodController@update');
Route::post('update-booking_date/{id}', 'Api\Booking_dateController@update');
Route::post('update-clinic/{id}', 'Api\ClinicController@update');
Route::post('update-day/{id}', 'Api\DayController@update');
Route::post('update-dead/{id}', 'Api\DeadController@update');
Route::post('update-diagnose/{id}', 'Api\DiagnoseController@update');
Route::post('update-doctor_problem/{id}', 'Api\Doctor_problemController@update');
Route::post('update-drug/{id}', 'Api\DrugController@update');
Route::post('update-emergency/{id}', 'Api\EmergencyController@update');
Route::post('update-nationality/{id}', 'Api\NationalityController@update');
Route::post('update-outpatient_clinic/{id}', 'Api\Outpatient_clinicController@update');
Route::post('update-patient_case/{id}', 'Api\Patient_CaseController@update');
Route::post('update-patient_problem/{id}', 'Api\Patient_problemController@update');
Route::post('update-room/{id}', 'Api\RoomController@update');
Route::post('update-section/{id}', 'Api\SectionController@update');
Route::post('update-sex/{id}', 'Api\SexController@update');
Route::post('update-specialization/{id}', 'Api\SpecializationController@update');
Route::post('update-test/{id}', 'Api\TestController@update');
Route::post('update-user/{id}', 'Api\UserController@update');
Route::post('update-work_period/{id}', 'Api\Work_periodController@update');
Route::post('update-hospital/{id}', 'Api\HospitalController@update');
Route::post('update-job/{id}', 'Api\JobController@update');

Route::post('add-room', 'Api\RoomController@store');
Route::post('add-clinic', 'Api\ClinicController@store');


Route::post('add-doctor', 'Api\DoctorController@store');
Route::post('add-user', 'Api\UserController@register');
Route::get('data-count', 'Api\UserController@data_count');

Route::post('login', 'Api\UserController@login');



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
