@extends('layouts/app')

@section('content')
    <h1>Nos dimensions de matelas :</h1>
    <a href="/dimensions/creer">Ajouter une dimension</a>

    <div>
        @foreach ($dimensions as $dimension)
            <div>
                <h2>{{ $dimension->size }}</h2>
            </div>
            <a class="text-sm bg-red-500 px-2 py-1 text-gray-200 w-1/2 text-center" href="/dimensions/{{ $dimension->id }}/supprimer"
                onclick='return confirm("Êtes-vous sûr de vouloir supprimer la dimension {{ $dimension->size }} ?")'>Supprimer
            </a>
        @endforeach
    </div>
@endsection