<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PersonalInformation;

class District extends Model
{
    public function personal(){
        return $this->hasMany(PersonalInformation::class, 'district_id');
    }
}
