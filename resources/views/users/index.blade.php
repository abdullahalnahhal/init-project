@extends('layouts.admin.app')
@section('title', trans('pages.Users'))
@section('content')
<div class= "row">
    <!--begin::Card-->
    <div class="card card-custom rounded-0 col-12">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon">
                    <i class="flaticon-users-1 text-primary"></i>
                </span>
                <h3 class="card-label">@lang('pages.Users')</h3>
            </div>
            <div class="card-toolbar">
                <a href="{{ route('admin.users.create') }}" class="btn btn-sm btn-primary font-weight-bold rounded-0">
                    <i class="la la-plus"></i>
                    @lang('common.New User')
                </a>
            </div>
        </div>
        <div class="card-body">
            @include('users.table')
        </div>
    </div>
    <!--end::Card-->
</div>
@endsection
