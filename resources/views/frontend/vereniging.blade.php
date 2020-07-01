@extends('layouts.standard.app')

@section('title', 'Vereniging')
@section('jumboTitle', 'De vereniging')
@section('jumboSubTitle', 'Alles over de verening')

@section('content')

<div class="container">
    <div class="zwermgezien">
        <div class="top_info">
            <div class="title"><h1 class="text-center font-weight-bold display-4 mb-5">Over ons</h1></div>

            <div class="content"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus, enim vitae sollicitudin 
            euismod, mi sem ultricies nulla, ac auctor mauris risus sed lacus. Proin eget cursus lacus, eu ultricies est. Proin 
            imperdiet est ac risus rhoncus imperdiet. Duis tincidunt pharetra justo, sed tincidunt quam rhoncus a. In faucibus 
            ullamcorper dignissim. Suspendisse vel dui vitae massa rhoncus semper. Proin in commodo metus, vel faucibus purus. 
            Fusce nec sollicitudin ante. Etiam ultricies, lorem sit amet fringilla tincidunt, orci nisl accumsan justo, 
            ac maximus sapien odio quis nibh. Vivamus vel bibendum arcu. Curabitur consequat lobortis quam vitae malesuada.</p>
            </div>
        </div>

        <div class="mid_foto_sect">
            <div class="foto_flex">
                <div class="foto_long">foto</div>
                <div class="foto_short">foto 2</div>
            </div>
            <div class="big_foto"></div>
        </div>

        <div class="bottom_info">
            <div class="title"><h1>Geschiedenis</h1></div>

            <div class="content"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus, enim vitae sollicitudin 
            euismod, mi sem ultricies nulla, ac auctor mauris risus sed lacus. Proin eget cursus lacus, eu ultricies est. Proin 
            imperdiet est ac risus rhoncus imperdiet. Duis tincidunt pharetra justo, sed tincidunt quam rhoncus a. In faucibus 
            ullamcorper dignissim. Suspendisse vel dui vitae massa rhoncus semper. Proin in commodo metus, vel faucibus purus. 
            Fusce nec sollicitudin ante. Etiam ultricies, lorem sit amet fringilla tincidunt, orci nisl accumsan justo, 
            ac maximus sapien odio quis nibh. Vivamus vel bibendum arcu. Curabitur consequat lobortis quam vitae malesuada.</p>
            </div>
        </div>
    </div>
</div>

@endsection