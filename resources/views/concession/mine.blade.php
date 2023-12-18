@extends('layouts.app')

@section('content')
    @if ($mine)
        <div>
            {{ "Mine id = " . $mine->id }}
        </div>
        <div>
            {{ "Mine name = " . $mine->name }}
        </div>
        <div>
            {{ "Mine longitude = " . $mine->longitude }}
        </div>
        <div>
            {{ "Mine latitude = " . $mine->latitude }}
        </div>
    @else
        <div>
            <p>This mine doesn't exist</p>
        </div>
    @endif
@endsection