<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class NursesResource extends JsonResource
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
        'nurse_id' => $this->id,
        'nurse_image'=>$this->image,
        'nurse_full_name'=>$this->full_name(),
        'nurse_show_name'=>$this->show_name(),
        'nurse_job'=>new JobResource($this->job)
    ];;
    }
}
