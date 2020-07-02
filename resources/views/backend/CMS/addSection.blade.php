@extends('layouts.backend.app')

@section('content')

    <div class="container py-5">
        <h1>Add New Section</h1>

        <h3>Select a style you like.</h3>

        <div class="dropdown my-4">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown button
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @foreach($partials AS $partial)
                    <?php
                        $sectionName = substr($partial, 18, -10);
                    ?>
                    <a class="dropdown-item" href="{{ url()->current() . '?add=' . $_GET['add'] . '&section=' . $sectionName }}">{{ $sectionName }}</a>
                @endforeach
            </div>
        </div>

        <div class="border border-dark rounded shadow-lg p-4 mb-4 bg-white my-5">
            <?php
                $section = intval(substr($_GET['section'], -1))
            ?>

            @switch($section)
                @case(1)
                    {!! $sections[($section - 1)] !!}
                @break

                @case(2)
                    {!! $sections[($section - 1)] !!}
                @break

                @case(3)
                    {!! $sections[($section - 1)] !!}
                @break

                @default
                    {!! $section[1] !!}
            @endswitch
        </div>


        <a href="{{url()->current()}}/form?pageName={{ $_GET['add'] }}&section={{ $_GET['section'] }}" name='add' class="btn-lg btn-success mt-5">Select this template</a>

    </div>

@endsection
