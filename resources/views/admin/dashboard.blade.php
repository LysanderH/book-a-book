@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

<span class="admin-dashboard__heading">Dashboard</span>

<div class="financial-dif">
    <dl class="financial-dif__dlist">
        <dt class="financial-dif__therm">Dépences&nbsp;:</dt>
        <dd class="financial-dif__definition">...€</dd>
        <dt class="financial-dif__therm">Reçu&nbsp;:</dt>
        <dd class="financial-dif__definition">...€</dd>
    </dl>
</div>

<table class="a-dashboard__heading">
    <thead>
        <tr>
            <th class='sr-only'>Image</th>
            <th><a href="/?sort=student" class="a-dashboard__link"></a>Étudiant</th>
            <th><a href="/?sort=topay" class="a-dashboard__link"></a>Montant à payer</th>
            <th><a href="/?sort=payed" class="a-dashboard__link"></a>Montant payé</th>
            <th><a href="/?sort=status" class="a-dashboard__link"></a>Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <form action="post" class="a-dashboard__form"><label for="status" class="sr-only">Choix du status</label>
                    <select name="status" id="status" class="a-dashboard__select">
                        <option value="">Commandé</option>
                        <option value="">Payé</option>
                        <option value="">Disponible</option>
                        <option value="">Retiré</option>
                    </select>
                </form>
            </td>
        </tr>
    </tbody>
</table>
<a href="{{route('send-mail')}}" class="a-dashboard__mail">Envoyer un mail de rappel</a>


@endsection
