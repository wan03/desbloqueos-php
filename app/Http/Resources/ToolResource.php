<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ToolResource extends JsonResource
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
            'toolID' => $this->toolID,
            'toolName' => $this->toolName,
            'toolCredits' => $this->toolCredits,
            'toolSMS' => $this->toolSMS,
            'toolMessage' => $this->toolMessage,
            'toolDeliveryMin' => $this->toolDeliveryMin,
            'toolDeliveryMax' => $this->toolDeliveryMax,
            'toolDeliveryUnit' => $this->toolDeliveryUnit,
            'toolRequiresNetwork' => $this->toolRequiresNetwork,
            'toolRequiresMobile' => $this->toolRequiresMobile,
            'toolRequiresProvider' => $this->toolRequiresProvider,
            'toolRequiresPin' => $this->toolRequiresPin,
            'toolRequiresType' => $this->toolRequiresType,
            'toolRequiresKBH' => $this->toolRequiresKBH,
            'toolRequiresMEP' => $this->toolRequiresMEP,
            'toolRequiresPRD' => $this->toolRequiresPRD,
            'toolRequiresLocks' => $this->toolRequiresLocks,
            'toolRequiresSN' => $this->toolRequiresSN,
            'toolRequiresSecRO' => $this->toolRequiresSecRO,
            'toolRequiresServiceTag' => $this->toolRequiresServiceTag,
            'toolRequiresICloudEmail' => $this->toolRequiresICloudEmail,
            'toolRequiresICloudPhone' => $this->toolRequiresICloudPhone,
            'toolRequiresICloudUDID' => $this->toolRequiresICloudUDID,
        ];
    }
}
