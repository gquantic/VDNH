<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'phone' => $this->phone,
            'username' => $this->login,
            'email' => $this->email,
            'inn' => $this->exponentProfile->inn ?? '',
            'ogrn' => $this->exponentProfile->ogrn ?? '',
        ];
    }
}
