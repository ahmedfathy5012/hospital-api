<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class EmployeesResource extends JsonResource
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
            'employee_id' => $this->id,
            'employee_image'=>$this->image,
            'employee_full_name'=>$this->full_name(),
            'employee_show_name'=>$this->show_name(),
            'employee_job'=>new JobResource($this->job),
            'gender'=>$this->sex->name,
        ];
    }
}
