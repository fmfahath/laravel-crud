@extends("layouts.app");
@section('main')
<h5><i class="bi bi-plus-square-fill"></i> Add New Product</h5>
<hr>
<nav class="my-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Add New Product</li>
    </ol>
</nav>

<div class="col-md-8">
    <form action="#" method="POST">
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control"
                    placeholder="Enter Product Name">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="mrp" class="form-label">M.R.P</label>
                <input type="text" name="mrp" id="mrp" class="form-control" placeholder="Enter MRP Price">
            </div>
            <div class="col-md-6">
                <label for="price" class="form-label">Selling Price</label>
                <input type="text" name="price" id="price" class="form-control"
                    placeholder="Enter Selling Price">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
                <label for="description" class="form-label">Product Description</label>
                <textarea name="description" id="description" class="form-control"
                    placeholder="Enter Description" style="resize: none; height: 150px;"></textarea>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
                <label for="image" class="form-label">Product Image</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
        </div>

        <div class="my-4">
            <button type="submit" class="btn btn-dark">Save Product</button>
            <button type="reset" class="btn btn-danger">Clear All</button>
        </div>
    </form>
</div>
@endsection