@extends('templates.home')

@section('title', 'Página inicial')

@section('content')
    @if (empty($userName))
        <h1>Bem-vindo ao meu site amigo</h1>
    @else
        <h1>Bem-vindo ao meu site {{ $userName }}</h1>
    @endif
@endsection
