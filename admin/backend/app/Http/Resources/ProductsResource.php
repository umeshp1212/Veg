<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            // 'href' => [
            //     'category' => route('categories.show', $this->category_id),
            //     'product' => route('products.show', $this->id)
            // ],
            'name' => $this->name,
            'price' => $this->price,
            'unit' => $this->unit,
        ];
    }
}
