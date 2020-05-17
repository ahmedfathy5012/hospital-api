<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class EmployeeResource extends JsonResource
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
            'employee_id' => $this->id,
            'employee_first_name'=> $this->first_name,
            'employee_second_name'=> $this->second_name,
            'employee_third_name'=> $this->third_name,
            'employee_address'=>$this->address,
            'employee_phone'=>$this->phone,
            'employee_email'=>$this->email,
            'employee_social_status'=>$this->social_status,
            'employee_notes'=>$this->notes,
            'employee_image'=>$this->image,
            'employee_date_of_birth'=>$this->date_of_birth,
            'employee_date_of_hiring'=>$this->date_of_hiring,
            'employee_full_name'=>$this->full_name(),
            'job_id'=>$this->job_id,
            'gender_id'=>$this->sex_id,
            'blood_id'=>$this->blood_id,
            'user_id'=>$this->user_id,
            'nationality_id'=>$this->nationality_id,
            'employee_job'=>new JobResource($this->job),
            'employee_gender'=>new SexResource($this->sex),
            'employee_blood'=>new BloodResource($this->blood),
            'employee_user'=>new UserResource($this->user),
            'employee_nationality'=> new NationalityResource($this->nationality),
        ];
    }
}
