@extends('layouts.app')

@section('title','Categorías')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Listado de Categorías</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
        <li class="breadcrumb-item active">Categorías</li>
    </ol>

    <div class="mb-4">
        <a href="{{ route('categorias.create') }}" class="btn btn-primary">
            Añadir nuevo registro
        </a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabla de Categorías</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($categoria as $cat)
                        <tr>
                            <td>{{ $cat->id }}</td>
                            <td>{{ $cat->categoria }}</td>
                            <td>{{ $cat->descripcion }}</td>
                            <td>
                                @if ($cat->estado == 1)
                                    <span class="badge bg-success text-white rounded-pill px-3 py-2 border border-2 border-dark">
                                        Activo
                                    </span>
                                @else
                                    <span class="badge bg-danger text-white rounded-pill px-3 py-2 border border-2 border-dark">
                                        Eliminado
                                    </span>
                                @endif
                            </td>

                            <td>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <!-- Boton de Editar -->
                                    <button type="button" class="btn btn-light btn-sm border-0" title="Editar">
                                        <a href="{{ route('categorias.edit', ['categoria' => $cat->id]) }}" class="text-dark text-decoration-none">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </button>

                                    <!-- Separador Vertical -->
                                    <div class="vr"></div>

                                    <!-- Botón Eliminar/Restaurar -->
                                    @if ($cat->estado == 1)
                                        <form action="{{ route('categorias.destroy', $cat->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-light btn-sm border-0" title="Eliminar">
                                                <i class="far fa-trash-can text-danger"></i>
                                            </button>
                                        </form>
                                    @else
                                        <form action="{{ route('categorias.destroy', $cat->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-light btn-sm border-0" title="Restaurar">
                                                <i class="fas fa-rotate text-success"></i>
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </td>
                        </tr>


                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection