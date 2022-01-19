@extends('layouts.admin_layout')

@section('name', 'Редактировать статью')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <form action="{{ route('articles.update', $article['id']) }}" method="POST">
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
                                <label for="status">Status</label>
                                <select id="status" class="form-control custom-select" name="status">
                                    <option disabled="">Select one</option>
                                    <option value="1">Enabled </option>
                                    <option value="2">Disabled</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Project Name</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ $article['name'] }}">
                            </div>
                            <div class="form-group">
                                <label for="annotation">Annotation</label>
                                <textarea id="annotation" name="annotation" class="form-control" rows="2">{{ $article['annotation'] }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="text">Text</label>
                                <textarea id="text" name="text" class="form-control" rows="6">{{ $article['text'] }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="created_at">Created at:</label>
                                <input type="text" name="created_at" id="inputClientCompany" class="form-control" value="{{ $article['created_at'] }}">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="text" id="image" class="form-control" name="image" value="{{ $article['image'] }}">
                            </div>

                            <div class="form-group">
                                <label for="author">Author</label>
                                <select class="custom-select rounded-0" id="exampleSelectRounded0" name="author">
                                    @foreach ($authors as $author)
                                    <option @if ($author->id === $article['author_id']) selected @endif value="{{ $author->id }}">{{ $author->nick }}</option>
                                    @endforeach
                                </select>

                                <!-- <input type="text" id="inputClientCompany" class="form-control" value="{{ $author->nick }}"> -->
                            </div>
                            <a href="{{ route('articles.index') }}" class="btn btn-secondary">Cancel</a>
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
<script>
    CKEDITOR.replace('text');
</script>
@endsection