@extends('layouts.backend.app')

@section('content')
    <div class="overflow-hidden">
        <div class="container p-5 w-75">
            <div class="w-50 m-auto">
                <form action="makeUser" method="post">
                    <label>Name:</label>
                    <div class="input-group mb-2">
                        <input type="text" name="name" value="{{old('name')}}" class="form-control">
                        <div class="ml-4 dropdown w-25">
                            <select name="admin" class="form-control">
                                <option value="1">Text editor</option>
                                <option value="2">Webmaster</option>
                                <option value="3">Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="font-weight-bold">{{$errors->first('name')}}</div>

                    <label>E-mail:</label>
                    <div class="input-group mb-2">
                        <input type="text" name="email" value="{{old('email')}}" class="form-control">
                    </div>
                    <div class="font-weight-bold">{{$errors->first('email')}}</div>

                    <label>Password:</label>
                    <div class="input-group mb-2">
                        <input type="password" name="password" value="{{old('password')}}" class="form-control">
                    </div>
                    <div class="font-weight-bold">{{$errors->first('password')}}</div>

                    <button class="btn btn-outline-dark" type="submit" name="makeUser">Make User</button>
                    @csrf
                </form>
            </div>
            <div>
                <label>List of users</label>
                <div class="row">
                @foreach($users as $user)

                        <div class="col-5">
                            <p>Name: {{$user->name}}</p>
                            <p>E-mail: {{$user->email}}</p>
                            <p>Admin Level: {{$user->admin_lvl}}</p>

                            <a href="{{url("backend/settings/edit?user_id=". $user->id)}}" class="btn-primary btn" value="Edit">Edit</a>
                            <form class="mb-3" method="post" action="settings">
                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                <input type="submit" class="btn-danger btn" value="Delete" name="deleteUser">
                                @csrf
                            </form>
                        </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection


