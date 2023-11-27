@extends('layouts/app')

@section('content')
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach

    <form action="" method="POST">
        @csrf
        Taille de la dimension :<input type="text" name="size" value="{{ old('size') }}"><br>
        <button>Sauvegarder</button>
    </form>
@endsection