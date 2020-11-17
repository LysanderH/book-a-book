@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<section class="register-two" aria-label="Ajouter une image de profil">
    <h2 class="register-two__heading" role="heading" aria-level="2">Ajouter une image de profil</h2>
    <form action="{{-- TODO add route add-profile-picture --}}" method="post" enctype="multipart/form-data">
        <label for="picture" class="register-two__label">Ajouter une image de profil</label>
        <input type="file" class="register-two__input" id="picture">
        <button class="btn register-two__btn">Ajouter</button>
    </form>
</section>
@endsection
