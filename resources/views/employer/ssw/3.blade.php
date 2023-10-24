@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-md-6 mb-10">
        <div class="card">
            <div class="card-body">
                Interview
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('ssw.acc', ['id' => $data->id]) }}" class="btn btn-primary col-12">ACC</a>
            </div>
        </div>
    </div>
@endsection
