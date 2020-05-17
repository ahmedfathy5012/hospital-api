<?php

namespace App\Http\Resources;

use App\Patient_Case;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PatientResource extends JsonResource
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
            'patient_id' => $this->id,
            'patient_first_name'=> $this->first_name,
            'patient_second_name'=> $this->second_name,
            'patient_third_name'=> $this->third_name,
            'patient_address'=>$this->address,
            'patient_phone'=>$this->phone,
            'patient_email'=>$this->email,
            'patient_job'=>$this->job,
            'patient_social_status'=>$this->social_status,
            'patient_notes'=>$this->notes,
            'patient_image'=>$this->image,
            'patient_date_of_birth'=>$this->date_of_birth,
            'patient_date_of_file'=>$this->date_of_file,
            'patient_full_name'=>$this->full_name(),
            'gender_id'=>$this->sex_id,
            'blood_id'=>$this->blood_id,
            'user_id'=>$this->user_id,
            'nationality_id'=>$this->nationality_id,
            'patient_gender'=>new SexResource($this->sex),
            'patient_blood'=>new BloodResource($this->blood),
            'patient_user'=>new UserResource($this->user),
            'patient_nationality'=> new NationalityResource($this->nationality),
            //'patient_diagnoses'=>PatientDiagnosesResource::collection($this->patient_cases->diagnose),
            'patient_case'=>Patient_casesResource::collection($this->patient_cases),
            'patient_surgery'=>PatientSurgeryResource::collection($this->operations),
    ];

    }
}
