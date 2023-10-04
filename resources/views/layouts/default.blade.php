@include('layouts.metahead')

        @include('layouts.navbar')
        @include('layouts.sidenav')

        @yield('content')

        @include('layouts.footer')

        <!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->

</body>

</html>
