@extends('mail_template.layout')

@section('email')
Halo {{ $EmployerName }}, <br><br>

Kami ingin memberitahu Anda bahwa ada lamaran kerja baru yang masuk untuk posisi {{ $JobName }}. Berikut detail lamaran tersebut:

- Nama Kandidat: {{ $UserName }}
- Email Kandidat: {{ $UserEmail }}

Mohon segera tinjau lamaran ini dan pertimbangkan kualifikasi serta pengalaman kandidat. Anda dapat menghubungi kandidat melalui alamat email yang tercantum di atas untuk mengatur wawancara atau tindak lanjut lebih lanjut. <br><br>

Terima kasih telah menggunakan Spectro.id untuk mencari calon yang berkualitas. Semoga Anda menemukan kandidat yang sesuai dengan kebutuhan perusahaan Anda.<br><br>

Salam,<br>
Tim Spectro<br>
@endsection
