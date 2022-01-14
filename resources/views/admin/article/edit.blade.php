@extends('layouts.admin_layout')

@section('name', 'Редактировать статью')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <form action="" method="post">
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
                                <label for="inputStatus">Status</label>
                                <select id="inputStatus" class="form-control custom-select">
                                    <option disabled="">Select one</option>
                                    <option value="1">Enabled </option>
                                    <option value="2">Disabled</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Project Name</label>
                                <input type="text" id="inputName" class="form-control" value="{{ $article['name'] }}">
                            </div>
                            <div class="form-group">
                                <label for="inputAnnotation">Annotation</label>
                                <textarea id="inputAnnotation" class="form-control" rows="2">{{ $article['annotation'] }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputAnnotation">Text</label>
                                <textarea id="inputAnnotation" class="form-control" rows="6">{{ $article['text'] }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputClientCompany">Created at:</label>
                                <input type="text" id="inputClientCompany" class="form-control" value="{{ $article['created_at'] }}">
                            </div>


                            <div class="form-group">
                                <label for="inputClientCompany">Author</label>
                                <input type="text" id="inputClientCompany" class="form-control" value="{{ $author->nick }}">
                            </div>
                            <a href="#" class="btn btn-secondary">Cancel</a>
                            <input type="submit" value="Edit" class="btn btn-success float-right">

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