@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('mascotas.store') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre_mascota" name="nombre_mascota">
              
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Raza</label>
              <input type="text" class="form-control" id="raza" name="raza">
            </div>
            <div class="mb-3">
              Categoria
              <select name="id_categoria" id="id_categoria" class="form-control">
                <option value="">Seleccione una categoria</option>
                @foreach ($categoria as $item)
                    <option value="{{ $item->id }}">{{ $item->nombre_categoria }}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">edad</label>
                <input type="number" class="form-control" id="edad" name="edad">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Precio</label>
                <input type="text" class="form-control" id="precio" name="precio">
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">fotografia</label>
                <input type="text" class="form-control" id="fotografia" name="fotografia">
              </div>

              <div class="mb-3">
                Categoria
                <select name="id_genero" id="id_genero" class="form-control">
                  <option value="">Seleccione una categoria</option>
                  @foreach ($genero as $generos)
                      <option value="{{ $generos->id }}">{{ $generos->nombre_genero }}</option>
                  @endforeach
                </select>
              </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection