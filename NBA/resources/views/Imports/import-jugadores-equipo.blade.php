@extends('layouts.app')

@section('titulo', 'Importar Jugador-Equipo')

@section('content')
<br>
<div class="content-wrapper" style="background-color: #FFF;">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="/" class="btn btn-danger">
                    <i class="fa-solid fa-house"></i>
                    home
                </a>
            </div>
            <div class="card-body">
                <h3>Ingrese Excel De Los Jugador-Equipos</h3>
                <hr>
                <form method="post" enctype="multipart/form-data" action="{{ route("import-jugadores-equipos") }}">
                    @csrf
                    <div class="row">
                        <label>SELECT FILE</label>
                        <input type="file" class="form-control" name="documento">
                    </div><br>
                    <hr>
                    <button class="btn btn-success">ENVIAR</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
