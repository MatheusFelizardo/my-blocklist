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
        if(isset($this['resource'])) {
            return [
                'id' => $this->id,
                'name' => $this->name,
                'email' => $this->email,
                'create_at' => $this->create_at,
                'updated_at' => $this->updated_at
            ];
        }
        return parent::toArray($request);
    }
}
