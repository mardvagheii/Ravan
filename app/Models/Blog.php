<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded = [];



    public function Image()
    {
        $BlogImageId = $this->hasOne(Image::class, 'item_id', 'id');
        return $BlogImageId->where('type', 'blogs');
    }
}
