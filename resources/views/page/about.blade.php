@extends('layouts.landing')

@section('content')
    <div class="container p-5">

        <h1>About US</h1>
        {!! $data->about_us !!}
    </div>
@endsection
