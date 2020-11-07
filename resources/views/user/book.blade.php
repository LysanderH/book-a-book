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
            <tr>
                <td><a href="/orders/{{-- TODO order id --}}" class="orders__link"></a></td>
                <td><a href="/orders/{{-- TODO order id --}}" class="orders__link"></a></td>
                <td><a href="/orders/{{-- TODO order id --}}" class="orders__link"></a></td>
                <td><a href="/orders/{{-- TODO order id --}}" class="orders__link"></a></td>
            </tr>
        </tbody>
    </table>
</section>
@endsection
