@extends('layout')

@section('content')

@if(session()->get('success'))
  <div class="alert alert-success">
  {{  session()->get('success') }}
  </div>
@endif

<h2>Lista de Productos</h2>
<div class="container mt-4">
    <div class="row">

        @foreach($products as $product)
          @include('products.show')
          {{-- {{ $product }} --}}
            {{-- @each('products.show', $products, 'product') --}}
         @endforeach
    </div>
</div>
@endsection
