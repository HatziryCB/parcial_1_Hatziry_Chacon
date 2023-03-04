@extends('layout')

@section('title', 'Pagina 1')

@section('sidebar')
    <p>Nombre: Hatziry Nayaly Chacón Berreondo</p>
    <p>Carné: 0909-21-14813</p>

    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
@endsection

@section('content')
    <a href="{{route('home')}}">Home</a>
    <a href="{{route('pagina2')}}">Página 2</a>
@endsection
