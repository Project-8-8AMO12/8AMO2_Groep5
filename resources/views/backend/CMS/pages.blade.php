@extends('layouts.backend.app')

@section('content')

    <div class="row pl-3 h-100">

        @foreach ($views as $view)

            <?php
                $pageName = substr($view, 9, -10);
            ?>

            <div class="col-4 p-5">
                <a href="{{url()->current()}}/editPage?pageName={{$pageName}}" class="_noAnchor">
                    <div class=" mx-auto card text-white bg-dark mb-3" style="">
                        <div class="card-header h3">{{ $pageName }}</div>
                        <div class="card-body">
                            <h5 class="card-title">Dark card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

@endsection
