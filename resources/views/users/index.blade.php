
@extends('layouts.app')

@section('title', 'Listagem dos Usuarios')

@section('content')
<h1>listagem dos usuarios
    <a href="{{ route('users.create')}}">+</a>
</h1>

<form action="{{ route('users.index')}}" method="get">
    <input type="text" name="search" placeholder="Pesquisar">
    <button>Pesquisar</button>
</form>
<ul>
    @foreach($users as $user)
    <li>
        {{ $user->name}} - 
        {{ $user->email}} 
        <a href="{{ route('users.show',  $user) }}"> Detalhes</a>
        <a href="{{ route('users.edit',  $user) }}"> Editar</a>
    </li>
</ul>
    @endforeach

@endsection