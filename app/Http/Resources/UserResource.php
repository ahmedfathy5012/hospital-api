<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserResource extends JsonResource
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
            'user_id'=>$this->id,
            'user_identification_number'=>$this->Identification_number,
            'user_api_token'=>$this->api_token,
            'user_role'=>$this->role->title,
            'user_role_id'=>$this->role_id,
            'user_image'=>$this->employee !=null ? ($this->employee->image !=null ? $this->employee->image:null) : ($this->doctor !=null ? ($this->doctor->image != null ? $this->doctor->image : null): ($this->nurse !=null ? ($this->nurse->image != null ? $this->nurse->image : null): ($this->patient !=null ? ($this->patient->image !=null ? $this->patient->image : null): null))),
            'user_name'=>$this->employee !=null ? $this->employee->show_name() : ($this->doctor !=null ? $this->doctor->show_name(): ($this->nurse !=null ? $this->nurse->show_name(): ($this->patient !=null ? $this->patient->show_name(): null))),
            'user_name'=>$this->employee !=null ? $this->employee->show_name() : ($this->doctor !=null ? $this->doctor->show_name(): ($this->nurse !=null ? $this->nurse->show_name(): ($this->patient !=null ? $this->patient->show_name(): null))),
            'user_job'=>$this->employee !=null ? $this->employee->job->name : ($this->doctor !=null ? $this->doctor->job->name: ($this->nurse !=null ? $this->nurse->job->name: ($this->patient !=null ? $this->patient->job: null))),


        ];
    }
}
