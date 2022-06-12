@extends('layouts.admin_layout')

@section('name', 'Import - site-admin.com')
@section('h1', 'Import employers')

@section('content')

<style>
    .custom-file-label::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 3;
        display: block;
        height: calc(calc(2.25rem + 2px) - 1px * 2);
        padding: 0.375rem 0.75rem;
        line-height: 1.5;
        color: #495057;
        content: "Browse";
        background-color: #e9ecef;
        border-left: 1px solid #ced4da;
        border-radius: 0 0.25rem 0.25rem 0;
    }

    .custom-file-label {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1;
        height: calc(2.25rem + 2px);
        padding: 0.375rem 0.75rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
    }

    .custom-file-input {
        position: relative;
        z-index: 2;
        width: 100%;
        height: calc(2.25rem + 2px);
        margin: 0;
        opacity: 0;
    }

    .custom-file {
        position: relative;
        display: inline-block;
        width: 100%;
        height: calc(2.25rem + 2px);
        margin-bottom: 0;
    }
    #submit_button{
        margin-top: 10px
    }
    #form-upload{
        margin-top: 10px
    }
</style>

<section class="content">
    <div class="container-fluid">
        <!-- Main row -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">

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
                <form class="was-validated">

                </form>

                <div class="container">
                    <form id="form-upload" method="post" action="{{ route('employers-import') }}" enctype="multipart/form-data" class="col-lg-6 offset-lg-3 ">
                        @csrf

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="file" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose Employees file</label>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2" id="submit_button">Upload file</button>
                    </form>


                </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
@endsection