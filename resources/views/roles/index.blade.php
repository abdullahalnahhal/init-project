@extends('layouts.admin.app')
@section('title', trans('pages.Roles'))
@section('content')
<div class= "row">
    <!--begin::Card-->
    <div class="card card-custom rounded-0 col-12">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon">
                    <i class="flaticon-security text-primary"></i>
                </span>
                <h3 class="card-label">@lang('pages.Roles')</h3>
            </div>
            <div class="card-toolbar">
                <a href="{{ route('admin.roles.create') }}" class="btn btn-sm btn-primary font-weight-bold rounded-0">
                    <i class="la la-plus"></i>
                    @lang('common.New Role')
                </a>
            </div>
        </div>
        <div class="card-body">
            @include('roles.table')
        </div>
    </div>
    <!--end::Card-->
</div>
@endsection
