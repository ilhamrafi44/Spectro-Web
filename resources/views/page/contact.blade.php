@extends('layouts.landing')

@section('content')
    <div class="row d-flex">
        <div class="col-md-8 mb-10">
            <div class="card border">
                <div class="card-body">
                    <h1>Contact US</h1>
                    <p class="fs-4">
                        Silahkan kirimkan kami pesan yang ingin anda tanyakan, dan Team kami akan membalas melalui email
                        yang anda cantumkan.
                    </p>

                    <form action="{{ route('contact.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="mb-5">
                                <label for="">Subject</label>
                                <input type="text" name="subject" id="" class="form-control">
                            </div>
                            <div class="mb-5">
                                <label for="">Message</label>
                                <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary col-12">Submit</button>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border">
                <div class="card-body">
                    <h1>Kontak Kami</h1>
                    <a href="https://maps.app.goo.gl/WeKMC8nL5HQ2se3y7" target="_blank" class="fs-4 text-dark text-center">{!! $data->alamat !!}</a><div class="separator separator-content my-15">WhatsApp</div>
                    <a href="https://wa.me/{!! $data->nomor_hp !!}" target="_blank" class="fs-4 text-dark text-center">+{!! $data->nomor_hp !!}
                    </a><div class="separator separator-content my-15">Email</div>
                    <a href="mailto:info@{{ $data->email }}" target="_blank" class="fs-4 text-dark text-center">{!! $data->nomor_hp !!}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
