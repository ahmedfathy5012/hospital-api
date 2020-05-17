<?php

namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class DoctorResource extends JsonResource
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
            'doctor_id' => $this->id,
            'doctor_first_name'=> $this->first_name,
            'doctor_second_name'=> $this->second_name,
            'doctor_third_name'=> $this->third_name,
            'doctor_address'=>$this->address,
            'doctor_phone'=>$this->phone,
            'doctor_email'=>$this->email,
            'doctor_social_status'=>$this->social_status,
            'doctor_notes'=>$this->notes,
            'doctor_image'=>$this->image,
            'doctor_date_of_birth'=>$this->date_of_birth,
            'doctor_date_of_hiring'=>$this->date_of_hiring,
            'doctor_full_name'=>$this->full_name(),
            'job_id'=>$this->job_id,
            'gender_id'=>$this->sex_id,
            'blood_id'=>$this->blood_id,
            'user_id'=>$this->user_id,
            'nationality_id'=>$this->nationality_id,
            'specialization_id'=>$this->specialization_id,
            'doctor_job'=>new JobResource($this->job),
            'doctor_gender'=>new SexResource($this->sex),
            'doctor_blood'=>new BloodResource($this->blood),
            'doctor_user'=>new UserResource($this->user),
            'doctor_specialization'=> new SpecializationResource($this->specialization),
            'doctor_nationality'=> new NationalityResource($this->nationality),
            'doctor_diagnoses'=>DiagnosesResource::collection($this->diagnoses),
            //'doctor_surgery'=>DoctorSurgeryResource::collection($this->operations_surgeon != null ? $this->operations_surgeon: $this->operations_anesthesiologist),
            //'doctor_surgery'=>DoctorSurgeryResource::collection($this->operations_surgeon != null ? $this->operations_surgeon: $this->operations_anesthesiologist),

        ];
    }
}
