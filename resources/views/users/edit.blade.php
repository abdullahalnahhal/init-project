@extends('layouts.admin.app')
@section('title', trans('pages.Edit User').' : '.$item->name)
@section('content')
<div class= "row">
    <!--begin::Card-->
    <div class="card card-custom rounded-0 col-12">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon">
                    <i class="flaticon-user-add text-primary"></i>
                </span>
                <h3 class="card-label">@lang('pages.Edit User') : {{ $item->name }}</h3>
            </div>
            <div class="card-toolbar">
                <a href="{{ url()->previous() }}" class="btn btn-sm btn-secondary font-weight-bold rounded-0">
                    <i class="la la-long-arrow-alt-left"></i>
                    @lang('common.Back')
                </a>
            </div>
        </div>
        <div class="card-body">
            <form method='post' action='{{ route('admin.users.update', ['user' => $item->id]) }}' autocomplete="off" enctype = "multipart/form-data">
                @csrf
                @method('put')
                @include('users.fields', ['edit' => true])
            </form>
        </div>
    </div>
    <!--end::Card-->
</div>
@endsection
