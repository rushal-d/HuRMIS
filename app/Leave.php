<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PersonalInformation;

class Leave extends Model
{
    public function personalinformation(){
        return $this->belongsTo(PersonalInformation::class, 'personal_id', 'id');
    }
}
