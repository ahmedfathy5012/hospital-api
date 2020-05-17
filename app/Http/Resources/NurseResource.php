<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class NurseResource extends JsonResource
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
            'nurse_id' => $this->id,
            'nurse_first_name'=> $this->first_name,
            'nurse_second_name'=> $this->second_name,
            'nurse_third_name'=> $this->third_name,
            'nurse_address'=>$this->address,
            'nurse_phone'=>$this->phone,
            'nurse_email'=>$this->email,
            'nurse_social_status'=>$this->social_status,
            'nurse_notes'=>$this->notes,
            'nurse_image'=>$this->image,
            'nurse_date_of_birth'=>$this->date_of_birth,
            'nurse_date_of_hiring'=>$this->date_of_hiring,
            'nurse_full_name'=>$this->full_name(),
            'job_id'=>$this->job_id,
            'gender_id'=>$this->sex_id,
            'blood_id'=>$this->blood_id,
            'user_id'=>$this->user_id,
            'nationality_id'=>$this->nationality_id,
            'nurse_job'=>new JobResource($this->job),
            'nurse_gender'=>new SexResource($this->sex),
            'nurse_blood'=>new BloodResource($this->blood),
            'nurse_user'=>new UserResource($this->user),
            'nurse_nationality'=> new NationalityResource($this->nationality),
        ];
    }
}
