@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
 
  
    @foreach ($data['products'] as $product)
    
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>{{ $product->name }}</h3>
        <p>{{ $product->introduct }}</p>
        <a class="btn btn-primary" href="{{ route('cart.add',$product->id) }}">加入購物車
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
    <hr>
    @endforeach
    

    <!-- Pagination -->
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">1</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">3</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>

  </div>
  <!-- /.container -->
  @endsection
