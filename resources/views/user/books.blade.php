@extends('layouts.app')
@section('title', 'Choix des livres')
@section('content')

{{-- TODO loop on bac --}}
<form action="/books">

    <fieldset class="bac" aria-label="Bac 1">
        <legend class="bac__heading">Bac 1</legend>

        {{-- TODO loop on BAC->books --}}
        <ul class="books__list">
            <li class="books__item">
                <article class="books__book">
                    <h3 role="heading" aria-level="3">Ergonomie web</h3>
                    <dl class="books__data-list">
                        <dt class="books__therm">Autheur&nbsp;:</dt>
                        <dd class="books__definition">Amélie Bouché</dd>
                        <dt class="books__therm">ISBN&nbsp;:</dt>
                        <dd class="books__definition">978-2212132151</dd>
                        <dt class="books__therm">Prix public&nbsp;:</dt>
                        <dd class="books__definition">34,14€</dd>
                        <dt class="books__therm sr-only">Prix&nbsp;:</dt>
                        <dd class="books__definition">30€</dd>
                    </dl>
                </article>
            </li>
        </ul>
        <label for="book-id">Ajouter le livre {{-- TODO book title --}} à ma commande</label>
        <input type="checkbox" id="book-id" value="book-isbn">
    </fieldset>
    <button type="submit" class="books__submit btn">Continuer</button>
</form>

@endsection
