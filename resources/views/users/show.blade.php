@extends('layouts.admin.app')
@section('title', trans('pages.Users')." : ".$item->name)
@section('content')
<div class= "row">
    <!--begin::Card-->
    <div class="card card-custom rounded-0 col-12">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon">
                    <i class="flaticon-users-1 text-primary"></i>
                </span>
                <h3 class="card-label">@lang('pages.Users') : {{ $item->name }}</h3>
            </div>
            <div class="card-toolbar">
                <a href="{{ route('admin.users.edit', ['user' => $item->id]) }}" class="btn btn-sm btn-primary font-weight-bold rounded-0 mr-2">
                    <i class="flaticon-edit-1"></i>
                    @lang('common.Edit')
                </a>
                <a href="javascript:void(0);" class="btn btn-sm btn-primary mr-3 rounded-0 command"
                data-command='confirm' data-message='@lang("messages.Are You Sure You Want To Delete These Item ... ?")'
                data-callbackSuccess = 'this.formSubmit("#remove-{{ $item->id }}")'>
                    <i class="flaticon-delete"></i> @lang('common.Delete')
                </a>
                <form action="{{ route('admin.users.destroy', ['user' => $item->id]) }}" method='post' id='remove-{{ $item->id }}'>
                    @csrf
                    @method('delete')
                </form>
            </div>
        </div>
        <div class="card-body">
            @include('users.show-fields')
        </div>
    </div>
    <!--end::Card-->
</div>
@endsection
