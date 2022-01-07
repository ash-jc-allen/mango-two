<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShortURLResource extends JsonResource
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
            'id'                   => $this->id,
            'destination_url'      => $this->destination_url,
            'url'                  => $this->default_short_url,
            'redirect_status_code' => $this->redirect_status_code,
            'created_at'           => $this->created_at,
        ];
    }
}
