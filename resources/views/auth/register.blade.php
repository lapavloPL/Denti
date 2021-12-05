@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">


                <div class="card-body cardbody-color p-lg-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="text-center">
                            <img src="img/logodenti.png" class="logodenti"
                            width="200px">
                        </div>

                        <div class="mb-3">


                            <div class="col-md-6 offset-md-3">
                                <input id="name" type="text" placeholder="Imię" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                     

                            <div class="col-md-6 offset-md-3">
                                <input id="email" placeholder="E-mail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                          

                            <div class="col-md-6 offset-md-3">
                                <input id="password" placeholder="Hasło" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                           

                            <div class="col-md-6 offset-md-3">
                                <input id="password-confirm" type="password" placeholder="Powtórz hasło" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="text-center">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-color px-5 mb-5 w-100">
                                    {{ __('Zarejestruj się') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
