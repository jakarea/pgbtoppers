<nav class="main-menu">
    <ul class="flex-container">
        <li>
            <a href="{{ route('frontend.ikzoek') }}" class="{{ (request()->is('ik-zoek')) ? 'active' : '' }}">
            IK ZOEK EEN ZORGVERLENER (buyer)
            </a>
        </li>
        <li>
            <a href="{{ route('frontend.ikben') }}" class="{{ (request()->is('ik-ben')) ? 'active' : '' }}">
            Ik BEN EEN ZORGVERLENER (seller)
            </a>
        </li>
        <li>
            <a href="{{ route('frontend.meld') }}" class="{{ (request()->is('meld')) ? 'active' : '' }}">
            MELD ME
            </a>
        </li>
        
        <li>
            <a href="{{ route('frontend.onze') }}" class="{{ (request()->is('onze')) ? 'active' : '' }}">
            ONZE AMBITIE
            </a>
        </li>
    </ul>
</nav>
