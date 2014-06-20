@extends('layout')

@section('content')

<div class="container">
    <h1>{{ $categoria->nombre }}</h1>
    <table>
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Tipo</td>
                <td>Descripcion</td>
                <td>Ver</td>
            </tr>
        </thead>
        <tbody>
            @foreach($candidatos as $candidato)
            <tr>
                <td>{{ $candidato->user->nombre_completo }}</td>
                <td>{{ $candidato->tipo_trabajo }}</td>
                <td>{{ $candidato->descripcion }}</td>
                <td width="50">
                    <a class="btn btn-info" href="{{ route('candidato', [$candidato->slug, $candidato->id]) }}">Ver</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@stop