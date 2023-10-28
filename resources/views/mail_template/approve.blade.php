@extends('mail_template.layout')

@section('email')
Halo {{ $JobName }}, <br><br>

Kami ingin memberitahu Anda tentang hasil lamaran kerja Anda untuk posisi {{ $JobName }} di {{ $EmployerName }}. Berikut hasilnya:<br><br>

- Status Lamaran: Diterima <br>
- Tanggal Pemberitahuan: {{ $Date }} <br>

Jika lamaran Anda diterima, kami akan menghubungi Anda lebih lanjut untuk langkah-langkah selanjutnya. Jika Anda tidak diterima, jangan berkecil hati, teruslah mencari peluang lain di Spectro dan tingkatkan keterampilan Anda. <br> <br>

Terima kasih telah menggunakan Spectro.id untuk mencari pekerjaan. Kami selalu siap membantu Anda mencapai tujuan karier Anda. <br><br>

Salam,<br>
Tim Spectro<br>
@endsection
