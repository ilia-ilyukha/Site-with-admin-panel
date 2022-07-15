@extends('layouts.admin_layout')

@section('title', 'User - site-admin')

@section('name', 'User')

@push('links')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')
<style>
#select2-roles-container .select2-selection__choice{    
    padding-left: 25px;
    color: #444;
}
.select2-selection__choice__display{
    padding: 0 10px;
}    
</style>
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Пользователь id#{{ $user->id }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="{{ $user->email }}" value="{{ $user->email }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputName1" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" id="inputName1" placeholder="{{ $user->name }}" value="{{ $user->name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">New Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password"  id="inputPassword3" placeholder="New Password">
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="user_role" class="col-sm-2 col-form-label">Role</label>
                            <div class="col-sm-10">
                                <select class=" form-control custom-select rounded " id="user_role">
                                    @foreach ($roles as $role)
                                    <option value="{{ $role->id }}"  @selected($role->name === $value)>
                                        {{ $role->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div> -->
                        <div class="form-group">
                                <label for="assignee">Role</label>
                                <select class="roles-select2 custom-select rounded-0" name="roles[]" multiple="multiple" id="roles">
                                     @foreach ($roles as $role)
                                        <option 
                                            value="{{ $role->name }}" 
                                            @foreach ($user_roles as $user_role) @if($user_role == $role->name) selected @endif @endforeach                                          
                                        >
                                            {{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                           <button type="submit" class="btn btn-info">Sign in</button>
                            <a href="{{ route('users.index') }}" class="btn btn-default float-right">Cancel</a>
                        </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    console.log('321');
     $(document).ready(function() {
        $('.select2-selection').width('auto');
    });
</script>
<script>
    $(document).ready(function() {
        $("#roles").select2({
            width: '100%',
        });
    });
</script>

  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endpush