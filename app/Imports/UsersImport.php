<?php

namespace App\Imports;

use App\Models\Form_Model;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Form_Model([
        // 'id' => $row[0],
        'name' => $row[0],
        'city' => $row[1], 
        'phone' => $row[2],
        ]);
    }
}
