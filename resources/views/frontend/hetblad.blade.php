@extends('layouts.standard.app')

@section('title', 'HetBlad')
@section('jumboTitle', 'Magazine')
@section('jumboSubTitle', 'Download hier onze magazine')

@section('content')

    @foreach($sections as $section)
        {!! $section !!}
    @endforeach

<div class="container">
    <div class="download">
        <p>download hier uw magazine</p><br>
        <form method="get" action="file.doc">
            <button type="submit">Download Magazine</button>
        </form>
    </div>
</div>

@endsection
