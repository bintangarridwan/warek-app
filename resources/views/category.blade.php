@extends('layouts.main')
@section('container')
    <div class="container">
        <h3 class="mt-3 mb-3 text-center">Categories</h3>
        <div class="card-deck mt-3">
            @foreach ($categories as $category)
                <div class="card">
                    <a href="#" target="_blank">
                        <img src="{{ $category->images }}" alt="img-bumbu" class="rounded-sm img-thumbnail">
                    </a>
                    <div class="card-body">
                        <h3 class="card-title text-center"><a href="#" target="_blank"">{{ $category->names }}</a></h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
