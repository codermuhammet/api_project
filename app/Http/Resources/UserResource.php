<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

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
            'id' => $this->id,
            'name_and_surname' => $this->ad_soyad,
            'phone' => $this->telefon,
            'email' => $this->eposta,
            'city' => $this->city,
            'district' => $this->district,
            'date' =>date('d.m.Y H:i:s',$this->tarih)
        ];
    }
}
