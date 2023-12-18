@extends('layouts.app')

@section('content')
    @foreach ($concessions as $concession)
    <div>
        {{ $concession->name }}
        {{ $concession->siret }}
        {{ $concession->phone }}
        @foreach ($concession->mines as $mine)
            <div>
                {{ $mine->id }} - {{ $mine->name }}
            </div>
        @endforeach
        
    </div>
    @endforeach
@endsection