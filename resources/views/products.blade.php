@extends('layouts.main')
@section('container')
<div class="container mt-3 p-2">
    <div class="card mw-fit-content mb-3">
        <div class="row no-gutters">
            @foreach ($products as $product)
            <div class="col-md-3">
                <img class="img-thumbnail" src="{{ $product->p_images }}" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->p_name }}</h5>
                    <p class="card-text"><a href="#">{{ $product->p_category }}</a></p>
                    <p class="card-text">{{ $product->p_details }}</p>
                    <p class="card-text">{{ $product->p_price }}</p>
                </div>
            </div>    
            @endforeach
        </div>
    </div>
</div>
@endsection