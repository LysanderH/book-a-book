@section('title', 'Vos commandes')
@extends('layouts.app')

@section('content')
{{-- TODO list all orders from student --}}
<section class="order" aria-label="Liste des commandes">
    <h2 class="order__heading" role="heading" aria-level="2">La commande numéro {{$order->id}}</h2>
    <span class="order__status"></span>
    <ul class="order__list">
        {{-- @dd($order) --}}
        {{-- TODO loop order->books --}}

        @foreach($order->books as $key => $book)
        <li class="order__item">
            <article class="book">
                <h3 class="book__heading">{{ $book->title }}</h3>
                <img src="{{ $book->getFirstMediaUrl('books')?$book->getFirstMediaUrl('books'): '/storage/default-media.jpg' }}" alt="Cover du livre {{ $book->title }}">

                <dl class="books__data-list">
                    <dt class="books__therm">Autheur&nbsp;:</dt>
                    <dd class="books__definition">{{$book->author}}</dd>
                    <dt class="books__therm">ISBN&nbsp;:</dt>
                    <dd class="books__definition">{{$book->isbn}}</dd>
                    <dt class="books__therm">Prix public&nbsp;:</dt>
                    <dd class="books__definition">{{ (int) $book->seasons->last()->pivot->public_price === 0 ? 'Pas de prix public trouvé' : $book->seasons->last()->pivot->public_price.'€'}}</dd>

                    <dt class="books__therm sr-only">Prix&nbsp;:</dt>
                    <dd class="books__definition">{{$book->seasons->last()->pivot->price}}€</dd>
                </dl>
            </article>
        </li>
        @endforeach
    </ul>
    <span class="order__total">Total : {{}}</span>
</section>
@endsection
