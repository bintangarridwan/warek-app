@extends('layouts.main')
@section('container')
    <div class="container">
        <h3 class="mt-3 mb-3 text-center">Menu</h3>
        <div class="card-deck mt-3">
          <div class="card">
            <a href="#" target="_blank">
              <img src="/assets/bumbu.jpg" alt="img-bumbu" class="rounded-sm img-thumbnail">
            </a>
            <div class="card-body">
              <h3 class="card-title text-center"><a href="#" target="_blank"">Bumbu</a></h3>
            </div>
          </div>
          <div class="card">
            <a href="#" target="_blank">
              <img src="/assets/sayuran.png" alt="img-bumbu" class="rounded-sm img-thumbnail">
            </a>
            <div class="card-body">
              <h3 class="card-title text-center"><a href="#" target="_blank"">Sayuran</a></h3>
            </div>
          </div>
          <div class="card">
            <a href="#" target="_blank">
              <img src="/assets/sembako.jpg" alt="img-bumbu" class="rounded-sm img-thumbnail">
            </a>
            <div class="card-body">
              <h3 class="card-title text-center"><a href="#" target="_blank"">Sembako</a></h3>
            </div>
          </div>
          <div class="card">
            <a href="#" target="_blank">
              <img src="/assets/snack.jpg" alt="img-bumbu" class="rounded-sm img-thumbnail">
            </a>
            <div class="card-body">
              <h3 class="card-title text-center"><a href="#" target="_blank"">Snack</a></h3>
            </div>
          </div>
        </div>
    </div>
@endsection
