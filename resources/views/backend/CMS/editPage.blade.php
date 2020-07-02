@extends('layouts.backend.app')

@section('content')

    <div class="container">

        <h1 class="py-3">{{ $_GET['pageName'] }}</h1>

        <div class="form-group">
            <label for="exampleInputEmail1">What is the title of the page?</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{ $_GET['pageName'] }}">
        </div>

        <ul class="list-group my-3">
            @foreach($sections as $section)
                <li class="list-group-item">
                    {{ $section->pageName . ' - ' . $section->sectionId }}
                    <button type="submit" name='delete' class="float-right btn btn-danger mx-1">Delete this section</button>
                    <button type="submit" name='edit' class="float-right btn btn-success">Edit this section</button>
                </li>
            @endforeach
        </ul>

        <form action="{{url()->current()}}/addSection?={{ $_GET['pageName'] }}" method="get">
            <button type="submit" name='add' value='{{ $_GET['pageName'] }}' class="btn btn-primary">Add new section</button>
        </form>
    </div>

@endsection
