@extends("layouts.app")
@section('main')
<h5><i class="bi bi-archive-fill"></i> Product Details</h5>
<hr>
<nav class="my-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Product Details</li>
    </ol>
</nav>

<div class="card">
    <img src="images/1.jpeg" alt="samsung-s24" class="card-img-top">
    <div class="crad-body">
        <h5 class="card-title fw-bold">Samsung S24</h5>
        <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis commodi
            repellendus
            reiciendis impedit non ullam!</p>
        <p class="fw-semibold">M.R.P <small class="text-danger text-decoration-line-through">Rs.
                320,000/-</small></p>
        <p class="fw-semibold">Selling Price <small class="text-success">Rs. 340,000/-</small></p>
    </div>
</div>
@endsection