<?php

namespace App\Http\Resources;

use App\Diagnose;
use App\Doctor;
use App\Employee;
use App\Nurse;
use App\Operation;
use App\Patient;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CountResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'doctor_count'=> Doctor::all()->count(),
            'employee_count'=> Employee::all()->count(),
            'patient_count'=> Patient::all()->count(),
            'nurse_count'=> Nurse::all()->count(),
            'diagnose_count' => Diagnose::all()->count(),
            'surgery_count' => Operation::all()->count()
        ];
    }
}
