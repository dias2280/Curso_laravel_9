@extends('layouts.app')

@section('title', "Novo comentario {$user->id}")

@section('content')
<h1 class="text-2xl font-semibold leading-tigh py-2">Novo Comentario {{ $user->name }}</h1>

@include('includes.validations-form')

<form action="{{ route('users.comments.store',$user->id) }}" method="post">
    @include('users.comments._partials.form')
</form>

@endsection