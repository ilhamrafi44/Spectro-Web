<?php

namespace App\Exports;

use App\Models\User;
use App\Models\EmployerProfile;
use Illuminate\Support\Facades\Schema;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class EmployerExport implements FromCollection, WithHeadings
{
    protected $employer;

    public function __construct($employer)
    {
        $this->employer = $employer;
    }

    public function collection()
    {
        return $this->employer;
    }
    public function headings(): array
    {
        $userColumns = Schema::getColumnListing('users');
        $profileColumns = Schema::getColumnListing('employer_profiles');

        // Menambahkan prefix 'user_' untuk kolom-kolom dari tabel 'users'
        $userColumns = array_map(function ($column) {
            return 'user_' . $column;
        }, $userColumns);

        $headings = array_merge($userColumns, $profileColumns);

        return $headings;
    }
}
