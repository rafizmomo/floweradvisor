@extends('layouts.app')

@section('content')

    <main class="container-fluid">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="card shadow text-dark">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="d-flex justify-content-center">
                                <img src="https://www.floweradvisor.co.id/assets/images/svg/logo.png"
                                    class="img-fluid logo my-4" alt=" logo">
                            </div>

                            <div class="text-center pt-3 pb-3">
                                <h4>SIGN IN</h4>
                                <h5>Hi, Welcome back!</h5>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"  name="email" id="email" placeholder="Email Address" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="d-grid gap-2 pt-3">
                                
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-sign-in"></i><span class="ps-2">SIGN IN</span></button>
                                    
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                
                                
                            </div>
                            
                            <hr>
                            <div class="d-grid gap-2">
                                <span class="text-center">Dont have any account?</span>
                                <a href="{{ route('register') }}" class="btn btn-secondary btn-block">
                                    <i class=""></i><span class="">CREATE YOUR ACCOUNT</span></a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
