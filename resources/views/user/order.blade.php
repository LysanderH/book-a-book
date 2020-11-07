@section('title', 'Vos commandes')
@extends('layouts.app')

@section('content')
{{-- TODO list all orders from student --}}
<section class="order" aria-label="Liste des commandes">
    <h2 class="order__heading" role="heading" aria-level="2">Liste des commandes</h2>
    <ul class="order__list">
        {{-- TODO loop order->books --}}
        <li class="order__item">
            <article class="book">
                <h3 class="book__heading"></h3>
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
    <span class="order__total">Total : {{-- TODO total --}}</span>
</section>
@endsection
