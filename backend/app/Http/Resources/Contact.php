<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Contact extends JsonResource
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
            'salutation' => $this->salutation,
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'dob' => $this->dob,
            'address' => $this->address,
            'city' => $this->city,
            'postcode' => $this->postcode,
            'telephone' => $this->telephone,
            'email' => $this->email,
        ];
    }
}
