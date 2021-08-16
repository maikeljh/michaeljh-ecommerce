@extends('template.user')

@section('title')
    Shop
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('css/shop.css')}}">
@endsection

@section('content')
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="search">
          <h2 id="category-label" class="text-center mt-5">Search Product</h2>
          <form action="" class="form-inline ml-5">
            <input type="text" class="form-control" name="search" style="margin-right: 1em; border : 3px solid;">
            <button class="btn btn-primary">Search</button>
          </form>
        </div>
        <div class="category">
          <h2 id="category-label">Categories</h2>
          <ul class="list-group">
            <li class="list-group-item" style="border : 1px solid"><a href="/shop">All</a></li>
            @foreach ($categories as $category)
                <li class='list-group-item {{$category->id == $id ? 'active' : ''}}' style="border : 1px solid"><a href="/shop/category/{{$category->id}}">{{$category->name}}</a></li>
            @endforeach
          </ul>
        </div>
      </div>
        <div class="col-lg-8 mb-5">
          <div class="item-list">
          <h2>Our Products</h2>
          <hr style="margin-bottom: 2em;">
          <div class="row list-product">
            @foreach ($products as $product)
              <div class="col-lg-4 item mb-5">
                <a href="/shop/detail/{{$product->id}}">
                <img src="{{asset($product->image)}}" alt="nopic" height="180" width="180">
                </a>
                <p class="product-name mt-3 font-weight-bold"><a href="">{{$product->name}}</a></p>
                <p class="product-price">IDR {{number_format($product->price)}}</p>
              </div>
            @endforeach
          </div>
        </div>
        {{$products->links()}}
      </div>
    </div>
  </div>
  <!-- Pagination Link -->
</div>
<footer class="footer-distributed">
  <div class="footer-right">
    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="https://www.linkedin.com/in/michael-jonathan-halim-a33348142/" target=”_blank”><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-gitlab"></i></a>
  </div>
  <div class="footer-left">
    <p class="footer-links">
      <a class="link-1" href="/">HOME</a>
      <a href="/shop">SHOP</a>
    </p>
    <p>Michael Jonathan &copy; 2021</p>
  </div>

  </footer>
@endsection

@section('script')
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
@endsection

