<header>
    <div class="header-socail">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul>
                    <!-- <li>
                        <a href="#"><i class="fa fa-phone"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-camera"></i></a>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
    </div> 
    <div class="container flex-container cta_header custom-heading">
        <div class="logo main-header">
            <a href="{{ route('frontend.home') }}">
                <img src="{{ asset('images/logo.png') }}" class="img-responsive" alt="PGB toppers">
            </a>
        </div>
        <div class="flex-container main-header">

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
                        Uitloggen
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

    <!-- mobile menu start -->
    <nav role="navigation" class="mobile-main">
        <div id="menuToggle"> 
            <input type="checkbox" id="humbarg" /> 
            <span></span>
            <span></span>
            <span></span>
 
             
            <ul id="menu">
                @include('partials.frontend.global.nav')

                @if(auth()->user())
                <li>
                    <a href="{{ url('admin/') }}" class="text-uppercase">
                        Dashboard
                    </a>

                </li>  
                <li>
                    <a href="{{ url('logout') }}" class="text-uppercase">
                    Uitloggen
                    </a>
                </li>
                @else 
                <li>
                    <a href="{{ route('login') }}" class="btn btn-primary text-white">
                        Inloggen
                    </a>
                </li>
                @endif 
            </ul>
        </div>
        <div class="logo" style="position: absolute; right: 12px; top: -35px;">
            <a href="{{ route('frontend.home') }}">
                <img src="{{ asset('images/logo.png') }}" class="img-responsive" alt="PGB toppers">
            </a>
        </div>
        </nav>
    <!-- mobile menu end -->

</header>
<script>
    var navOpen = document.getElementById('humbarg');
    if(navOpen.checked){
        navOpen.click();
    }
</script>
