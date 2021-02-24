<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class OwnerResource extends JsonResource
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
            "id" => $this->id,
            "fullname" => $this->fullName(),
            "formatted_phone_number"  => $this->formattedPhoneNumber(),
            "full_address" => $this->fullAddress()
       ];
    }
}
