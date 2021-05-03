<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label> @lang('users.Name') <span class="text-danger">*</span> </label>
            <input type="text" name='name' class="form-control" placeholder="@lang('users.Name')" value="{{ $item->name??(old('name')??'') }}" autocomplete="off" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label> @lang('users.Email') <span class="text-danger">*</span> </label>
            <input type="text" name='email' class="form-control" placeholder="@lang('users.Email')" value="{{ $item->email??(old('email')??'') }}" autocomplete="off" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label> @lang('users.Password') <span class="text-danger">{{ isset($edit)?'':'*' }}</span> </label>
            <input type="password" name='password' class="form-control" placeholder="@lang('users.Password')" autocomplete="off" {{ isset($edit)?'':'required' }}>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label> @lang('users.Confirm Password') <span class="text-danger">{{ isset($edit)?'':'*' }}</span> </label>
            <input type="password" name='password_confirmation' class="form-control" placeholder="@lang('users.Confirm Password')" autocomplete="off" {{ isset($edit)?'':'required' }}>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>@lang('common.Browse')</label>
            <div></div>
            <div class="custom-file">
                <input type="file" name='image' class="custom-file-input" id="customFile" accept="image/*">
                <label class="custom-file-label" for="customFile">@lang('common.Choose File')</label>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>@lang('common.Browse') <span class="text-danger">*</span> </label>
            <select name='role_id' class="form-control selectpicker" data-size="5" data-live-search="true" required>
                <option value="">@lang('common.Select')</option>
                @foreach ($roles as $role)

                @if(isset($item) && isset($item->roles()->first()->name) && $item->roles()->first()->name == $role->name)
                <option value="{{ $role->name }}" selected>{{ $role->name }}</option>
                @else
                <option value="{{ $role->name }}">{{ $role->name }}</option>
                @endif

                @endforeach
            </select>
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

