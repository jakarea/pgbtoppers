<ul class="navbar-nav bg-gradient-primary sidebar sidebar accordion" id="accordionSidebar">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-md-inline nav_toggler">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    <!-- Sidebar - Brand -->
    <div class="sidebar-brand mt-4">
        <a href="{{ url('admin') }}">
        @if(Auth::user()->photo)
                <img id="preview" class="img-responsive" style="max-width: 120px" src="/images/thumbnail/{{ Auth::user()->photo }}"/ >
                @else
                <img id="preview" class="img-responsive" src="https://ui-avatars.com/api/?background=random&name={{Auth()->user()->name}}&rounded=true" alt="{{Auth()->user()->name}}" style="width: 120px;">
                @endif
            <span class="mt-3 h3">{{Auth()->user()->name}}</span>
        </a>
    </div>

    
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.userprofile') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
 


    @if(Auth()->user()->role == 1 || Auth()->user()->role == 2)


    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.intake') }}">
            <i class="fas fa-fw fa-info"></i>
            <span>Intake</span>
        </a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.testimonial') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Reviews</span>
        </a>
    </li>
    @endif

    @if(Auth()->user()->role === 1 || Auth()->user()->role == 2 || Auth()->user()->role == 3)

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.services') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span> Begeleider </span>
        </a>
    </li>
@endif


    @if(Auth()->user()->role === 1 || Auth()->user()->role == 2 || Auth()->user()->role == 4)

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.services-provider') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Zorgverlener</span>
        </a>
    </li>
    @endif
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.payment-history') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Betaalgeschiedenis</span>
        </a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.mailbox') }}">
        <i class="fa fa-users"></i>
            <span>Mailbox</span>
        </a>
    </li> 

    <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index') }}">
        <i class="fa fa-users"></i>
            <span>Gebruikers</span>
        </a>
    </li> 
    <li class="nav-item">
        <a class="nav-link" href="{{ route('frontend.home') }}">
        <i class="fa fa-eye"></i>
            <span>Website</span>
        </a>
    </li> 
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/logout') }}">
        <i class="fas fa-fw fa-cog"></i>
            <span>Uitloggen</span>
        </a>
    </li> 

</ul>