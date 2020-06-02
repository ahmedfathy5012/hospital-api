<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PatientsResource extends JsonResource
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
            'patient_id' => $this->id,
            'patient_image'=>$this->image,
            'patient_full_name'=>$this->full_name(),
            'patient_show_name'=>$this->show_name(),
            'patient_date_of_file'=>$this->date_of_file,
            'gender'=>$this->sex->name,
        ];
    }
}
