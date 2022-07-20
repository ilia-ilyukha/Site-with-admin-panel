@extends('layouts.admin_layout')

@section('name', 'Task')

@push('links')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')
<style>
.select2-selection__choice{    

}
.select2-selection__choice__display{
    padding: 0 10px;
    padding-left: 25px;
    color: #444;
}    
</style>
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
                                <input type="text" id="title" name="title" class="form-control" value="{{ $task['title'] }}">
                            </div>
                            <div class="form-group">
                                <label for="text">Description</label>
                                <textarea id="description" name="description" class="form-control" rows="6">{{ $task['description'] }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="created_at">Created at:</label>
                                <input type="text" name="created_at" id="inputClientCompany" class="form-control" value="{{ $task['created_at'] }}">
                            </div>
                            <div class="form-group">
                                <label for="assignee">Assignee</label>
                                <select class="assignees-select2 custom-select rounded-0" name="assignees[]" multiple="multiple" id="assignees">
                                    @foreach ($users as $user)
                                    <option value="{{ $user->id }}" 
                                    @foreach ($assignees as $assignee) 
                                        @if ($assignee->developer_id == $user->id) selected @endif          
                                    @endforeach

                                    value="{{ $user->id }}"> {{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="author">Author</label>
                                <select class="custom-select rounded-0" id="authors" name="author">
                                    @foreach ($authors as $author)
                                    <option value="{{ $author->id }}" @if ($author->id === $task->author_id) selected @endif value="{{ $author->id }}">{{ $author->name }}</option>
                                    @endforeach
                                </select>
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

            <!-- Hours form -->
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
                    <div class="form-group hours-spent">
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

@push('scripts')

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2-selection').width('auto');
    });
</script>
<script>
    function formatState(state) {
        if (!state.id) {
            return state.text;
        }
        var baseUrl = "/user/pages/images/flags";
        var $state = $(
            '<span><img src="' + baseUrl + '/' + state.element.value.toLowerCase() + '.png" class="img-flag" /> ' + state.text + '</span>'
        );
        return $state;
    };
    $(document).ready(function() {
        $(".assignees-select2").select2({
            // templateResult: formatState,
            width: '100%',
        });
    });
</script>

@endpush