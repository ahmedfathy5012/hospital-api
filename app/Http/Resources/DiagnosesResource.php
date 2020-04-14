<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class DiagnosesResource extends JsonResource
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
            'id'=>$this->id,
            'name'=>$this->patient_case->patient->show_name(),
            'content'=>$this->diagnose



//         'diagnose_id'=>$this->id,
//         'diagnose'=>$this->diagnose,
//         'drugs'=>$this->drugs,
//         'doctor_id'=>$this->doctor_id,
//         'doctor'=>new DoctorDiagnoseResource($this->doctor),
//         'patient_case_id'=>$this->patient_case_id,
//         'patient_case'=>new Patient_caseResource($this->patient_case),
        ];
    }
}
