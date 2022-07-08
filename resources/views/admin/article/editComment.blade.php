@extends('layouts.admin_layout')

@section('name', 'Комментарии')

@section('content')

<!-- /.row -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Comment № {{ $comment->id }}</h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="inputEmail1" placeholder="Enter email" value={{ $comment->email }}>
                        </div>
                        <div class="form-group">
                            <label for="inputCreated1">Created</label>
                            <input type="text" class="form-control" id="inputCreated1" placeholder="Created" value={{ $comment->created_at }}>
                        </div>
                        <div class="form-group">
                            <label for="inputPostId">Post id:</label>
                            <input type="text" disabled class="form-control" id="inputPostId" placeholder="Post Id" value={{ $comment->post_id }}>
                        </div>
                        <div class="form-group">
                            <label>Textarea</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..." value={{ $comment->text }}> {{ $comment->text }} </textarea>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select id="status" class="form-control custom-select" name="status">
                                <option disabled="">Select one</option>
                                <option value="1">Enabled </option>
                                <option value="0">Disabled</option>
                            </select>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
<!-- /.row -->

@endsection