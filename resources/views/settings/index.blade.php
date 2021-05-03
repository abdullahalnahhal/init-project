@extends('layouts.admin.app')
@section('title', trans('pages.Settings'))
@section('content')
<div class= "row">
    <!--begin::Card-->
    <div class="card card-custom rounded-0 col-12">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon">
                    <i class="flaticon-security text-primary"></i>
                </span>
                <h3 class="card-label">@lang('pages.Settings') : @lang('pages.Main') </h3>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.settings.update', ['type' => 'website']) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                @include('settings.'.$type)
                <div class="row">
                    <div class="col-12">
                        <button type"submit" class="btn btn-primary rounded-0 m-2">
                            <i class="la la-save"></i>
                            @lang('common.Save')
                        </button>
                        <a href='{{ route('admin.settings.index') }}' class="btn btn-secondary rounded-0 m-2">
                            <i class="la la-close"></i>
                            @lang('common.Cancel')
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--end::Card-->
</div>
@endsection
