@extends('layouts/app')

@section('content')
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach

    <form action="" method="POST">
        @csrf
        Nom de la marque :<input type="text" name="name" value="{{ old('name') }}"><br>
        <button>Sauvegarder</button>
    </form>
@endsection