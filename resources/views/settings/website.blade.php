<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="font-weight-boldest"> @lang('settings.Title')</label>
            <input type="text" name='title' class="form-control" placeholder="@lang('settings.Title')" value="{{ $items->where('name', '=', 'title')->first()->value }}" autocomplete="off">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="font-weight-boldest">@lang('settings.Shortcut')</label>
            <div></div>
            <div class="custom-file">
                <input type="file" name='shortcut' class="custom-file-input" id="customFile" accept="image/*">
                <label class="custom-file-label" for="customFile">@lang('common.Choose File')</label>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="font-weight-boldest"> @lang('settings.Brand Type')</label>
            <div class="radio-inline">
                <span class="col-6">
                    <label class="radio radio-square">
                        <input type="radio" name="brand-type" value="0" />
                        <span></span> @lang('settings.Text Logo')
                    </label>
                </span>
                <span class="col-6">
                    <label class="radio radio-square">
                        <input type="radio" name="brand-type" value="1" checked/>
                        <span></span> @lang('settings.Image')
                    </label>
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="font-weight-boldest">@lang('settings.Brand')</label>
            <div></div>
            <div class="custom-file">
                <input type="file" name='brand' class="custom-file-input" id="customFile" accept="image/*">
                <label class="custom-file-label" for="customFile">@lang('common.Choose File')</label>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="font-weight-boldest"> @lang('settings.Web Type')</label>
            <div class="radio-inline">
                <span class="col-6">
                    <label class="radio radio-square">
                        <input type="radio" name="web-type" value="swp" />
                        <span></span> @lang('settings.Single Web Page')
                    </label>
                </span>
                <span class="col-6">
                    <label class="radio radio-square">
                        <input type="radio" name="web-type" value="mp" checked/>
                        <span></span> @lang('settings.Multiple Pages')
                    </label>
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="font-weight-boldest"> @lang('settings.Address')</label>
            <input type="text" name='address' class="form-control" placeholder="@lang('settings.Address')" value="{{ $items->where('name', '=', 'address')->first()->value }}" autocomplete="off">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="font-weight-boldest"> @lang('settings.Phone')</label>
            <input type="text" name='phone' class="form-control" placeholder="@lang('settings.Phone')" value="{{ $items->where('name', '=', 'phone')->first()->value }}" autocomplete="off">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="font-weight-boldest"> @lang('settings.Mobile')</label>
            <input type="text" name='mobile' class="form-control" placeholder="@lang('settings.Mobile')" value="{{ $items->where('name', '=', 'mobile')->first()->value }}" autocomplete="off">
        </div>
    </div>
</div>
