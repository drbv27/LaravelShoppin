{{-- @extends('layout')

@section('content') --}}


    <div class="col-md-4 col-sm-6 mb-4">
        <div className="card h-100">
        <a href="/products/{{ $product->id }}">
                <img className="card-img" src={{ $product->image }} />
            </a>
            <div className="card-body">
                <h4 className="card-tittle">
                    <a href="/products/{{ $product->id }}">{{ $product->name }}</a>
                </h4>
                <h5>${{ $product->price }}</h5>
                <p className="card-text">{{ $product->description }}</p>
            </div>
        </div>
        <form method="post" action="{{ route('products.destroy', $product->id) }}">
          @csrf
          @method('DELETE')
          <input type="submit" value="Borrar Producto">
        </form>
    </div>

{{-- @endsection --}}
