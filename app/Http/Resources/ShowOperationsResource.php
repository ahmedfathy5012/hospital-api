<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ShowOperationsResource extends JsonResource
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
            'patient_name'=>$this->patient->show_name(),
            'doctor_name'=>$this->surgeon->show_name(),
            'patient_image'=>$this->patient->image,
            'patient_full_name'=>$this->patient->full_name(),
            
        ];
    }
}
