@extends('layouts.admin_layout')

@section('name', 'Добавить товар')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <form action="{{ route('product.store') }}" method="POST">
                    @csrf
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add product</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="model">Model</label>
                                <input type="text" id="model" class="form-control" name="model">
                            </div>
                            <div class="form-group">
                                <label for="sku">Sku</label>
                                <input type="text" id="sku" class="form-control" name="sku">
                            </div>
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="text" id="quantity" class="form-control" name="quantity">
                            </div>
                            <div class="form-group">
                                <label for="text">Description</label>
                                <textarea id="text" class="form-control" rows="8" name="text"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="stock_status_id">Stock Status</label>
                                <select id="stock_status_id" class="form-control custom-select" name="stock_status_id">
                                    <option disabled="">Select one</option>
                                    <option value="1">Available </option>
                                    <option value="2">Out of stock</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="text" id="image" class="form-control" name="image">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" id="price" class="form-control" name="price">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select id="status" class="form-control custom-select" name="status">
                                    <option disabled="">Select one</option>
                                    <option value="1">Enable </option>
                                    <option value="0">Disable</option>
                                </select>
                            </div>

                            <a href="{{ route('product.index') }}" class="btn btn-secondary">Cancel</a>
                            <input type="submit" value="Add product" class="btn btn-success float-right">
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                </form>
            </div>
        </div>
</section>
<script>
    CKEDITOR.replace('text');
</script>

@endsection