<?php

namespace App\Http\Resources;

use App\Doctor;
use App\Patient;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PatientSurgeryResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {   $doctor = Patient::find($this->surgeon_id);

        return [
            'id'=>$this->id,
            'name'=> $doctor->show_name(),
            'content'=>$this->name
        ];
    }
}
