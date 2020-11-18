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
        @foreach($books as $book)
        <tr>
            <td><img src="{{ $book->file_name?asset('/storage/'.$book->model_id . '/' .$book->file_name): '/storage/default-media.jpg' }}" alt="Couverture du livre {{$book->title}}"></td>
            <td>{{$book->title}}</td>
            <td>{{$book->stock}}</td>
            {{-- <td>{{$book->number_of_orders}}</td> --}}
            {{-- <td>@formatPrice($book->current_price)</td> --}}
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
