@extends('mail_template.layout')

@section('email')
Halo {{ $UserName }}, <br><br>

Terima kasih atas minat Anda dalam menggunakan Spectro! Kami telah menerima lamaran kerja Anda untuk posisi berikut:<br><br>

- Nama Pekerjaan: {{ $JobName }}<br>
- Nama Perusahaan: {{ $EmployerName }}<br>

Kami akan meninjau lamaran Anda dengan seksama dan menghubungi Anda segera jika ada pertanyaan tambahan atau jika Anda lolos ke tahap selanjutnya dalam proses seleksi.<br><br>

Pastikan Anda selalu memantau kotak masuk email Anda, termasuk folder spam/junk, untuk memastikan Anda tidak melewatkan komunikasi dari kami.<br><br>

Terima kasih lagi telah memilih Spectro.id untuk mencari peluang karier Anda. Semoga Anda sukses dalam proses seleksi!<br><br>

Salam,<br>
Tim Spectro<br>
@endsection
