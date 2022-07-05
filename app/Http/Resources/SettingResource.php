<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
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
            'title' => $this->site_baslik,
            'link'=>$this->site_link,
            'keyword'=>$this->keywords,
            'description'=>$this->description,
            'footer'=>$this->footer_text,
            'proposal'=>$this->mekan_onerme_text,
            'logo'=>$this->logo,
            'recaptcha'=>$this->api_recaptcha,
            'analytics'=>$this->api_analytics,
            'facebook'=>$this->sosyal_facebook,
            'twitter'=>$this->sosyal_twitter,
            'instagram'=>$this->sosyal_instagram,
            'youtube'=>$this->sosyal_youtube,
            'traffic_statu'=>$this->trafik_durumu
        ];
    }
}
