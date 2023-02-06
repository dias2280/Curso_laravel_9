
@extends('layouts.app')

@section('content')
<h1>listagem dos usuarios</h1>

@foreach ($users as $user)

<ul>
    <li>
        {{ $user->name}} - 
        {{ $user->email}} 
        <a href="{{ route('users.show',  $user) }}"> Detalhes</a>
    </li>
</ul>

@endforeach
@endsection