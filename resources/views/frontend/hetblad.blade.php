@extends('layouts.standard.app')

@section('title', 'HetBlad')
@section('jumboTitle', 'Magazine')
@section('jumboSubTitle', 'Download hier onze magazine')

@section('content')

<div class="container">
    <div class="download">
        <p>download hier uw magazine</p><br>
        <a href="../backend/CMS/assets.jpg" download><button type="submit">Download de magazine</button></a><br>
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