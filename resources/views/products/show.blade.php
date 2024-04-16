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
    <img src="/products/{{$product->image}}" alt="{{$product->name}}" class="card-img-top">
    <div class="crad-body">
        <h5 class="card-title fw-bold">{{$product->name}}</h5>
        <p class="text-secondary">{{$product->description}}</p>
        <p class="fw-semibold">M.R.P <small class="text-danger text-decoration-line-through">Rs.
            {{$product->mrp}}</small></p>
        <p class="fw-semibold">Selling Price <small class="text-success">{{$product->price}}</small></p>
    </div>
</div>
@endsection