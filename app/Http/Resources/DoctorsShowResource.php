<?php

namespace App\Http\Resources;

use App\Doctor;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class DoctorsShowResource extends JsonResource
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
            'doctor_full_name'=>$this->full_name(),
            'doctor_job'=>new JobResource($this->job),
            'doctor_gender'=>new SexResource($this->sex),
            'doctor_blood'=>new BloodResource($this->blood),
            'doctor_user'=>new UserResource($this->user),
            'doctor_specialization'=> new SpecializationResource($this->specialization),
            'doctor_nationality'=> new NationalityResource($this->nationality),

        ];
    }
}
