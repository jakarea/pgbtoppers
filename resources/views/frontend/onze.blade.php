@extends('layouts.default', ['body_class' => 'frontend-home-page'])
@section('content')
    <section class="hero">
        <div class="container">
            <div class="home-hero-text">
                <h1>ONZE AMBITIE</h1>
                
            </div>
        </div>
    </section>

    <section class="our-mission">
        <div class="container">
            <div class="content_alinea col custom-text"> 
                <p>Als je zorg nodig hebt kan dat bijvoorbeeld via een zorginstelling. Zij bewaken de kwaliteit en moeten voldoen aan allerlei wettelijke eisen. Als je echter zelf de regie wilt voeren over de zorg is een persoonsgebonden budget (PGB) een goede uitkomst.</p>
               <p>Een PGB brengt ook allerlei verplichtingen en administratieve verantwoordelijkheden met zich mee. Hierover is voldoende informatie te vinden op internet.</p>

               <p>Vooral het vinden van goede betrouwbare huishoudelijke hulpen en begeleiders is een lastige opgave. PGBToppers probeert het kaf van het koren te scheiden door een goede screening.</p>

               <p>Alle zorgverleners hebben ook een persoonlijke intake gehad bij PGBToppers.
Onze ambitie is dat wij over enkele jaren niet meer nodig zijn. Tot die tijd willen wij jou graag helpen om de zorgverleners te krijgen die je verdient.</p>
            </div>
        </div>
    </section>


    <section class="about-us" style="padding: 120px 0px;">
        <div class="container flex-container">
            <div class="content_alinea col custom-text">
                <h2 class="h2 is-centered">LEES MEER OVER DE ERVARINGEN </h2>
            </div>
        </div>
    </section>

    <section class="reviews" style="margin-top: 100px;">
        <div class="container">
            <div class="flex-container">
                <div class="review card">
                    <div class="review_quote">
                        <i class="fa fa-quote-right" aria-hidden="false"></i>
                    </div>
                    <div class="review_image">
                        <img src="https://ui-avatars.com/api/?background=random&amp;name=ClaraLean&amp;" alt="Review person" class="img-responsive">
                    </div>
                    <div class="review_content">
                        <span class="h4">Clara Lean</span>
                        <span class="h5">Pgber</span>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation nummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud ex</p>
                    </div>
                </div>
                <div class="review card">
                    <div class="review_quote">
                        <i class="fa fa-quote-right" aria-hidden="false"></i>
                    </div>
                    <div class="review_image">
                        <img src="{{ asset('images/thijs_round.png') }}" alt="Review person" class="img-responsive">
                    </div>
                    <div class="review_content">
                        <span class="h4">LAURA ZAANDAM</span>
                        <span class="h5">ZORGVERLENER</span>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud tation nummy nibh euismod tincidunt ut laoreet dolore ma</p>
                    </div>
                </div>
                <div class="review card">
                    <div class="review_quote">
                        <i class="fa fa-quote-right" aria-hidden="false"></i>
                    </div>
                    <div class="review_image">
                        <img src="{{ asset('images/thijs_round.png') }}" alt="Review person" class="img-responsive">
                    </div>
                    <div class="review_content">
                        <span class="h4">TOM DE LANGE</span>
                        <span class="h5">PGBER</span>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation nummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud ex</p>
                    </div>
                </div>
            </div> 
        </div>
    </section>

    <section class="about-us" style="background-color: #2A4250; padding: 120px 0px;">
        <div class="container flex-container">
            <div class="content_alinea col custom-text">
                <h2 class="h2" style="color:#DC8742;">Hoe gaat PGB Toppers te werk</h2>
                <p style="color:#fff;">Er zijn veel budgethouders die moeite hebben met het vinden van goede, betrouwbare zorgverleners.</p>

                <p style="color:#fff;">Vanuit de vraagzijde is er behoefte aan een aanbod van betrouwbare, gecontroleerde, gecertificeerde zorgverleners. Juist op het niveau van huishoudelijke hulp en begeleiders. Het komt steeds vaker voor dat zorg onvoldoende wordt geleverd, van onvoldoende kwaliteit is en dat mensen werken zonder bijvoorbeeld een VOG. </p>

                <p style="color:#fff;">PGBToppers screent zorgverleners. Hierbij worden, in een persoonlijk gesprek, de volgende aspecten besproken: <br>
                <br>

• Algeheel profiel en ingevulde vragenlijst <br>
• CV <br>
• Diploma’s / certificaten <br>
• VOG <br>
• Referenties <br>
</p>
            </div>
        </div>
    </section>

    <div class="btn-hero" style="margin: 80px 0px;">
        <button class="btn btn-secondary">JA, IK WIL GRAAG EEN ONLINE INTAKE! </button>
    </div>

      
    <section class="footer_image footer_image_3"></section>
 
    
@endsection
