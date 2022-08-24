@extends('layout.index')

@section('content')
    <form action="/newPersonnage/create" method="POST">
        @csrf
        <input type="text" name="prenom" placeholder="Prénom du perso">
        <input type="number" name="age" placeholder="Âge du perso">
        <input type="email" name="email" placeholder="E-mail du perso">
        <input type="number" name="telephone" placeholder="Téléphone du perso">
        <input type="submit" value="Créer">
    </form>
@endsection
