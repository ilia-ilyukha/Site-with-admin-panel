@extends('layouts.admin_layout')

@section('title', 'Edit user role - site-admin')

@section('name', 'Edit user role')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Role <b>"{{ $role->name }}"</b></h3>
                </div>
                <form class="form-horizontal" action="{{ route('roles.update', $role->id) }}" method="POST">
                    @csrf

                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" id="inputName" placeholder="{{ $role->name }}" value="{{ $role->name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 col-form-label">Have permissions:</label>
                            @foreach ($permissions as $permission)
                            <div class="form-check">
                                <input 
                                    class="form-check-input" 
                                    type="checkbox" 
                                    value="{{ $permission->name }}" 
                                    name='permissions[]'
                                    @if (in_array($permission->id, $role_permissions) )                                          
                                        checked=""
                                    @endif
                                />
                                <label class="form-check-label">{{ $permission->name }}</label>
                            </div>
                            @endforeach
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Update</button>
                        <a href="{{ route('roles.index') }}" class="btn btn-default float-right">Cancel</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>
</div>

@endsection