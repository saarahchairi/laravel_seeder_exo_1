@extends('layout.index')

@section('content')
    <table>
        <tr>
            <th>Prenom</th>
            <th>Age</th>
            <th>E-mail</th>
            <th>Téléphone</th>
        </tr>
        @foreach ($allPersonnage as $item)
            <tr>
                <td>{{$item->prenom}}</td>
                <td>{{$item->age}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->telephone}}</td>
                <td>
                    <a href="/editPersonnage/{{$item->id}}">
                        <button type="submit">Edit</button>
                    </a>
                </td>
                <td>
                    <form action="/personnage/{{$item->id}}/delete" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <form action="/personnage/supr" method="POST">
        @csrf
        <button type="submit">Delete ALL</button>
    </form>
@endsection
