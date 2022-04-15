@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="https://www.floweradvisor.co.id/assets/images/svg/logo.png" class="" style="height: 50px;"
                    alt=" logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<main class="container-fluid">
    <div class="row mt-3 justify-content-center align-items-center">
        <div class="col" style="max-width:1024px">
            <div class="card shadow text-dark" > 
                <div class="card-body p-5">
    
    
                        <div class="text-center pt-3 pb-5">
                            <h4>Hi, {{ Auth::user()->name }}</h4>
                            <h3 class="font-weight-bold">Lets Check our Promo in Here!</h3>
    
                        </div>
                        <section id="code-section">
                    
                            <div class="row">
                                <div class="col-12 p-2">
    
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="promo code"
                                            aria-label="promo code" aria-describedby="button-addon2" readonly
                                            value="HALLOW10" id="promoCodeField">
                                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"
                                            onclick="promoCode()"><i class="fas fa-copy"></i></button>
                                    </div>
    
                                </div>
    
                             
                                <div class="d-grid gap-2">
                                    <span class="text-center">Download our Apps</span>
                                    <a href="https://apps.apple.com/us/app/online-florist-floweradvisor"
                                        class="btn btn-lg btn-dark text-light mb-2"> <i class="fa-brands fa-apple"></i>
                                        <span>Download in APP Store</span></a>
                                    
                                    <a href="https://www.floweradvisor.com.ph/flowersphilippines"
                                        class="btn btn-lg text-dark mb-2" style="background-color: pink;"> <i
                                            class="fa fa-heart"></i>
                                        <span>Someone's Day</span></a>
                                </div>
    
                            </div>
                        </section>
                        <hr>
                        <footer class="text-center">
                            <a href="https://www.floweradvisor.com.ph/"><img src="https://www.floweradvisor.co.id/assets/images/svg/logo.png" class="" style="height: 50px;"
                            alt=" logo"></a>
                            <br>
                        </footer>
    
    
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    function promoCode() {
        var copyText = document.getElementById("promoCodeField");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        navigator.clipboard.writeText(copyText.value);

    }
</script>
@endsection
