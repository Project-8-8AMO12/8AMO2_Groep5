@extends('layouts.backend.app')

@section('content')
    <div class="container">
        @foreach($partials AS $partial)
            <div class="border border-dark rounded shadow-lg p-4 mb-4 bg-white my-5">
                {!! $partial !!}
            </div>
        @endforeach
    </div>
@endsection
