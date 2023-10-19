@extends('layouts.default')

@section('content')
    <!-- 4-blocks row start -->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10 dashboard-header">
        <div class="col-lg-12 col-md-12">
            <div class="card h-100">
                <!--begin::Card body-->
                <div class="card-body p-9">
                    <!--begin::Wrapper-->
                    <!--end::Wrapper-->
                    {{ $dataTable->table() }}
                    <!--end::Datatable-->
                </div>
                <!--end::Card body-->
            </div>
        </div>
    </div>
    <!-- 4-blocks row end -->
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush
