@section('title', 'Liste des collections')
@extends('layouts.app')

@section('content')
<table>
    <thead>
        <tr>
            <th>img</th>
            <th>Titre</th>
            <th>Stock</th>
            <th>Nombre de commandes</th>
            <th>Prix</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><img src="#" alt="Couverture du livre Titre du livre"></td>
            <td>Titre</td>
            <td>5</td>
            <td>6</td>
            <td>@formatPrice(16)</td>
        </tr>
    </tbody>
</table>
@endsection
