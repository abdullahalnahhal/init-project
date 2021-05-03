<div class="row">
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label> @lang('pages.Title') <span class="text-danger">*</span> </label>
            <input type="text" name='name' class="form-control" placeholder="@lang('pages.Title')" value="{{ $item->name??(old('name')??'') }}" autocomplete="off" required>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label> @lang('pages.Page Type') <span class="text-danger">*</span> </label>
            <select name='role_id' class="form-control selectpicker" data-size="5" data-live-search="true" required>
                <option value="">Select</option>
                <option value="galary">Galary</option>
                <option value="video-theater">Video Theater</option>
                <option value="bodcast">Bodcast [Sound List]</option>
                <option value="articles">Articles</option>
                <option value="downloads">Downloads [Links Table]</option>
                <option value="pricing">Pricing</option>
                <option value="login">Login</option>
                <option value="signup">Signup</option>
                <option value="invoices">Invoices</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="checkbox checkbox-square">
                <input type="checkbox" name="show_on_header">
                 <span> </span> @lang('pages.Show on header')
            </label>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label> @lang('pages.Description') <span class="text-danger">*</span> </label>
            <textarea name="description" class="form-control ck-editor"></textarea>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-12">
        <button type"submit" class="btn btn-primary rounded-0 m-2">
            <i class="la la-save"></i>
            @lang('common.Save')
        </button>
        <a href='{{ route('admin.pages.index') }}' class="btn btn-secondary rounded-0 m-2">
            <i class="la la-close"></i>
            @lang('common.Cancel')
        </a>
    </div>
</div>
@push('js')
<script src="{{ asset('admin/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>
<script>
    console.log(CKFinder._config);
    ClassicEditor.create(document.querySelector('.ck-editor'),{
        ckfinder: {
			uploadUrl: CKFinder._config.connectorPath+'?command=QuickUpload&type=Files&responseType=json',
		},
    });

</script>
@endpush
