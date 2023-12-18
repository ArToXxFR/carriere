@extends('layouts.app')

@section('title', 'Les carrières')

@section('content')

    <form action="{{ route('user.create') }}" method="POST" class="form-container">
        @csrf
        <input type="text" name="firstname" placeholder="Prénom...">
        <input type="text" name="lastname" placeholder="Nom...">
        <input type="email" name="mail" placeholder="Email...">
        <input type="text" name="phone" placeholder="Téléphone...">
        <select name="concession">
            @foreach ($concessions as $concession)
                <option value="{{ $concession->id }}">{{ $concession->name }}</option>
            @endforeach
        </select>
        <select name="role" id="">
            @foreach ($roles as $role)
                <option value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach
        </select>
        <button>Envoyer</button>
    </form>    

@endsection