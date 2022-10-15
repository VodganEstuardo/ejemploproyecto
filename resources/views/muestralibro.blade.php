@extends('layouts.plantilla')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EDITAR LIBRO') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Ingrese Nuevos Datos') }}
                    {{ session('status') }}

                    <form action="{{route('editarlibro', $libros->id)}}" method="POST">
                        @csrf

                        <label>
                            Nombre: <br>
                            <input name="nombre" type="text" value="{{$libros->nombre}}">
                        </label>
                        <label>
                            Genero: <br>
                            <input name="genero" type="text" value="{{$libros->genero}}">
                        </label>
                        <label>
                            Editorial: <br>
                            <input name="editorial" type="text" value="{{$libros->editorial}}">
                        </label>
                        <button type="submit">Guardar Cambios</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection