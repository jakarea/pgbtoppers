<header>
    <div class="header-socail">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-phone"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-camera"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    <div class="upper">
        <div class="container">
            <ul class="flex-container socials">
                <li> 

                </li>
            </ul>
        </div>
    </div>
    <div class="container flex-container cta_header custom-heading">
        <div class="logo">
            <a href="{{ route('frontend.home') }}">
                <img src="{{ asset('images/logo.png') }}" class="img-responsive" alt="PGB toppers">
            </a>
        </div>
        <div class="flex-container">

            @include('partials.frontend.global.nav')
            
            <div class="cta_header flex-container btn_wrapper">
                <!-- <a href="#" class="text-uppercase">
                    Aanmelden
                </a> -->

                @if(auth()->user())
                    <span>
                        <a href="{{ url('admin/') }}" class="text-uppercase">
                            Dashboard
                        </a>
                    </span>
                    <span>
                        <a href="{{ url('logout') }}" class="text-uppercase">
                            Logout
                        </a>
                    </span>
                @else
                <a href="{{ route('login') }}" class="btn btn-primary">
                    Inloggen
                </a>
                @endif
           </div>
        </div>
    </div>
</header>
