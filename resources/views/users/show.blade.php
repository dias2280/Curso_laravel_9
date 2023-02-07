@extends('layouts.app')

@section('content')
<h1>Listagem do Usuario {{ $user->name }}</h1>
<ul>
    <li>{{ $user->name}}</li>
    <li>{{ $user->email}}</li>
</ul>

<form action="{{ route('users.delete', $user->id) }}" method="POST">
    @method('DELETE')
    @csrf
<button type="submit">Deletar</button>
</form>

@endsection