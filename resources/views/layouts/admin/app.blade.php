<!DOCTYPE html>
<html lang="en">
    <!--begin::Head-->
    <head>
        <title>{{ env("APP_NAME") }} | @yield('title')</title>

        @include('layouts.admin.head')
	</head>
    <!--end::Head-->
    <!--begin::Body-->
    <body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
        <!--begin::Main-->
        <!--begin::Header Mobile-->
		@include('layouts.admin.header-mobile')
		<!--end::Header Mobile-->
        <div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
                <!--begin::Aside-->
                @include('layouts.admin.sidebar')
                <!--end::Aside-->
                <!--begin::Wrapper-->
                <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                    <!--begin::Header-->
                    @include('layouts.admin.header')
                    <!--end::Header-->
                    <!--begin::Content-->
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                        <!--begin::Subheader-->
                        @include('layouts.admin.sub-header')
                        <!--end::Subheader-->
                        <!--begin::Entry-->
                        <div class="container-fluid">
                        @yield('content')
                        </div>
                        <!--end::Entry-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
		</div>
        <!--end::Main-->
        <!-- begin::Quick Cart Panel-->
        @include('layouts.admin.chatting-user-list')
        <!-- end::Quick Cart Panel-->
        <!-- begin::User Panel-->
        @include('layouts.admin.user-panel')
        <!-- end::User Panel-->
        <!--begin::Modals-->
        @stack('modals')
        <!--begin::Chat Panel-->
        @include('layouts.admin.chatting-modal')
        <!--end::Chat Panel-->
        <!--end::Modals-->
        @include('layouts.admin.foot')
    </body>
    <!--end::Body-->

</html>
