<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class Patient_caseResource extends JsonResource
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
            'patient_case_id'=>$this->id,
            'patient_id'=>$this->patient_id,
            'patient'=>new PatientDiagnoseResource($this->patient),
            'entry_date'=>$this->entry_date,
            'exit_date'=>$this->exit_date,
        ];
    }
}
