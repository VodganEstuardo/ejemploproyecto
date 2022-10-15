@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center> <b> Registros De Libros </b> </center> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('REGISTRO DE NUEVO LIBRO') }}
                    {{ session('status') }}

                    <form action="{{route('guardarlibro')}}" method="POST">
                        @csrf
                        <label>
                            Nombre: <br>
                            <input name="nombre" type="text">
                        </label>
                        <label>
                            Genero: <br>
                            <input name="genero" type="text">
                        </label>
                        <label>
                            Editorial: <br>
                            <input name="editorial" type="text">
                        </label>
                        <button type="submit">Guardar</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection