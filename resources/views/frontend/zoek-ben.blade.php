@extends('layouts.default', ['body_class' => 'frontend-home-page'])
@section('content')
    <section class="hero">
        <div class="container">
            <div class="home-hero-text">
                <h1>are you looking for a <br> supervisor or care provider</h1>
            </div>
        </div>
    </section> 

    <section class="cta_section">
        <div class="container flex-container">
            <div class="card card-secondary" style="width: 60%; margin: 0 auto;">
                <h2 class="h3">are you looking for a  supervisor or care provider</h2>
                <div>
                    <a href="{{ url('/ik-zoek') }}" class="btn btn-primary" style="margin-right: 1rem;">begeleider</a>
                    <a href="{{ url('/ik-ben') }}" class="btn btn-primary">huishoudelijke hulp</a>
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
