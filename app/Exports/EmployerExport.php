<?php

namespace App\Exports;

use App\Models\User;
use App\Models\EmployerProfile;
use Illuminate\Support\Facades\Schema;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class EmployerExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return EmployerProfile::with('user')->get();
    }

    public function headings(): array
    {
        $userColumns = Schema::getColumnListing('users');
        $profileColumns = Schema::getColumnListing('employer_profiles');

        // Menambahkan prefix 'user_' untuk kolom-kolom dari tabel 'users'
        $userColumns = array_map(function ($column) {
            return 'user_' . $column;
        }, $userColumns);

        $headings = array_merge($profileColumns, $userColumns);

        return $headings;
    }
}
