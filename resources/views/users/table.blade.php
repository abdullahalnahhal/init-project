<!--begin: Datatable-->
<table class="table table-bordered normal-table">
<thead>
    <th>@lang('users.Name')</th>
    <th>@lang('users.Email')</th>
    <th>@lang('users.Role')</th>
    <th>@lang('common.Actions')</th>
</thead>
<tbody>
    @foreach ($items as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->roles()->first()->name??'' }}</td>
            <td>
                <a href="{{ route('admin.users.edit', ['user' => $item->id]) }}" class="btn btn-sm btn-primary mr-3 rounded-0">
                    <i class="flaticon-edit-1"></i> @lang('common.Edit')
                </a>
                <a href="{{ route('admin.users.show', ['user' => $item->id]) }}" class="btn btn-sm btn-primary mr-3 rounded-0">
                    <i class="flaticon-eye"></i> @lang('common.Show')
                </a>
                <a href="javascript:void(0);" class="btn btn-sm btn-primary mr-3 rounded-0 command"
                data-command='confirm' data-message='@lang("messages.Are You Sure You Want To Delete These Item ... ?")'
                data-callbackSuccess = 'command.formSubmit("#remove-{{ $item->id }}")'>
                    <i class="flaticon-delete"></i> @lang('common.Delete')
                </a>
                <form action="{{ route('admin.users.destroy', ['user' => $item->id]) }}" method='post' id='remove-{{ $item->id }}'>
                    @csrf
                    @method('delete')
                </form>
            </td>
        </tr>
    @endforeach
</tbody>
</table>
