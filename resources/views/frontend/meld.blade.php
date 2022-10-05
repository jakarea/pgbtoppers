@extends('layouts.default', ['body_class' => 'frontend-home-page'])
@section('content')
    <section class="hero">
        <div class="container">
            <div class="home-hero-text">
                <h1>Meld mij aan</h1>
                <div class="btn-hero">
                    <a href="#" class="btn btn-secondary">
                    CONTACT
                    </a>
                </div>
            </div>
        </div>
    </section>
 

    <section class="our-mission">
        <div class="container">
            <div class="content_alinea col custom-text">
                <h2 class="h2 is-centered">Hoe werkt het proces</h2>
                <p>Proces: zorgverlener kan zich online aanmelden. Als het huishoudelijke hulp betreft: kort CV en een geldige VOG verklaring noodzakelijk. Minimaal 2 referenties. Indien er geen referenties zijn betreft het een starter en zal dit als label ook op de site te zien zijn. Na aanmelding volgt een online (camera) intakegesprek plaats op basis van een ‘intake-script’ (vragen nog verzinnen). </p>

                <p>Vervolgens worden de mogelijke referenties benaderd. Indien een opdracht wordt uitgevoerd wordt na afloop een evaluatie </p>
                <p>gedaan met de zorgvrager. Die geldt dan als nieuwe referentie. Eventueel kan er met cijfers gewerkt worden die door de referenties zijn gegeven.</p>
                <p>In het geval van een zorgvraag naar begeleiding zal de bovenstaand proces grotendeels gelijk zijn. De intake zal inhoudelijk zwaarder zijn gericht op de expertise van de zorgverlener in combinatie met de hulpvraag van de client.</p>
                <div class="btn-hero">
                    <a href="#" class="btn btn-secondary">Ja, ik meld mij graag aan! </a>
                </div>
            </div>
        </div>
    </section>
 

    <section class="our-mission">
        <div class="container">
            <div class="content_alinea col custom-text">
                <h2 class="h2 is-centered">Wat gebeurt er als ik mij aanmeldt?</h2>
                <p>Als huishoudelijke hulp of begeleider kan je je door op onderstaande button te klikken aanmelden.</p>

                <p>Je wordt dan gevraagd om jouw e-mailadres en naam op te geven en of je huishoudelijke hulp bent en/of begeleider. Ons intaketeam ontvangt dan jouw verzoek waarna je een informatie- en een inschrijfformulier ontvangt.</p>
                <p>Het informatieformulier beschrijft de gang van zaken en geeft ook aan welke stukken we nodig hebben tijdens de intake. Zodra wij het ondertekende inschrijfformulier retour hebben volgt er een persoonlijk intake via internet. Als dat goed </p>
                 
            </div>
        </div>
    </section>
 
 

    <section class="footer_image footer_image_2"></section>

    <!-- <section class="sign-up">
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
    </section> -->

    <!-- <section class="intake_home">
        <div class="container">
            <h2 class="h1">
                Ben jij een huishoudelijke hulp of begeleider die betrouwbaar is en gaat voor kwaliteit?
            </h2>
            <div class="btn_wrapper">
                <a href="{{ route('intake.index') }}" class="btn btn-secondary">Ja, ik wil graag een online intake! </a>
            </div>
        </div>
    </section> -->

    
@endsection
