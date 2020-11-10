@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

<!-- TODO display if user hasn't submitted his order -->
@if(!$currentOrders)
<section class="message" aria-label="Message">
    <h3 class="message__heading sr-only" role="heading" aria-level="3">Message</h3>
    <p class="message__message wysywig">La date limite pour la dernière commande est le 10 décembre 2020.</p>
    <img src="" alt="" class="message__img">
</section>
@endif

<table>
    <thead>
        <legend>Horaire pour la reprise des livres</legend>
        <tr>
            <th scope="col">Jour</th>
            <th scope="col">Classe</th>
            <th scope="col">Heure</th>
        </tr>
    </thead>

    <tbody>
        {{-- TODO loop --}}
        <tr>
            <td>
                Lundi
            </td>
            <td>AN</td>
            <td>12h00 à 13h00</td>
        </tr>
    </tbody>
</table>

@if($draftOrders)
<section class="draft" aria-label="Votre commande brouillon&nbsp;:">
    <h3 class="draft__heading" role="heading" aria-level="3">Votre commande brouillon&nbsp;:</h3>
    <ul class="draft__list">
        @foreach($draftOrders->books->take(3) as $key => $book)
        <li class="draft__item">
            <img src="{{ $book->getFirstMediaUrl('books')?$book->getFirstMediaUrl('books'): '/storage/default-media.jpg' }}" alt="Image de la couverture du livre {{ $book->title}}" class="draft__img">
        </li>
        @endforeach
    </ul>
    <a href="/orders/{{$draftOrders->id}}" class="draft__link">Voir la commande brouillon</a>
</section>
@elseif($currentOrders)
<section class="d-order" aria-label="Votre commande contient&nbsp;:">
    <h3 class="d-order__heading" role="heading" aria-level="3">Votre commande contient&nbsp;:</h3>
    <ul class="draft__list">
        @foreach($currentOrders->books->take(3) as $key => $book)
        <li class="draft__item">
            <img src="{{ $book->getFirstMediaUrl('books')?$book->getFirstMediaUrl('books'): '/storage/default-media.jpg' }}" alt="Image de la couverture du livre {{ $book->title}}" class="draft__img">
        </li>
        @endforeach
    </ul>

</section>
@else
<article class="how-it-works">
    <h3 role="heading" aria-level="3" class="how-it-works__title">Le fonctionnement</h3>
    <p class="how-it-works__description">Quand vous avez commandé, je peux passé la commande groupé. Je travaille avec le Livre d'or qui se trouve au centre de Liège. Dès que les livres sont près pour vous et qu'ils sont payés, vous recevrez un mail pour venir chercher les livres. Pour la reprise, regardez l'horaire à gauche. Pour le payement, veuillez donnez précisez votre nom, prénom et groupe dans le message.</p>
</article>
@endif

@if(!$currentOrders && !$draftOrders)
<a href="{{route('orders.index')}}">Passer une commande</a>
@endif
@endsection
