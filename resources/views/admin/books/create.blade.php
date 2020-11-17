@section('title', 'Ajouter un livre')
@extends('layouts.app')

@section('content')
{{-- TODO Form --}}
<form action="/books" method="post">
    @csrf
    ...
</form>
@endsection
