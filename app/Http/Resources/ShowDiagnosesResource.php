<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ShowDiagnosesResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id'=>$this->id,
            'patient_name'=>$this->patient_case->patient->show_name(),
            'patient_image'=>$this->patient_case->patient->image,
            'patient_full_name'=>$this->patient_case->patient->full_name(),
            'doctor_name'=>$this->doctor != null ? $this->doctor->show_name() : ' ',
        ];
    }
}
