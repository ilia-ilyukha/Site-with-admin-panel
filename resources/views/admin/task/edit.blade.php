@extends('layouts.admin_layout')

@section('name', 'Task')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <form action="{{ route('tasks.update', $task['id']) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">General</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Title</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ $task['title'] }}">
                            </div>
                            <div class="form-group">
                                <label for="text">Description</label>
                                <textarea id="text" name="text" class="form-control" rows="6">{{ $task['description'] }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="created_at">Created at:</label>
                                <input type="text" name="created_at" id="inputClientCompany" class="form-control" value="{{ $task['created_at'] }}">
                            </div>

                            <div class="form-group">
                                <label for="author">Assignee</label>
                                <p>{{ $task->assignee }}</p>
                            </div>

                            <div class="form-group">
                                <label for="author">Author</label>
                                <p>{{ $task->author_id }}</p>
                            </div>
                            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancel</a>
                            <input type="submit" value="Edit" class="btn btn-success float-right">

                        </div>
                        <!-- /.card-body -->
                    </div>

                    <!-- Equivalent to... -->
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                </form>

            </div>

            <div class="col-md-6">
                <form action="{{ route('tasks/addHours', $task['id']) }}" method="POST">
                    @csrf

                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Add hours</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="hours_quantity">Hours</label>
                                <input type="number" id="hours_quantity" class="form-control" value="1" step="1" name="hours_quantity">
                            </div>
                            <div class="form-group">
                                <label for="name">Description</label>
                                <input type="text" id="desciption" name="description" class="form-control" value="">
                            </div>

                            <input type="submit" value="Add" class="btn btn-success float-right">
                        </div>
                        <!-- /.card-body -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="task_id" value="{{ $task['id'] }}" />
                </form>
            </div>
            <!-- /.card -->
            <div class="card card-info">
                <div class="card-body p-0">
                    <div class="form-group">
                        <h2>Total hours spent: <b>{{ $hours_quantity }}</b></h2>
                    </div>
                </div>
            </div>
            <!-- /.card -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Spended hours</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>Description</th>
                                <th>Assignee</th>
                                <th>Added</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($hours as $hour)
                            <tr>
                                <td>{{ $hour->quantity }}</td>
                                <td>{{ $hour->description }}</td>
                                <td>{{ $hour->assignee }}</td>
                                <td>{{ $hour->created_at }}</td>
                                <td class="text-right py-0 align-middle">
                                    <div class="btn-group btn-group-sm">
                                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- Equivalent to... -->

        </div>
    </div>
</section>
@endsection