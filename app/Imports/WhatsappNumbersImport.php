<?php

namespace App\Imports;

use App\Models\WhatsappNumber;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use DB;

class WhatsappNumbersImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new WhatsappNumber([
            'name'     => isset( $row['name'] ) ? $row['name'] : '',
            'numbers'    => $row['numbers'],
        ]);
    }
}
