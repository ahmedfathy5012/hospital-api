<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PatientDiagnoseResource extends JsonResource
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
            'patient_full_name'=>$this->full_name(),
            'patient_show_name'=>$this->show_name(),
            'doctor_image'=>$this->image,
        ];
    }
}
