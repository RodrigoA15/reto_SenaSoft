@extends('layouts.app')

@section('content')
    <div class="container">
      <form action="">
        <input type="text" name="buscar">
        <div class="btn-group">
          <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
      </form>
      <button class="btn btn-primary" onclick="location.href='{{ route('mascotas.create') }}'">Nueva Mascota</button>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Raza</th>
                <th scope="col">Categoria</th>
                
                <th scope="col">Edad</th>
                <th scope="col">Precio</th>
                <th scope="col">Fotografia</th>
                <th scope="col">Genero</th>



                <th scope="col">Acciones</th>


              </tr>
            </thead>
            <tbody>
             @foreach ($mascota as $mascotas)
             <tr>
                <th scope="row">{{ $mascotas->id }}</th>
                <td>{{ $mascotas->nombre_mascota }}</td>
                <td>{{ $mascotas->raza }}</td>
                <td>{{ $mascotas->id_categoria}}</td>
                <td>{{ $mascotas->edad }}</td>
                <td>{{ $mascotas->precio }}</td>
                <td>{{ $mascotas->fotografia }}</td>
                <td>{{ $mascotas->id_genero }}</td>


                <td>
                    <a href="{{ route('mascotas.edit', $mascotas) }}" class="btn btn-warning">Editar</a>
                   <form action="{{ route('mascotas.destroy', $mascotas) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Eliminar</button>
                   </form>
                </td>

                
              </tr>
             @endforeach
            
            </tbody>
          </table>
          <div class="d-flex justify-content-center">
            {{ $mascota->links() }}
          </div>
    </div>
@endsection