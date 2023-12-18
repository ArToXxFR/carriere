@extends('layouts.app')

@section('title', 'Les carrières')

@section('content')

    <div class="user-box">
        @foreach ($users as $user)
            <div class="user-container">
                {{ $user->firstname }}
                {{ $user->lastname }}
                {{ $user->mail }}
            </div>
        @endforeach 
    </div>
@endsection