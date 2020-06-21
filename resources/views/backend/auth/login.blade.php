@extends('layouts.backend.app')

@section('content')

    <div class="vh-100 overflow-hidden">
        <div class="jumbotron-fluid bg-light h-35">
            <div class="container overflow-hidden">
                <div class="my-5">
                    <img src="{{url('/images/logo-big.png')}}" class="w-100 d-block m-auto" alt="imkersLeiden">
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 180 1440 100">
            <path fill="#343a40" fill-opacity="1" d="M0,192L48,202.7C96,213,192,235,288,250.7C384,267,480,277,576,266.7C672,256,768,224,864,213.3C960,203,1056,213,1152,224C1248,235,1344,245,1392,250.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
        <div class="bg-dark text-white p-5 h-75">
            <div class="container">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" autocomplete="off" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" autocomplete="off" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            <a href="/backend/register" class="mx-3">Register</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
