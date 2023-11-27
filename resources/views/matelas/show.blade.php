@extends('layouts.app')

@section('content')
    <a href="/matelas" class="text-gray-500">Retour aux vers les matelas</a>
    <div class="flex -mx-3 my-10 gap-10">
        <div class="w-2/5">
            <img src="{{ $matelas->image }}" alt="{{ $matelas->name }}">
        </div>
        <div class="w-3/5">
            <div class="text-center">
                <h1 class="text-3xl">Le matelas {{ $matelas->type }}</h1>
            </div>
            <div>
                <p>Marque : {{ $matelas->marque }} </p>
                <p>Type : {{ $matelas->type }} </p>
                <p>dimensions : {{ $matelas->dimension }} </p>
                <p>Prix : {{ $matelas->prix }} </p>
            </div>
        </div>
    </div>
@endsection
