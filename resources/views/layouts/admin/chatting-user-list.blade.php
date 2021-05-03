<div id="kt_quick_cart" class="offcanvas offcanvas-right p-10">
    <!--begin::Header-->
    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7" kt-hidden-height="46" style="">
        <h4 class="font-weight-bold m-0">@lang('common.Chatting List')</h4>
        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_cart_close">
            <i class="ki ki-close icon-xs text-muted"></i>
        </a>
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class="offcanvas-content">
        <!--begin::Wrapper-->
        <div class="offcanvas-wrapper mb-5 scroll-pull scroll ps ps--active-y">
            @foreach ($users as $user)
            <!--begin::Item-->
            <div class="d-flex align-items-center justify-content-between py-8">
                <div class="d-flex flex-column mr-2">
                    <a href="javascript:void(0);" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary" data-toggle="modal" data-target="#kt_chat_modal">{{ $user->name }}</a>
                    <span class="text-muted">{{ $user->email }}</span>
                    <small class="text-danger">{{ $user->roles()->first()?$user->roles()->first()->name:'User' }}</small>
                </div>
                <a href="javascript:void(0);" class="symbol symbol-70 flex-shrink-0">
                    @if($user->getMedia('images')->first())
                    <img src="{{ $user->getMedia('images')->first()->getUrl() }}" title="" alt="">
                    @else
                    <img src="{{ asset('img/logo.png') }}" title="" alt="">
                    @endif
                </a>
            </div>
            @endforeach
    </div>
    <!--end::Content-->
</div>
