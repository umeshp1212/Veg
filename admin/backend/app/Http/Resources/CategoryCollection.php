<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CategoryCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);

    //    return [
          
    //        'Name' => $this->name,          
    //        'links' => [
    //            'href' => route('categories.show', $this->id)
    //        ]
    //     ];
    }
}
