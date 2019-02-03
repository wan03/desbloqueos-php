<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'type' => $this->type,
            'country' => $this->country,
            'network' => $this->network,
            'tool' => $this->tool,
            'credits' => $this->credits,
            'price' => $this->price,
            'IMEI' => $this->IMEI,
            'model' => $this->model,
        ];
    }
}
