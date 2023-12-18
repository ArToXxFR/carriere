@extends('layouts.app')

@section('content')
    <h1> {{ $concession->name }} </h1>
    @foreach ($concession->mines as $mine)
        <div> {{ $mine->id }} - {{ $mine->name }} </div>
    @endforeach
@endsection