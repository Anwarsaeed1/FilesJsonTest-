<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DataYResource extends JsonResource
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
            "id"=> isset($this['id']) ? $this['id']:null,
            "amount"=>isset($this['amount']) ? $this['amount']:null,
            "mobile"=>isset($this['mobile']) ? $this['mobile']:null,
            "currency"=>isset($this['currency']) ? $this['currency']:null,
            "created_at"=> isset($this['created_at']) ? $this['created_at']:null,
            "status"=>isset($this['status']) ? $this['status']:null,
        ];
    }
}
