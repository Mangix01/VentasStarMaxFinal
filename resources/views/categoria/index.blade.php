@extends('layouts.app')

@section('title','Categorías')

@section('content')
@if (session('success'))
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    });
    Toast.fire({
        icon: "success",
        title: "Categoría Creada Exitosamente"
    });
</script>
@endif


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
                                        <a href="{{ route('categorias.edit', $cat->id) }}" class="text-dark text-decoration-none">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </button>

                                    <!-- Separador Vertical -->
                                    <div class="vr"></div>

                                    <!-- Botón para activar modal de Eliminacion y Restauracion -->
                                    <button type="button" class="btn btn-light btn-sm border-0" data-toggle="modal" data-target="#confirmModal-{{ $cat->id }}" title="{{ $cat->estado == 1 ? 'Eliminar' : 'Restaurar' }}">
                                        @if ($cat->estado == 1)
                                            <i class="far fa-trash-can text-danger"></i>
                                        @else
                                            <i class="fas fa-rotate text-success"></i>
                                        @endif
                                    </button>

                                </div>
                            </td>
                        </tr>

                        <!-- Modal de Confirmación para cada categoría -->
                        <div class="modal fade" id="confirmModal-{{ $cat->id }}" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel-{{ $cat->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="confirmModalLabel-{{ $cat->id }}">
                                            {{ $cat->estado == 1 ? 'Confirmar Eliminación' : 'Confirmar Restauración' }}
                                        </h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        @if ($cat->estado == 1)
                                            ¿Estás seguro que deseas eliminar la categoría <strong>{{ $cat->categoria }}</strong>?
                                        @else
                                            ¿Estás seguro que deseas restaurar la categoría <strong>{{ $cat->categoria }}</strong>?
                                        @endif
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                        <form action="{{ route('categorias.destroy', $cat->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn {{ $cat->estado == 1 ? 'btn-danger' : 'btn-success' }}">
                                                {{ $cat->estado == 1 ? 'Sí, eliminar' : 'Sí, restaurar' }}
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection