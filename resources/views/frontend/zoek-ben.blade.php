@extends('layouts.default', ['body_class' => 'frontend-home-page'])
@section('content')
    <section class="hero">
        <div class="container">
            <div class="home-hero-text">
                <h1>Ben je op zoek naar een begeleider of huishoudelijke hulp?</h1>
            </div>
        </div>
    </section> 

    <section class="cta_section">
        <div class="container flex-container">
            <div class="card card-secondary" style="width: 60%; margin: 0 auto;">
                <h2 class="h3">Zoekt u een begeleider of zorgverlener</h2>
                <div>
                    <a href="{{ url('/zorgverleners') }}" class="btn btn-primary" style="margin-right: 1rem;">Begeleider</a>
                    <a href="{{ url('/huishoudelijke-hulp') }}" class="btn btn-primary">Huishoudelijke hulp</a>
                </div>
            </div>
            <!-- <div class="card card-secondary" style="width: 40%; margin: 0 auto;"> 
                <h2 class="h3">ik ben op zoek naar een zorgverlener</h2>
                <div>
                    <a href="{{ url('/ik-ben') }}" class="btn btn-primary">huishoudelijke hulp</a>
                </div>
            </div> -->
        </div>
    </section>
  
    
@endsection
