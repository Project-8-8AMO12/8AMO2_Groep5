@extends('layouts.standard.app')

@section('title', 'Lid Worden')
@section('jumboTitle', 'Lid Worden')
@section('jumboSubTitle', 'Wilt u lid worden van de vereniging?')

@section('content')

    @foreach($sections as $section)
        {!! $section !!}
    @endforeach

<div class="container">
    <div class="lidworden_form">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <h3></h3>

            <p><?php // echo $error; ?></p>

            <label for="voornaam">Voornaam</label><br>
            <input type="text" name="voornaam" /><br><br>

            <label for="achternaam">Achternaam</label><br>
            <input type="text" name="achternaam" /><br><br>

            <label for="geboorte">Geboortedatum</label><br>
            <input type="email" name="geboorte" placeholder="dd/mm/jjjj"/><br><br>

            <label for="email">email</label><br>
            <input type="email" name="email" /><br><br>

            <label for="nummer">telefoonnummer</label><br>
            <input type="text" name="nummer" /><br><br>

            <button type="submit" name="submit_aanmelden">Aanmelden</button><br><br>
        </form>
    </div>
</div>

@endsection
