@extends('layouts.standard.app')

@section('title', 'HetBlad')
@section('jumboTitle', 'Magazine')
@section('jumboSubTitle', 'Download hier onze magazine')

@section('content')

<?php

$filename= 'iiasuni.jpg';

?>

<div class="container">
    <div class="download">
        <p>download hier uw magazine</p><br>

        <form method="get" action="../backend/CMS/assets/download">
            <button type="submit">Download de magazine</button>
        </form>

        @if (session('status'))
            <form method="get" action="../backend/CMS/assets">
                <p>U hebt het recht om de magazine aan te passen</p>
                <button type="submit">Upload Magazine</button>
            </form>
        @endif
    </div>
</div>

@endsection