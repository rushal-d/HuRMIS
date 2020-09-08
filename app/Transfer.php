<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PersonalInformation;
use App\Post;

class Transfer extends Model
{
    public function personalinformation(){
        return $this->belongsTo(PersonalInformation::class, 'personal_id', 'id');
    }
    
    public function post(){
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }
}
