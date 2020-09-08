<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Transfer;
use Promotion;

class Post extends Model
{
    public function transfer(){
        return $this->hasMany(Transfer::class, 'id');
    }

    public function promotion(){
        return $this->hasMany(Promotion::class, 'id');
    }
}
