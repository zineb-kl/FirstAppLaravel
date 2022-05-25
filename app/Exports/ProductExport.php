<?php

namespace App\Exports;

use App\Models\Pruduct;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pruduct::all();
    }
}
