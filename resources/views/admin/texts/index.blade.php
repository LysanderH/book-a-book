@section('title', 'Liste des messages')
@extends('layouts.app')

@section('content')

{{-- TODO list all messages --}}

<ul>
    {{-- LOOP --}}
    <li>
        <dl>
            <dt>Key</dt>
            <dd>Content</dd>
        </dl>
        <a href="texts/id/edit">Modifier <span class="sr-only">le message key</span></a>
    </li>
</ul>

@endsection
