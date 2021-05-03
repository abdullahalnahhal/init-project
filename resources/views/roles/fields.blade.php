<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label> @lang('users.Name') <span class="text-danger">*</span> </label>
            <input type="text" name='name' class="form-control" placeholder="@lang('users.Name')" value="{{ $item->name??(old('name')??'') }}" autocomplete="off" required>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <button type"submit" class="btn btn-primary rounded-0 m-2">
            <i class="la la-save"></i>
            @lang('common.Save')
        </button>
        <a href='{{ route('admin.users.index') }}' class="btn btn-secondary rounded-0 m-2">
            <i class="la la-close"></i>
            @lang('common.Cancel')
        </a>
    </div>
</div>

