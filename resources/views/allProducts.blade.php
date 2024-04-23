@extends('layouts.main')
    @section('title', 'Todos os jogos')
    
    
    @section('content')

    @foreach  ($Fotos as $Imagem)
    {{$produto->Categoria->count()}}

    @endforeach
    @endsection