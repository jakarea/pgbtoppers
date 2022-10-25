<nav class="main-menu">
    <ul class="flex-container">
        <li>
            <a href="{{ route('frontend.ikzoek') }}" class="{{ (request()->is('ik-zoek')) ? 'active' : '' }}">
            Ik zoek een zorgverlener
            </a>
        </li>
        <li>
            <a href="{{ route('intake.index') }}" class="{{ (request()->is('intake')) ? 'active' : '' }}">
            Ik ben een zorgverlener
            </a>
        </li>
        <!-- to remove -->
        <!-- <li>
            <a href="{{ route('frontend.meld') }}" class="{{ (request()->is('meld')) ? 'active' : '' }}">
            MELD ME
            </a>
        </li> -->
        <!-- to remove -->
        
        <li>
            <a href="{{ route('frontend.onze') }}" class="{{ (request()->is('onze')) ? 'active' : '' }}">
            Onze ambitie
            </a>
        </li>
    </ul>
</nav>
