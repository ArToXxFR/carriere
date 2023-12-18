@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('concession.create') }}">
        @csrf
        <input type="text" name="name" placeholder="Nom">
        <input type="number" name="siret" placeholder="Siret">
        <input type="text" name="phone" placeholder="Téléphone">
        <button>Envoyer</button> 
    </form>
@endsection