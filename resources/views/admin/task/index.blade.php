@extends('layouts.admin_layout')

@section('name', 'All tasks')

@section('content')

<!-- /.row -->
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Tasks</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Assignee</th>
              <th>Date</th>
              <th>Status</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($tasks as $task)
            <tr>
              <td> <a href="{{ route('tasks.edit', $task) }}"># {{ $task->id }}</a></td>
              <td>{{ $task->title }}</td>
              <td> {{ $task->name }}</td>
              <td>{{ $task->created_at }}</td>
              <td><span class="tag tag-success">Approved</span></td>
              <td>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: inline-block">
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
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
<!-- /.row -->

@endsection