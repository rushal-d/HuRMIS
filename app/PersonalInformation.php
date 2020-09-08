<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\District;
use App\Qualification;
use App\Training;
use App\Transfer;
use App\Promotion;
use App\Leave;
use App\Status;
use App\AdditionalInformation;

class PersonalInformation extends Model
{
    public function temp_district(){
        return $this->belongsTo(District::class, 'temporary_district', 'district_id');
    }

    public function perm_district(){
        return $this->belongsTo(District::class, 'permanent_district', 'district_id');
    }

    public function temp_local(){
        return $this->belongsTo(District::class, 'temporary_local_auth', 'id');
    }

    public function perm_local(){
        return $this->belongsTo(District::class, 'permanent_local_auth', 'id');
    }

    public function perm_pradesh(){
        return $this->belongsTo(District::class, 'permanent_pradesh', 'id');
    }

    public function temp_pradesh(){
        return $this->belongsTo(District::class, 'temporary_pradesh', 'id');
    }

    public function qualification(){
        return $this->hasMany(Qualification::class, 'personal_id');
    }

    public function training(){
        return $this->hasMany(Training::class, 'personal_id');
    }
        

    public function transfer(){
        return $this->hasMany(Transfer::class, 'personal_id');
    }

    public function promotion(){
        return $this->hasMany(Promotion::class, 'personal_id', 'id');
    }

    public function leave(){
        return $this->hasMany(Leave::class, 'personal_id');
    }

    public function status(){
        return $this->hasMany(Status::class, 'personal_id');
    }

    public function additionalinformation(){
        return $this->hasMany(AdditionalInformation::class, 'personal_id');
    }
}
