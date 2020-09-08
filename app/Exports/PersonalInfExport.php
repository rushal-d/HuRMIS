<?php

namespace App\Exports;

use App\PersonalInformation;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromCollection;

class PersonalInfExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PersonalInformation::all();
    }
}
