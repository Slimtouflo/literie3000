@extends('layouts/app')

@section('content')
    <h1>Nos marques de matelas :</h1>
    <a href="/marques/creer">Ajouter une marque</a>

    <div>
        @foreach ($marques as $marque)
            <div>
                <h2>{{ $marque->name }}</h2>
            </div>
            <a class="text-sm bg-red-500 px-2 py-1 text-gray-200 w-1/2 text-center" href="/marques/{{ $marque->id }}/supprimer"
                onclick='return confirm("Êtes-vous sûr de vouloir supprimer la marque {{ $marque->name }} ?")'>Supprimer
            </a>
        @endforeach
    </div>
@endsection