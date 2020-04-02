<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MobileHome extends JsonResource
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
          'title' => $this->title,
          'main_image' => $this->getFirstMediaUrl('thumb'),
          'show_on_home' => $this->show_on_home,
          'home_type' => $this->type->name,
          'features' => $this->features,
          'created_at' => $this->created_at,
          'updated_at' => $this->updated_at,
      ];
    }
}
