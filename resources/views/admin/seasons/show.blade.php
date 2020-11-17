@section('title', 'La collection de l’année académique 2020-2021')
@extends('layouts.app')

@section('content')
<ul>
    {{-- LOOP sur season->books --}}
    <li>
        {{-- TODO link modify book --}}
        <articles>
            <h2>Titre du livre $book->title</h2>
            <img src="#" alt="Couverture du livre ...">
            <form action="/books/id" method="post">
                @method('delete')
                @csrf
                <button>Supprimer le livre <span class="sr-only">Titre du livre</span></button>
            </form>
            <a href="/books/1">
                <dl>
                    <dt>ISBN</dt>
                    <dd></dd>
                    <dt>Autheur</dt>
                    <dd></dd>
                    <dt>Prix public</dt>
                    <dd></dd>
                    <dt>Prix</dt>
                    <dd></dd>
                </dl>
            </a>
        </articles>

    </li>
</ul>
<a href="{{route('books.create')}}">Ajouter un livre</a>
@endsection
