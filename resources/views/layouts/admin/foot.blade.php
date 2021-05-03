    <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset("admin/assets/plugins/global/plugins.bundle.js") }}"></script>
    <script src="{{ asset("admin/assets/plugins/custom/prismjs/prismjs.bundle.js") }}"></script>
    <script src="{{ asset("admin/assets/js/scripts.bundle.js") }}"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Vendors(used by this page)-->
	<script src="{{ asset("admin/assets/plugins/custom/datatables/datatables.bundle.js") }}"></script>
	<!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset("admin/assets/js/pages/features/miscellaneous/toastr.js") }}"></script>
    <script src="{{ asset("admin/assets/js/pages/widgets.js") }}"></script>
    <script src="{{ asset("admin/assets/js/pages/features/miscellaneous/sweetalert2.js") }}"></script>
    <script src="http://localhost:3000/socket.io/socket.io.js"></script>
    <script src="{{ asset('js/php-helper.js') }}"></script>
    <script src="{{ asset('js/commander.js') }}"></script>
    <script src="{{ asset('js/dom-builder.js') }}"></script>
    <script src="{{ asset('admin/js/chatting.js') }}"></script>
    <script src="{{ asset('admin/js/general.js') }}"></script>
    @include('ckfinder::setup')
    <!--end::Page Scripts-->
    <script>
        $('.normal-table').DataTable({
            language: {
				'lengthMenu': 'Display _MENU_',
                "search" : "@lang("common.Search")"
			},
            responsive: true,
        });

        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        @if(session('created'))
            toastr.success('{!! trans(session("created")) !!}');
        @endif

        @if(session('updated'))
            toastr.info('{!! trans(session("updated")) !!}');
        @endif

        @if(session('deleted'))
            toastr.error('{!! trans(session("deleted")) !!}');
        @endif
        @if(session('warning'))
            toastr.warning('{!! trans(session("warning")) !!}');
        @endif

        @if($errors->any())
            @foreach ( $errors->all() as $error)
            toastr.error("{!! trans($error) !!}");
            @endforeach
        @endif

    </script>

    @stack('js')
