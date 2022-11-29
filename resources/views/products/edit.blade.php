@extends('layout')

@section('content')
    <div class="card">
        <div class="card-header">
            Editar Producto
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('products.update', $product->id) }}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="name">Nombre del producto :</label>
                <input required class="form-control" type="text" name="name" id="name" value={{ $product->name }} >
                </div>
                <div class="form-group">
                    <label for="description">Descripcion :</label>
                    <input class="form-control" type="text" name="description" id="description" value={{ $product->description }}>
                </div>
                <div class="form-group">
                    <label for="price">Precio :</label>
                    <input required class="form-control" type="number" name="price" id="price" value={{ $product->price }}>
                </div>
                <div class="form-group">
                    <label for="imagen">Imagen :</label>
                    {{-- <input class="form-control" type="file" name="imagen" id="imagen">
                    --}}
                    <input required class="form-control" type="text" name="image" id="image" value={{ $product->image }}>

                </div>
                <button type="submit" class="btn btn-primary"> Editar Producto</button>
            </form>
        </div>
    </div>

@endsection
