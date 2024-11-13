@extends('layouts.app')

@section('title','Editar Categoría')

<style>
    #descripcion {
        resize: none;
    }
</style>

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Editar Categoría</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('categorias.index') }}">Categorías</a></li>
        <li class="breadcrumb-item active">Editar Categoría -> {{ $categoria->categoria }}</li>
    </ol>
</div>

<div class="card text-bg-light">
        <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
        @method('PATCH')
        @csrf
            <div class="card-body">
                <div class="row g-4">

                    <div class="col-md-6">
                        <label for="nombre" class="form-label">Nombre de Categoría:</label>
                        <input type="text" 
                                name="categoria" 
                                id="categoria"
                                class="form-control 
                                        @error('categoria') is-invalid 
                                        @else 
                                            @if(old('categoria')) is-valid @endif 
                                        @enderror"
                                value="{{ old('categoria', $categoria->categoria) }}"
                                placeholder="Edite el nombre de la categoría">
                        
                        @error('categoria')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <br>
                        <label for="descripcion" class="form-label">Descripción:</label>
                        <textarea 
                            name="descripcion" 
                            id="descripcion" 
                            rows="9" 
                            class="form-control 
                                    @error('descripcion') is-invalid 
                                    @else 
                                        @if(old('descripcion')) is-valid @endif 
                                    @enderror"
                            placeholder="Edite la descripción de la categoría">{{ old('descripcion', $categoria->descripcion) }}</textarea>
                        
                        @error('descripcion')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                </div>
            </div>

            <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>

@endsection