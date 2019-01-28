<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MobileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'mobileID' => $this->mobileID,
            'mobileName' => $this->mobileName,
            'mobilePhoto' => $this->mobilePhoto
        ];
    }
}
