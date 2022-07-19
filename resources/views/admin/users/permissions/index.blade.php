@extends('layouts.admin_layout')

@section('title', 'Users permissions - site-admin')

@section('name', 'Users permissions')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="float-end"><a href="{{ route('permissions.create') }}" class="btn btn-info btn-sm">Add permission</a></div>    
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Permissions:</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                №
                            </th>
                            <th style="width: 20%" class="text-center">
                                Name
                            </th>
                            <th style="width: 20%" class="text-center">
                                Status
                            </th>
                            <th>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $permission)
                        <tr>
                            <td>{{ $permission->id }}</td>
                            <td class="text-center">{{ $permission->name }}</td>
                            <td class="text-center">1</td>
                            <td class="text-center">
                                <a class="btn btn-info btn-sm" href="{{ route('permissions.edit',  $permission->id) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <form action="{{ route('permissions.destroy',  $permission->id) }}" method="POST" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection

