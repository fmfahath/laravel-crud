@extends("layouts.app");
@section('main')
<div class="d-flex justify-content-between">
    <h5><i class="bi bi-journal-richtext"></i> Product Details</h5>
    <a href="products/create" class="btn btn-primary"><i class="bi bi-plus-circle"></i> New Product</a>
</div>

<div class="col-md-12 table-responsive mt-3">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>M.R.P</th>
                <th>Selling Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><img src="images/1.jpeg" alt="samsung-24"
                        style="width: 50px; height: 50px; object-fit: contain;"></td>
                <td><a href="show.html">Samsung S24</a></td>
                <td>320,000/-</td>
                <td>340,000/-</td>
                <td>
                    <a href="edit.html" class="btn btn-dark btn-sm"><i class="bi bi-pencil-square"></i></a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td><img src="images/1.jpeg" alt="samsung-24"
                        style="width: 50px; height: 50px; object-fit: contain;"></td>
                <td><a href="show.html">Samsung S24</a></td>
                <td>320,000/-</td>
                <td>340,000/-</td>
                <td>
                    <a href="edit.html" class="btn btn-dark btn-sm"><i class="bi bi-pencil-square"></i></a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td><img src="images/1.jpeg" alt="samsung-24"
                        style="width: 50px; height: 50px; object-fit: contain;"></td>
                <td><a href="show.html">Samsung S24</a></td>
                <td>320,000/-</td>
                <td>340,000/-</td>
                <td>
                    <a href="edit.html" class="btn btn-dark btn-sm"><i class="bi bi-pencil-square"></i></a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
