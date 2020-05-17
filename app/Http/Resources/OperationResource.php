<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class OperationResource extends JsonResource
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
            'name'=>$this->name,
            'date'=>$this->date,
            'patient_id'=>$this->patient_id,
            'anesthesiologist_id'=>$this->anesthesiologist_id,
            'anesthetic_id'=>$this->anesthetic_id,
            'surgeon_id'=>$this->surgeon_id,
//            'patient_name'=> ' ',
//            'surgeon_name'=>' ',
//            'anesthesiologist_name'=>' ',
            'patient_name'=>$this->patient !=null ? $this->patient->show_name() : ' ',
            'surgeon_name'=>$this->surgeon !=null ? $this->surgeon->show_name() : ' ',
            'anesthesiologist_name'=>$this->anesthesiologist != null ? $this->anesthesiologist->show_name() : ' ',
            'anesthetic'=>$this->anesthetic->name
        ];
    }
}
