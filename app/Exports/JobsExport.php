<?php

namespace App\Exports;

use App\Models\Jobs;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class JobsExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Jobs::all();
    }
    public function headings(): array
    {
        return array_keys(Jobs::first()->getAttributes());
    }
}
