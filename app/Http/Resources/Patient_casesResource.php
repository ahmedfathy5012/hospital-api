<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class Patient_casesResource extends JsonResource
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
            'entry_date'=>$this->entry_date,
            'exit_date'=>$this->exit_date,
            'patient_diagnoses'=>PatientDiagnosesResource::collection($this->diagnose)
        ];
    }
}
