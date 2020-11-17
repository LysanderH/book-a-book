@section('title', 'Liste des collections')
@extends('layouts.app')

@section('content')
{{-- TODO add links --}}
<table>
    <thead>
        <tr>
            <th>Année académique</th>
            <th>Livres</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="seasons/2">2020-2021</a></td>
            <td>16</td>
        </tr>
    </tbody>
</table>
{{-- TODO add pagination --}}

<a href="{{route('seasons.create')}}">Ajouter une nouvelle collection</a>
@endsection
