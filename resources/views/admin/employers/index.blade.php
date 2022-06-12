@extends('layouts.admin_layout')

@section('name', 'Employers - site-admin.com')
@section('h1', 'Employers')

@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Main row -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Employers</h3>

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
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Surname</th>
                                <th scope="col">Salary</th>
                                <th scope="col">Department</th>
                                <th scope="col">Birthday</th>
                                <th scope="col">Position</th>   
                                <th scope="col">Hours</th>
                                <th scope="col">Total salary</th>
                                <th style="width: 20%"></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employers as $employee)
                            <tr>
                                <td>
                                    <a href="{{ route('employers.edit', $employee->id) }}"> 
                                        {{ $employee->id }} 
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('employers.edit', $employee->id) }}">
                                        {{ $employee->name }}
                                    </a>
                                </td>
                                <td>
                                    {{ $employee->surname }}
                                </td>
                                <td>
                                    {{ $employee->salary }}
                                    @if ($employee->salary_type === 2)
                                    (per hour)
                                    @endif
                                </td>
                                <td>{{ $employee->department_name }}</td>
                                <td>{{ $employee->birthday }}</td>
                                <td>{{ $employee->position }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
@endsection