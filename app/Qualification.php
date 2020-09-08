<?php

namespace App;
use App\PersonalInformation;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    public function personalinformation(){
        return $this->belongsTo(PersonalInformation::class, 'personal_id', 'id');
    }
}
