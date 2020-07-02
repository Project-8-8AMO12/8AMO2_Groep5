@extends('layouts.standard.app')

@section('content')

    <div class="container">
        <h1 class="display-1">Contact</h1>
        <form action="contact" method="post">

            <label> Stuur een bericht naar iemand van ons team:</label>
            <div class="dropdown w-25">
                <select name="user_id" class="form-control">
                    @foreach($admins as $admin)
                        <option value={{$admin->id}}>{{$admin->name}}</option>
                    @endforeach
                </select>
            </div>

            <label>Name:</label>
            <div class="input-group mb-2">
                <input type="text" name="name" value="{{old('name')}}" class="form-control">
            </div>
            <div class="font-weight-bold">{{$errors->first('name')}}</div>

            <label>E-mail:</label>
            <div class="input-group mb-2">
                <input type="text" name="email" value="{{old('email')}}" class="form-control">
            </div>
            <div class="font-weight-bold">{{$errors->first('email')}}</div>

            <label>Message:</label>
            <div class="input-group mb-2">
                <textarea type="text" name="message" value="{{old('message')}}" class="form-control"></textarea>
            </div>
            <div class="font-weight-bold">{{$errors->first('message')}}</div>

            <button class="btn btn-outline-dark" type="submit">verzend</button>
        @csrf
        </form>
    </div>
@endsection
