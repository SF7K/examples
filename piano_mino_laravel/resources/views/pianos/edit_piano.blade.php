@extends('layouts.template')

@section('content')
    <h1>Modifier le piano {{ $piano->brand }}</h1>

    <form action="{{ route('update', $piano->id) }}" method="POST" class="forms">
        @csrf
        <label for="brand">Marque</label>
        <input type="text" name="brand" value="{{ $piano->brand }}">

        <label for="keys">Nombre de touches</label>
        <input type="number" name="keys" value="{{ $piano->keys }}">

        <label for="height">Hauteur (cm)</label>
        <input type="number" name="height" value="{{ $piano->height }}">

        <label for="width">Largeur (cm)</label>
        <input type="number" name="width" value="{{ $piano->width }}">

        <label for="depth">Profondeur (cm)</label>
        <input type="number" name="depth" value="{{ $piano->depth }}">

        <label for="color">Couleur</label>
        <input type="text" name="color" value="{{ $piano->color }}">

        <input type="submit" value="Ajouter le piano">
    </form>


@endsection



