@extends('layouts.app')

@section('title', 'Criação de novo usuario');

@section('content')

<h1>Novo usuario</h1>

@if ($errors->any())
    <ul class="errors">
        @foreach($errors->all() as $error)
        <li class="error">{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{route('users.store')}}" method="post">
    @csrf
<input type="text" name='name' placeholder="Nome" value="{{old('name')}}">
<input type="email" name="email" id="" placeholder="email" value="{{old('email')}}">
<input type="password" name='password' placeholder="senha">
<button type="submit">
    Enviar
</button>
</form>
@endsection