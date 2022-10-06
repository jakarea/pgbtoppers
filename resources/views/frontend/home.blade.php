@extends('layouts.default', ['body_class' => 'frontend-home-page'])
@section('content')
    <section class="hero">
        <div class="container">
            <div class="home-hero-text">
                <h1>Ben jij op zoek naar een <br>
betrouwbare huishoudelijke <br>
hulp of begeleider?</h1>
                <div class="btn-hero">
                    <a href="{{ route('intake.index') }}" class="btn btn-secondary">
                    MEER INFORMATIE! 
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="statistics">
        <div class="container flex-container">
            <div class="statistic">
                <div>
                    <i class="fa fa-users" aria-hidden="false"></i>
                </div>
                <span class="statistic_number h2">
                    8
                </span>
                <span class="h5 is-secondary">Matches dit jaar</span>
            </div>
            <div class="statistic">
                <div>
                    <i class="fa fa-building" aria-hidden="false"></i>
                </div>
                <span class="statistic_number h2">
                    12
                </span>
                <span class="h5 is-secondary">Aangesloten PGBToppers</span>
            </div>
            <div class="statistic">
                <div>
                    <i class="fa fa-map-marker"></i>
                </div>
                <span class="statistic_number h2">
                    4
                </span>
                <span class="h5 is-secondary">Nieuwe inschrijvingen</span>
            </div>
        </div>
    </section>

    <section class="about-us">
        <div class="container flex-container">
            <div class="content_alinea col custom-text">
                <h2 class="h2 is-centered">Waarom PGBToppers?</h2>
                <p>
                Een groot knelpunt waar veel budgethouders tegenaan lopen is het selecteren van de juiste zorgverleners. Voor Verzorging en Verpleging gelden meer wettelijke regels, diploma’s en registraties dan voor Huishoudelijke hulp en Begeleiding. 
                </p>
                <p> Om toch een basis kwaliteit te garanderen is PGBToppers opgericht. Wij screenen Huishoudelijke hulpen en Begeleiders en andersom zijn zij bereid een dergelijke screening te ondergaan. </p>

                <p>Dat geeft geen garanties dat er een goede match komt maar als budgethouder weet je wel wat dat aan bepaalde basisvoorwaarden is voldaan.</p>
 
            </div>
        </div>
    </section>

    <section class="our-mission">
        <div class="container">
            <div class="content_alinea col custom-text">
                <h2 class="h2 is-centered">Onze Screening</h2>
                <p> Zorgverleners die zich bij ons aanmelden wordt gescreend. Zij krijgen een inschrijfformulier met allerlei vragen.  </p>

                <p>De antwoorden worden in een persoonlijk gesprek besproken. Tevens controleren wij of het algemene profiel dat een zorgverlener opgeeft klopt met onze ervaring. </p>
                <p> Ook vragen wij naar een geldige VOG, referenties en eventuele certificaten en/of diploma’s. De referenties trekken wij ook na.</p> 
               
            </div>
        </div>
    </section>

    <section class="cta_section">
        <div class="container flex-container">
            <div class="card card-secondary">
                <h2 class="h3">Zoek jij een betrouwbare gecontroleerde zorgverlener?</h2>
                <div>
                    <a href="{{ route('intake.index') }}" class="btn btn-primary">Ja graag </a>
                </div>
            </div>
            <div class="card card-secondary">
                <h2 class="h3">Ben jij een betrouwbare zorgverlener die gaat voor kwaliteit?</h2>
                <div>
                    <a href="{{ route('intake.index') }}" class="btn btn-primary">Ja, hoe verder? </a>
                </div>
            </div>
        </div>
    </section>
 
    <section class="reviews">
        <div class="container">
            <div class="flex-container">
            @foreach($testmonial as $test)
            <div class="review card">
                    <div class="review_quote">
                        <i class="fa fa-quote-right" aria-hidden="false"></i>
                    </div>
                    <div class="review_image">
                    <img src="{{ asset('images/testimonial/'.$test->image) }}" alt="advisor Image" class="img-fluid" style="width: 130px; height: 130px; border-radius: 50%; object-fit: cover;">
                    </div>
                    <div class="review_content">
                        <span class="h4">{{ $test->name }}</span>
                        <span class="h5">{{ $test->designation }}</span>
                        <p>{{ $test->description }}</p>
                    </div>
                </div> 
            @endforeach
               
            </div>
            <!-- <div class="custom-h5">
                <h5>Klik hier en lees hier nog meer over de ervaring en verhalen over een van onze PGBToppers.</h5>
            </div>
            <div class="btn-hero">
                <a href="#" class="btn btn-secondary">
                Schrijf een review 
                </a>
            </div> -->
        </div>
    </section> 

    <section class="footer_image"></section>

    <section class="sign-up" style="margin-top: 100px;" id="contact">
        <div class="container">
            <div class="card card-primary">
                <div>
                    <h3 class="h2">
                        Pgbtoppers eenvouding en snel<br>
                        een bij jou passende match
                    </h3>
                </div>
                <div class="flex-container">
                    <div class="sign_up_pros">
                        <span class="h4">Wij leveren:</span>
                        <ul>
                            <li> Grote database met opdrachten en zzp'ers</li>
                            <li> 24/7 beschikbaar </li>
                            <li>Geen papierwerk, van overeenkomst tot facturatie </li>
                        </ul>
                    </div>
                    <div class="sign_up_form">
                        @include('partials.frontend.forms.sign_up')
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="intake_home">
        <div class="container">
            <h2 class="h1">
                Ben jij een huishoudelijke hulp of begeleider die betrouwbaar is en gaat voor kwaliteit?
            </h2>
            <div class="btn_wrapper">
                <a href="{{ route('intake.index') }}" class="btn btn-secondary">Ja, ik wil graag een online intake! </a>
            </div>
        </div>
    </section>

    
@endsection
