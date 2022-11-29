@extends('layout')

@section('content')
    <div class="card">
        <div class="card-header">
            Agregar Producto
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
            <form method="post" action="{{ route('products.store') }}">
              @csrf
                <div class="form-group">
                    <label for="name">Nombre del producto :</label>
                    <input required class="form-control" type="text" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="description">Descripcion :</label>
                    <input class="form-control" type="text" name="description" id="description">
                </div>
                <div class="form-group">
                    <label for="price">Precio :</label>
                    <input required class="form-control" type="number" name="price" id="price">
                </div>
                <div class="form-group">
                    <label for="imagen">Imagen :</label>
                    {{-- <input class="form-control" type="file" name="imagen" id="imagen"> --}}
                    <input required class="form-control" type="text" name="image" id="image">

                </div>
                <button type="submit" class="btn btn-primary"> Agregar Producto</button>
            </form>
        </div>
    </div>

@endsection
