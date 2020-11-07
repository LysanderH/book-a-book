@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

<!-- TODO display if user hasn't submitted his order -->
<section class="message" aria-label="Message">
    <h3 class="message__heading sr-only" role="heading" aria-level="3">Message</h3>
    <p class="message__message wysywig">La date limite pour la dernière commande est le 10 décembre 2020.</p>
    <img src="" alt="" class="message__img">
</section>
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

<!-- TODO display if user has no saved order -->
<article class="how-it-works">
    <h3 role="heading" aria-level="3" class="how-it-works__title">Le fonctionnement</h3>
    <p class="how-it-works__description">Quand vous avez commandé, je peux passé la commande groupé. Je travaille avec le Livre d'or qui se trouve au centre de Liège. Dès que les livres sont près pour vous et qu'ils sont payés, vous recevrez un mail pour venir chercher les livres. Pour la reprise, regardez l'horaire à gauche. Pour le payement, veuillez donnez précisez votre nom, prénom et groupe dans le message.</p>
</article>

<!-- TODO display if user has saved order -->
<section class="draft" aria-label="Votre commande brouillon&nbsp;:">
    <h3 class="draft__heading" role="heading" aria-level="3">Votre commande brouillon&nbsp;:</h3>
    <ul class="draft__list">
        <li class="draft__item"><img src="" alt="Image de la couverture du livre {{-- TODO insert book title --}}" class="draft__img"></li>
        <li class="draft__item"><img src="" alt="Image de la couverture du livre {{-- TODO insert book title --}}" class="draft__img"></li>
        <li class="draft__item"><img src="" alt="Image de la couverture du livre {{-- TODO insert book title --}}" class="draft__img"></li>
    </ul>
</section>

{{-- TODO if user set an order --}}
<a href="/order">Passer une commande</a>
@endsection
