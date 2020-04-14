<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class DoctorsResource extends JsonResource
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
            'doctor_image'=>$this->image,
            'doctor_full_name'=>$this->full_name(),
            'doctor_show_name'=>$this->show_name(),
            'doctor_specialization'=> new SpecializationResource($this->specialization),

        ];
    }
}
