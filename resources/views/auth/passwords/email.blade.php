@extends('layouts.app')

@section('content')
<main class="container-fluid">
    <div class="row vh-100 justify-content-center align-items-center">
        <div class="col-md-4">
            <div class="card shadow text-dark">
                <div class="card-body">

                        <div class="d-flex justify-content-center">
                            <img src="https://www.floweradvisor.co.id/assets/images/svg/logo.png"
                                class="img-fluid logo my-4" alt=" logo">
                        </div>

                        <div class="text-center pt-3 pb-3">
                            <h4>Reset Password</h4>
                            <h5>Hi, Write your email below</h5>
                        </div>

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-8">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
    
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="d-grid gap-2 pt-3">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-lock"></i><span class="ps-2">Send Reset Password</span></button>
                                    
    
                            </div>
                           
                            </button>
    
                           
                        </form>

                        
                       
                </div>
            </div>
        </div>
    </div>
</main> 
@endsection
