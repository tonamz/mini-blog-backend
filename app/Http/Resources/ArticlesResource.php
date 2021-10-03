<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Users;

class ArticlesResource extends JsonResource
{

    public function findCategory($data){
        switch ($data) {
            case 1:
                return "Physics";
            case 2:
                return "Technlogy";
            case 3:
                return "Chemistry";
            default:
          }
    }
    
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
            'name' => $this->name,
            'status' => $this->status,
            'content' => $this->created_at,
            'category_id' => $this->category,
            'category' => $this->findCategory($this->category),
            'author' => Users::where('id', $this->author)->first(),
            'created_at' => $this->created_at,

        ];
    }
}