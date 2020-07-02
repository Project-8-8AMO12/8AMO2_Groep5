@extends('layouts.standard.app')

@section('title', 'Activiteiten')
@section('jumboTitle', 'Leer de wondere wereld')
@section('jumboSubTitle', 'van de Bij')

@section('content')

    @foreach($sections as $section)
        {!! $section !!}
    @endforeach

    <section class="h-50 py-5">
        <div class="container">
            <div class="row">
                <div class="bg-danger rounded col-4 float-right p-5 m-0">
                    <p class="text-white">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                        esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                        id est laborum.
                    </p>
                </div>
                <div class="col-8 bg-success rounded">
                    Right
                </div>
            </div>
            <div class="row py-5">
                <div class="col-8 bg-success rounded">
                    Left
                </div>
                <div class="bg-danger rounded col-4 float-right p-5 m-0">
                    <p class="text-white">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                        esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                        id est laborum.
                    </p>
                </div>
            </div>
            <div class="row bg-success">
                <div class="col-4 bg-success rounded">
                    left
                </div>
                <div class="bg-danger rounded col-4 float-right p-5 m-0">
                    <p class="text-white">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                        esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                        id est laborum.
                    </p>
                </div>
                <div class="col-4 bg-success rounded">
                    right
                </div>
            </div>
        </div>
    </section>


@endsection
