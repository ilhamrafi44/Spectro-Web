<?php
namespace App\Exports;

use App\Models\User;
use App\Models\CandidateProfile;
use Illuminate\Support\Facades\Schema;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CandidateExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return CandidateProfile::with('user')->get();
    }

    public function headings(): array
    {
        $userColumns = Schema::getColumnListing('users');
        $profileColumns = Schema::getColumnListing('candidate_profiles');

        // Menambahkan prefix 'user_' untuk kolom-kolom dari tabel 'users'
        $userColumns = array_map(function ($column) {
            return 'user_' . $column;
        }, $userColumns);

        $headings = array_merge($profileColumns, $userColumns);

        return $headings;
    }
}
