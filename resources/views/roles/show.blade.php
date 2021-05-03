@extends('layouts.admin.app')
@section('title', trans('pages.Roles')." : ".$item->name)
@section('content')
<div class= "row">
    <!--begin::Card-->
    <div class="card card-custom rounded-0 col-12">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon">
                    <i class="flaticon-security text-primary"></i>
                </span>
                <h3 class="card-label">@lang('pages.Roles') : {{ $item->name }}</h3>
            </div>
            <div class="card-toolbar">
                <a href="{{ route('admin.roles.edit', ['role' => $item->id]) }}" class="btn btn-sm btn-primary font-weight-bold rounded-0 mr-2">
                    <i class="flaticon-edit-1"></i>
                    @lang('common.Edit')
                </a>
                <a href="javascript:void(0);" class="btn btn-sm btn-primary mr-3 rounded-0 command"
                data-command='confirm' data-message='@lang("messages.Are You Sure You Want To Delete These Item ... ?")'
                data-callbackSuccess = 'this.formSubmit("#remove-{{ $item->id }}")'>
                    <i class="flaticon-delete"></i> @lang('common.Delete')
                </a>
                <form action="{{ route('admin.roles.destroy', ['role' => $item->id]) }}" method='post' id='remove-{{ $item->id }}'>
                    @csrf
                    @method('delete')
                </form>
            </div>
        </div>
    </div>
    <div class="card-body">
        @include('roles.show-fields')
    </div>
    <!--end::Card-->
</div>
@endsection
