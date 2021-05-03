<div class="col-lg-3 col-md-4 col-sm-6">
    <!--begin::Card-->
    <div class="card card-custom gutter-b card-stretch">
        <!--begin::Body-->
        <div class="card-body text-center pt-4">
            <!--begin::User-->
            <div class="mt-7">
                @if ($user->getMedia('images')->first())
                <div class="symbol symbol-circle symbol-lg-75">
                    <img src="{{ $user->getMedia('images')->first()->getUrl() }}" alt="image">
                </div>
                @else
                <div class="symbol symbol-lg-75 symbol-circle symbol-primary circle bg-light-info p-5">
                    <span class="font-size-h3 font-weight-boldest">{{ nameLogo($user->name) }}</span>
                </div>
                @endif
            </div>
            <!--end::User-->
            <!--begin::Name-->
            <div class="my-2">
                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4">{{ $user->name }}</a>
            </div>
            <!--end::Name-->
            <!--begin::Buttons-->
            <div class="mt-9 mb-6">
                <a href="{{ route('admin.users.edit', ['user'=>$user->id]) }}" class="btn btn-md btn-icon btn-light-primary btn-pill mx-2" data-toggle="tooltip" title="@lang('common.Edit')">
                    <i class="flaticon-edit-1"></i>
                </a>
                <a href="{{ route('admin.users.show', ['user'=>$user->id]) }}" class="btn btn-md btn-icon btn-light-primary btn-pill mx-2" data-toggle="tooltip" title="@lang('common.Show')">
                    <i class="flaticon-eye"></i>
                </a>
                <a href="javascript:void(0)" class="btn btn-md btn-icon btn-light-primary btn-pill mx-2 command" data-command='confirm' data-message='@lang("messages.Are You Sure You Want To Delete These Item ... ?")'
                data-callbackSuccess = 'this.formSubmit("#remove-{{ $user->id }}")' data-toggle="tooltip" title="@lang('common.Delete')">
                    <i class="flaticon-delete"></i>
                </a>
                <form action="{{ route('admin.users.destroy', ['user' => $user->id]) }}" method='post' id='remove-{{ $user->id }}'>
                    @csrf
                    @method('delete')
                </form>
            </div>
            <!--end::Buttons-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Card-->
</div>
