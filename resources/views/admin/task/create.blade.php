@extends('layouts.admin_layout')

@section('name', 'Create Task')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <form action="{{ route('tasks.store') }}" method="POST">
                    @csrf
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
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control"">
                            </div>
                            <div class=" form-group">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" class="form-control" rows="6"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="assignee">Assignee</label>
                                <select class="custom-select rounded-0" id="assignee" name="assignee">
                                    <option value="" disabled selected>Select assignee</option>
                                    @foreach ($assignees as $assignee)
                                    <option value="{{ $assignee->id }}">{{ $assignee->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="author">Author</label>
                                <select class="custom-select rounded-0" id="authors" name="author">
                                    <option value="" disabled selected>Select author</option>
                                    @foreach ($authors as $author)
                                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancel</a>
                            <input type="submit" value="Create" class="btn btn-success float-right">

                        </div>
                        <!-- /.card-body -->
                    </div>

                    <!-- Equivalent to... -->
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                </form>

            </div>
        </div>
</section>
@endsection