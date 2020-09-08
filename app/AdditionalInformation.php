<?php

namespace App;
use PersonalInformation;

use Illuminate\Database\Eloquent\Model;

class AdditionalInformation extends Model
{
    public function personalinformation(){
        return $this->belongsTo(PersonalInformation::class, 'personal_id', 'id');
    }   
}
