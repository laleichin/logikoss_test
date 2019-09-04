@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin</div>
                <div class="card-body">
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Username</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                    
                    @foreach ($data as $row)
                    <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->username }}</td>
                    <td>
                        <form action="{{ route('HomeController.destroy', $row->id) }}" method="post">
                            <a href="{{ route('HomeController.show', $row->id) }}" class="btn btn-primary">Ver</a>
                            <a href="{{ route('HomeController.edit', $row->id) }}" class="btn btn-warning">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                    </tr>
                    @endforeach
                   
                    </tbody>
                </table>
                </div>
            </div>
             
        </div>
    </div>
</div>
@endsection
