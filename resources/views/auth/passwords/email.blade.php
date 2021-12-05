@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">

                <div class="card-body cardbody-color p-lg-4">

                    


                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="text-center">
                            <img src="/img/logodenti.png" class="logodenti"
                            width="200px">
                        </div>

                        <div class="mb-3">

                            <div class="col-md-8 offset-md-2">
                                <input id="email" type="email" placeholder="E-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="text-center">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-color px-5 mb-5 w-100">
                                    {{ __('Wyślij link do zresetowania hasła') }}
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
