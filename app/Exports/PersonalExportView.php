<?php

namespace App\Exports;

use App\PersonalInformation;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PersonalExportView implements FromView
{
    protected $personalinfos;

    public function __construct($personalinfos){
        $this->personalinfos = $personalinfos;
    }

    /**
    * @return \Illuminate\Support\FromView
    */
    public function view():View
    {
        return view('personalinformation.table', [
            'personalinfos' => $this->personalinfos
        ]);
    }
}
