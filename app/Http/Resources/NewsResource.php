<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'category_id' => $this->kategori_id,
            'title' => $this->icerik,
            'date' => date("d.m.Y H:i:s", $this->tarih),
            'keywords' => $this->keywords,
            'description' => $this->description,
            'image' => $this->resim,
            'video' => $this->video,
            'labels' => $this->etiket,
            'view' => $this->hit,
            'featured' => $this->one_cikart == 'evet' ? true : false,
            'status' => $this->durum == 'aktif' ? true : false,
        ];
    }
}
