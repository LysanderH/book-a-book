@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

<span class="admin-dashboard__heading">Dashboard</span>

<div class="financial-dif">
    <dl class="financial-dif__dlist">
        <dt class="financial-dif__therm">Dépences&nbsp;:</dt>
        <dd class="financial-dif__definition">@formatPrice($expenditures)</dd>
        <dt class="financial-dif__therm">Reçu&nbsp;:</dt>
        <dd class="financial-dif__definition">@formatPrice($receips)</dd>

    </dl>
</div>

<table class="a-dashboard__heading">
    <thead>
        <tr>
            <th class='sr-only'>Image</th>
            <th><a href="/?sort=student" class="a-dashboard__link"></a>Étudiant</th>
            <th><a href="/?sort=topay" class="a-dashboard__link"></a>Montant à payer</th>
            <th><a href="/?sort=status" class="a-dashboard__link"></a>Status</th>
        </tr>
    </thead>
    <tbody>

        @foreach($orders as $order)
        <tr>
            {{-- @dd($order->user) --}}
            <td></td>
            <td>{{$order->user->lastname .', ' . $order->user->firstname}}</td>
            <td>@formatPrice($order->total)</td>
            <td>
                <form action="post" class="a-dashboard__form"><label for="status" class="sr-only">Choix du status</label>
                    <select name="status" id="status" class="a-dashboard__select">

                        @foreach($statuses as $status)
                        <option value="{{$status->id}}" @if($order->statuses->last()->id === $status->id)
                            selected
                            @endif
                            >{{$status->name}}</option>

                        @endforeach

                    </select>
                    <noscript>
                        <button type="submit">Changer le status</button>
                    </noscript>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
<a href="{{route('send-mail')}}" class="a-dashboard__mail">Envoyer un mail de rappel</a>


@endsection
