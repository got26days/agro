<?php

namespace App\Imports;

use App\Mail;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    HeadingRowFormatter::default('none');

    public function model(array $row)
    {
        return new Mail([
            'title' => $row[1],
            'name' => $row[2],
            'email' => $row[3],
            'tel' => $row[4],
        ]);
    }
}
