@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
 
  <!-- Page Content -->
  <div class="container">

  
    <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">單價</th>
      <th scope="col">數量</th>
      <th scope="col">小計</th>
      <th scope="col">動作</th>
    </tr>
  </thead>
  <tbody>
@if(session()->has('cart'))
  @foreach ($data['carts'] as $cart )
    <tr>
      <th scope="row">{{ $cart['id'] }}</th>
      <td>{{ $cart['name'] }}</td>
      <td>{{ $cart['amount'] }}</td>
      <td>
      {{ $cart['qty'] }}
      </td>
      <td>{{ $cart['qty']*$cart['amount'] }}</td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic example">
        <a  href="{{ route('one.add',$cart['id']) }}">
            <button type="button" class="btn btn-success">+</button>
        </a>
        <a  href="{{ route('one.reduce',$cart['id']) }}">
        <button type="button" class="btn btn-primary">-</button>
        </a>    
        <a  href="{{ route('one.delete',$cart['id']) }}">   
            <button type="button" class="btn btn-danger">刪除</button>
            </a>
        </div>
        </td>
    </tr>
    @endforeach
    @else
    沒有商品
    @endif
  </tbody>
</table>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Two -->
    <div class="row">
      <div class="col-md-8">
        
      </div>
      <div class="col-md-4">
        <h3>總計：{{ $data['totalPrice'] }}</h3>
        
        <a class="btn btn-primary" href="#">前往結帳
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
        <a class="btn btn-primary" href="/">繼續購物
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
        <a class="btn btn-danger" href="/car/destroy">清空購物車
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
    <!-- /.row -->

    <hr>


  </div>
  <!-- /.container -->
  @endsection
