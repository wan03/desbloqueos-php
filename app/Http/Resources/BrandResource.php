<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BrandResource extends JsonResource
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
            'brandID' => $this->brandID,
            'brandName' => $this->brandName,
            'mobiles'=> MobileResource::collection($this->mobiles)
        ];
    }
}
