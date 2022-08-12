@extends('adminlte::page')

@section('title', 'Admin | CitrusPlay')

@section('content_header')
    <h1 class="font-bold text-center">CitrusPlay</h1>
    <hr class="my-4">
@stop

@section('content')
    <div class="text-center card font-bold">Bienvenido al panel de administrador
        <div class="card-body">
            Un panel de administración es muy funcional cuando se trata de aplicaciones móviles que requieren un control en el alta de los usuarios finales. En ellas no es el usuario el que se registra en la app, sino que es registrado por un responsable.
            Suele ser el caso de aplicaciones móviles dirigidas a número de usuarios limitado y reducido. A través del panel de administración de la app, un administrador se encargará de dar permisos a usuarios que lo necesiten.
        </div>

        @foreach ($usuariosArray as $usuario)
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item active">{{$usuario['title']}}</li>
                    <img class="h-10 w-10 rounded-full object-cover object-center" src="{{$usuario['url']}}">
                </ul>
            </div>
        @endforeach
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop