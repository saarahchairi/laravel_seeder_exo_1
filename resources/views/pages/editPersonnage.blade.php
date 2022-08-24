@extends('layout.index')

@section('content')
    <form action="/editPersonnage/{{$id_show->id}}/update" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="prenom" value="{{$id_show->prenom}}">
        <input type="number" name="age" value="{{$id_show->age}}">
        <input type="email" name="email" value="{{$id_show->email}}">
        <input type="number" name="telephone" value="{{$id_show->telephone}}">
        <input type="submit" value="Update">
    </form>
@endsection
