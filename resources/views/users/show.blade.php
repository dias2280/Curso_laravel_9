@extends('layouts.app')

@section('content')
<h1>Listagem do Usuario {{ $user->name }}</h1>
<ul>
    <li>{{ $user->name}}</li>
    <li>{{ $user->email}}</li>
    <li>{{ $user->create_at}}</li>
</ul>
@endsection