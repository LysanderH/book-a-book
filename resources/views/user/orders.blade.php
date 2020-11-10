@section('title', 'Faire une commande')

@extends('layouts.app')

@section('content')
<section class="order-list" aria-label="Liste des commandes">
    <h2 class="order-list__heading" role="heading" aria-level="2">Liste des commandes</h2>
    {{-- TODO list all orders from student --}}
    <table class="orders__table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Status</th>
                <th>Nombre de livres</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td><a href="/orders/{{$order->user->id}}" class="orders__link">@formatDate($order->created_at)</a></td>
                <td><a href="/orders/{{$order->user->id}}" class="orders__link">{{$order->statuses->last()->name}}</a></td>
                <td><a href="/orders/{{$order->user->id}}" class="orders__link">{{count($order->books)}}</a></td>
                <td><a href="/orders/{{$order->user->id}}" class="orders__link">{{$order->total}}</a></td>

            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection
