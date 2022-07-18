@extends('layouts.admin_layout')

@section('title', 'Users permissions - site-admin')

@section('name', 'Users permissions')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Permission <b>"{{ $permission->name }}"</b></h3>
                </div>
                <form class="form-horizontal" action="{{ route('permissions.update', $permission->id) }}" method="POST"> 
                    @csrf
                    
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" id="inputName" placeholder="{{ $permission->name }}" value="{{ $permission->name }}">
                            </div>
                        </div>
                       
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                           <button type="submit" class="btn btn-info">Update</button>
                            <a href="{{ route('permissions.index') }}" class="btn btn-default float-right">Cancel</a>
                        </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>
</div>

@endsection