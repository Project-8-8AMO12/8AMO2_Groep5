@extends('layouts.backend.app')

@section('content')
    <div class="container">
        @foreach($user as $use)
            <div class="w-50 m-auto">
                <form method="post" action="saveEdit">
                    <label class="mt-5">Name:</label>
                    <div class="input-group mb-2">
                        <input type="text" name="name" value="{{$use->name}}" class="form-control">
                    </div>
                    <label>E-mail:</label>
                    <div class="input-group mb-2">
                        <input type="text" name="email" value="{{$use->email}}" class="form-control">
                    </div>
                    <div class="font-weight-bold">{{$errors->first('email')}}</div>

                    <label>New Password:</label>
                    <div class="input-group mb-2">
                        <input type="password" name="password"  class="form-control">
                    </div>
                    <div class="font-weight-bold">{{$errors->first('password')}}</div>

                    <label>Admin level:</label>
                    <div class="input-group mb-2">
                        <select name="admin" class="form-control">
                            @if($use->admin_lvl == 3)
                                <option value="3">Admin</option>
                                <option value="2">Webmaster</option>
                                <option value="1">Texteditor</option>
                            @elseif($use->admin_lvl == 2)
                                <option value="2">Webmaster</option>
                                <option value="3">Admin</option>
                                <option value="1">Texteditor</option>
                            @elseif($use->admin_lvl == 1)
                                <option value="1">Texteditor</option>
                                <option value="2">Webmaster</option>
                                <option value="3">Admin</option>
                            @endif
                        </select>
                    </div>
                    <input type="hidden" name="user_id" value="{{$use->id}}">

                    <input type="submit" name="edit" class="btn btn-primary" value="Save">
                    @csrf
                </form>
            </div>
        @endforeach
    </div>
@endsection
