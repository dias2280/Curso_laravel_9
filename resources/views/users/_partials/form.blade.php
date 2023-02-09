@csrf
<input type="text" name='name' placeholder="Nome" value="{{ $user->name ?? old('name')}}" > 
<input type="email" name="email" id="" placeholder="email" value="{{$user->email ?? old('name')}}">
<input type="password" name='password' placeholder="senha">
<button type="submit">
    Enviar
</button>