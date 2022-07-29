@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('mascotas.update', $mascota) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre_mascota" name="nombre_mascota" value="{{ $mascota->nombre_mascota }}">
              
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Raza</label>
              <input type="text" class="form-control" id="raza" name="raza" value="{{ $mascota->raza }}">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">edad</label>
                <input type="number" class="form-control" id="edad" name="edad" value="{{ $mascota->edad }}">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Precio</label>
                <input type="text" class="form-control" id="precio" name="precio" value="{{ $mascota->precio }}">
              </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection