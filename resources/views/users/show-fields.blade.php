<div class="row">
    <div class="col-md-4 d-flex align-items-center justify-content-center">
        @if($item->getMedia('images')->first())
        <img src="{{ $item->getMedia('images')->first()->getUrl() }}" class="img-thumbnail">
        @else
        <img src="{{ asset('img/logo.png') }}" class="img-thumbnail">
        @endif

    </div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-4 col-sm-6 bg-secondary font-weight-boldest p-5">
                @lang('users.Name')
            </div>
            <div class="col-md-8 col-sm-6 font-weight-bolder p-5">
                {{ $item->name }}
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-4 col-sm-6 bg-secondary font-weight-boldest p-5">
                @lang('users.Email')
            </div>
            <div class="col-md-8 col-sm-6 font-weight-bolder p-5">
                {{ $item->email }}
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-4 col-sm-6 bg-secondary font-weight-boldest p-5">
                @lang('users.Role')
            </div>
            <div class="col-md-8 col-sm-6 font-weight-bolder p-5">
                {{ $item->roles()->first()->name }}
            </div>
        </div>
    </div>
</div>
