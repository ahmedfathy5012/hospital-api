<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class DoctorDiagnoseResource extends JsonResource
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
            'doctor_full_name'=>$this->full_name(),
            'doctor_show_name'=>$this->show_name(),
            'doctor_image'=>$this->image,
        ];
    }
}
