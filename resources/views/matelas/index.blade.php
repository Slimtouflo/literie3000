@extends('layouts/app')

@section('content')
    <div class="flex gap-10 mb-6">
        <h1 class="text-3xl">Nos matelas</h1>
        <a href="/matelas/creer"
            class="px-4 py-2 text-sm bg-blue-500 hover:bg-blue-300 duration-200 text-white rounded-full shadow-sm">Ajouter un matelas</a>
    </div>

    @foreach ($matelas as $lit)
        <div class="flex -mx-3 my-10 gap-10">
            <div class="w-2/5">
                <a href="/matelas/{{ $lit->id }}">
                    <img src="{{ $lit->image }}" alt="{{ $lit->name }}">
                </a>
            </div>
            <div class="w-3/5">
                <div class="text-center">
                    <a href="/matelas/{{ $lit->id }}">
                        <h1 class="text-3xl">Le matelas {{ $lit->type }}</h1>
                    </a>
                </div>
                <div>
                    <p>Marque : {{ $lit->marque }} </p>
                    <p>Type : {{ $lit->type }} </p>
                    <p>dimensions : {{ $lit->dimension }} </p>
                    @if ($lit->promo)
                        Prix : <p class="line-through">{{ $lit->prix }} € </p>
                        <p> {{ $lit->prix - $lit->promo }} € </p>
                    @else
                        <p>Prix : {{ $lit->prix }} € </p>
                    @endif
                    <div class="mx-3 mb-3 flex justify-between gap-2">
                        <a class="text-sm bg-gray-500 px-2 py-1 text-gray-200 w-1/2 text-center"
                            href="/matelas/{{ $lit->id }}/modifier">Modifier</a>
                        <a class="text-sm bg-red-500 px-2 py-1 text-gray-200 w-1/2 text-center" href="/matelas/{{ $lit->id }}/supprimer"
                            onclick='return confirm("Êtes-vous sûr de vouloir supprimer le matelas {{ $lit->type }} ?")'>Supprimer
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection