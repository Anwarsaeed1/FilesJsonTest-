<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DataXResource extends JsonResource
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
            "transaction_id"=> isset($this['transaction_id']) ? $this['transaction_id']:null,
            "transactionAmount"=>isset($this['transactionAmount']) ? $this['transactionAmount']:null,
            "mobile"=>isset($this['mobile']) ? $this['mobile']:null,
            "currency"=>isset($this['currency']) ? $this['currency']:null,
            "date"=>isset($this['date']) ? $this['date']:null,

            
        ];
    }
}