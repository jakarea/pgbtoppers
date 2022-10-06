<nav class="main-menu">
    <ul class="flex-container">
        <li>
            <a href="{{ route('frontend.ikzoek') }}" class="{{ (request()->is('ik-zoek')) ? 'active' : '' }}">
            IK ZOEK EEN ZORGVERLENER
            </a>
        </li>
        <li>
            <a href="{{ route('intake.index') }}" class="{{ (request()->is('intake')) ? 'active' : '' }}">
            Ik BEN EEN ZORGVERLENER
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
            ONZE AMBITIE
            </a>
        </li>
    </ul>
</nav>
