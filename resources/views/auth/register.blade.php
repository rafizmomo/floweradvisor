@extends('layouts.app')

@section('content')


<main class="container-fluid">
    <div class="row vh-100 justify-content-center align-items-center">
        <div class="col-md-4">
            <div class="card shadow text-dark">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="d-flex justify-content-center">
                            <img src="https://www.floweradvisor.co.id/assets/images/svg/logo.png"
                                class="img-fluid logo my-4" alt=" logo">
                        </div>

                      

                        <div class="text-center pt-3 pb-3">
                            <h3>SIGN UP</h3>
                            <h5>Hi, Nice to meet you!</h5>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Your Name" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>

                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  placeholder="Your Email" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Confirm Password</label>
                           
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  placeholder="Re-enter your Password" required>
                            
                        </div>

                        <div class="d-grid gap-2 pt-3">
                            <button type="submmit" class="btn btn-primary btn-block">
                                <i class="fas fa-sign-in"></i><span class="ps-2">SIGN UP</span></button>

                        </div>

                       
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
