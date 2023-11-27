@extends('layouts.app')

@section('content')
    <a href="/matelas" class="text-gray-500">Retour vers la liste des matelas</a>
    <h1 class="text-3xl mb-3">Ajouter un matelas</h1>

    @foreach ($errors->all() as $error)
        <p class="text-red-500">{{ $error }}</p>
    @endforeach

    <form action="" method="post">
        @csrf

        <div class="mb-3">
            <label for="marque" class="block">Marque : </label>
            <select name="marque" id="marque" class="rounded shadow border-gray-300 w-full">
                @foreach ($marques as $marque)
                    <option @selected($marque->id == old('marque')) value="{{ $marque->id }}">{{ $marque->name }}</option>
                @endforeach
            </select>
            @error('marque')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="block">Type : </label>
            <input type="text" name="type" id="type" class="rounded shadow border-gray-300 w-full">{{ old('type') }}
            @error('type')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="dimension" class="block">Dimensions : </label>
            <select name="dimension" id="dimension" class="rounded shadow border-gray-300 w-full">
                @foreach ($dimensions as $dimension)
                    <option @selected($dimension->id == old('dimension')) value="{{ $dimension->id }}">{{ $dimension->size }}</option>
                @endforeach
            </select>
            @error('dimension')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="prix" class="block">Prix : </label>
            <input type="integer" name="prix" id="prix" class="rounded shadow border-gray-300 w-full">{{ old('prix') }}
            @error('prix')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="promo" class="block">Promo : </label>
            <input type="integer" name="promo" id="promo" class="rounded shadow border-gray-300 w-full">{{ old('promo') }}
            @error('promo')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="block">Image : </label>
            <input type="text" name="image" id="image" class="rounded shadow border-gray-300 w-full">{{ old('image') }}
            @error('image')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <button class="px-4 py-2 text-sm bg-blue-500 hover:bg-blue-300 duration-200 text-white rounded-full shadow-sm">Ajouter</button>
    </form>
@endsection