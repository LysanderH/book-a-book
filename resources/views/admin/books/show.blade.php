{{-- TODO add book title --}}
@section('title', 'Titre du livre')
@extends('layouts.app')

@section('content')


<a href="{{route('season.create')}}">Ajouter une nouvelle collection</a>
@endsection
