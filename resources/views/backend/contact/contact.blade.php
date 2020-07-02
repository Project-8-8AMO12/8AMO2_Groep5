@extends('layouts.backend.app')

@section('content')
    <div class="container">
        <div class="mt-5">
            @if (!empty($contact))
                <div class="row">
                @foreach($contact as $contac)
                    <div class="border border-dark col-5 m-3">
                        <div class="col-10">
                            <p>Name: {{$contac->name}}</p>
                            <p>E-mail: <a href='mailto:{{$contac->email}}'>{{$contac->email}}</a></p>
                        </div>
                        <div class="col-12">
                            <p>Message: {{$contac->message}}</p>
                        </div>
                        <form method="post" action="delContact" class="m-2">
                            <input type="hidden" name="conId" value="{{$contac->id}}">
                            <input class="btn btn-primary" type="submit" name="submit" value="Mark As Read">
                            @csrf
                        </form>
                    </div>
            @endforeach
                </div>
            @else
                <h1>No new messages</h1>
            @endif
        </div>
    </div>
@endsection

