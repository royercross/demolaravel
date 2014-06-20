@extends('layout')

@section('content')

<div class="container">
    <h1>{{ $candidato->user->nombre_completo }}</h1>
    <p>
        Categoria:
        <a href="{{ route('categoria', [$candidato->categoria->slug, $candidato->categoria->id]) }}">
            {{ $candidato->categoria->nombre }}
        </a>
    </p>
    
    <p>Tipo de trabajo: {{ $candidato->tipo_trabajo_titulo }}</p>
    
    <p>
        Website:
        <a href="{{ $candidato->pagina_web }}">{{ $candidato->pagina_web }}</a>
    </p>

</div>

@stop