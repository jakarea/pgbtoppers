@extends('layouts.default', ['body_class' => 'frontend-profile-page'])
@section('content')

<section class="profile">
    <div class="container">
        <div class="flex-container">
            <aside>
                <div class="profile_image">
                    <img src="{{ asset('images/thijs_round.png') }}" class="img-responsive" alt="profile">
                </div>
                <div class="profile_additional_information">
                    <span class="h4">Additionele informatie</span>
                    <ul>
                        <li>
                        </li>
                    </ul>
                </div>
            </aside>
            <div class="profile_contact_data">
                <h1 class="h1">Thijs Roelofse</h1>
                <span class="h4">Contactgegevens</span>
                <div>
                    <span>de Smidse 21 </span>
                    <span>1234 AB, Westervoort </span>
                    <div>
                        <span><b>Telefoon overdag</b></span>
                        <span>+31 6 987 654 321</span>
                    </div>
                    <div>
                        <span><b>Telefoon avond</b></span>
                        <span>+31 6 123 456 789</span>
                    </div>
                    <div>
                        <span>01-01-1988</span>
                    </div>
                    <div>
                        <button type="button" class="btn btn-secondary">
                            Verstuur uitnodiging
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="h2">Beschikbaarheid</h2>
    </div>
</section>

@endsection
