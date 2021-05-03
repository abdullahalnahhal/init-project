<div class="row">
    @foreach ($item->users as $user)
    @include('roles.user', ['user' => $user])
    @endforeach
</div>
