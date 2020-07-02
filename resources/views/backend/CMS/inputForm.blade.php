@extends('layouts.backend.app')

@section('content')

    <div class="container py-5">
        <h1>Add New Section</h1>

        <h3>Select a style you like.</h3>

        @if(!isset($section))
            <form action="{{url()->current()}}/saveNewSection" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleFormControlInput1">Title section</label>
                    <input type="text" name='title' class="form-control" id="exampleFormControlInput1" placeholder="Example">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Text section</label>
                    <textarea class="form-control" name='article' id="exampleFormControlTextarea1" maxlength="1250" placeholder="Max 1250 characters" rows="15"></textarea>
                </div>

                <input type="hidden" name='pageName' value="{{ $_GET['pageName'] }}">
                <input type="hidden" name='sectionId' value="{{ $_GET['section'] }}">

                <button type="submit" class="btn-lg btn-success mt-5">Select this template</button>
            </form>
        @else
            <form action="{{url()->current()}}/updateSection" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleFormControlInput1">Title section</label>
                    <input type="text" name='title' class="form-control" value='{{ $section->title }}' id="exampleFormControlInput1" placeholder="Example">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Text section</label>
                    <textarea class="form-control" name='article' id="exampleFormControlTextarea1" maxlength="1250" placeholder="Max 1250 characters" rows="15">{{ $section->article }}</textarea>
                </div>

                <input type="hidden" name='pageName' value="{{ $_GET['pageName'] }}">
                <input type="hidden" name='sectionId' value="{{ $_GET['section'] }}">
                <input type="hidden" name='id' value="{{ $_GET['id'] }}">

                <button type="submit" class="btn-lg btn-success mt-5">Update</button>
            </form>
        @endif
    </div>

@endsection
