@extends('layout')

@section('content')

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>HireMe</h1>
        <p>
            Proyecto que estamos construyendo con Laravel para el curso profesional
            de PHP y Laravel de Mejorando.la:
            <a href="https://mejorando.la/cursos/php-laravel">
                https://mejorando.la/cursos/php-laravel
            </a>
        </p>
        <p><a href="{{ route('registrar') }}" class="btn btn-primary btn-lg" role="button">Postúlate &raquo;</a></p>
    </div>
</div>

<div class="container">
    <h1>Últimos candidatos</h1>

    @foreach ($ultimos_candidatos as $categoria)
    <h2>{{ $categoria->nombre }}</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Tipo de trabajo</th>
                <th>Descripción</th>
                <th>Ver</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categoria->candidatos as $candidato)
            <tr>
                <td>{{ $candidato->user->nombre_completo }}</td>
                <td>{{ $candidato->tipo_trabajo_titulo }}</td>
                <td>{{ $candidato->descripcion }}</td>
                <td width="50">
                    <a class="btn btn-info" href="{{ route('candidato', [$candidato->slug, $candidato->id]) }}">Ver</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <p>
        <a href="{{ route('categoria',[$categoria->slug,$categoria->id]) }}">Ver todos en {{ $categoria->nombre }}</a>
    </p>
    @endforeach
</div>

@stop