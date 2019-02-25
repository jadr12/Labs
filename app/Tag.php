<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function category(){
        return $this->belongsTo('App\Article','articles_tags','tag_id');
    }
}
