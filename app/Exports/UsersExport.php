<?php

namespace App\Exports;

use App\Models\Form_Model;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Form_Model::all();
    }
}
