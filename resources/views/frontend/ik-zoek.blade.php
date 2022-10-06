@extends('layouts.default', ['body_class' => 'frontend-home-page'])
@section('content')
    <section class="hero">
        <div class="container">
            <div class="home-hero-text">
                <h1>Ik zoek een zorgverlener</h1>
             
            </div>
        </div>
    </section>


    <section class="our-mission">
        <div class="container">
            <div class="custom-text custom-text-2">
            @if (session()->has('message'))
                <div class="text-success" style="text-align: center;">
                    <p style="color: green; margin-top: 0px;">{{ session('message') }}</p>
                </div>
            @endif
                <h2 class="h2">Als je zoekt als hulpvrager naar een Begeleider::</h2>

                <form action="{{ route('services.store') }}" method="POST"> 
                    @csrf
                    <div class="form-group">
                        <label for="" class="main-label">Leeftijd:</label>
                            <label class="cont">Geen voorkeur
                                <input type="radio" value="Geen voorkeur" checked="checked" name="age" {{ old('name') == '1' ? 'checked' : '' }}>
                                <span class="checkmark"></span>
                            </label>
                            <p style="color: red; margin-top: 0px;">{{ $errors->first('name') }}</p>
                            <label class="cont">18-25
                                <input type="radio" name="age" value="18-25">
                                <span class="checkmark"></span>
                            </label>
                            <label class="cont">25-40
                                <input type="radio" name="age" value="25-40">
                                <span class="checkmark"></span>
                            </label>
                            <label class="cont">40-60
                                <input type="radio" name="age" value="40-60">
                                <span class="checkmark"></span>
                            </label>
                            <label class="cont">60+
                                <input type="radio" name="age" value="60+">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="" class="main-label">Afstand:</label>
                       
                            <label class="cont">Geen voorkeur
                                <input type="radio" checked="checked" name="distance" value="Geen voorkeur">
                                <span class="checkmark"></span>
                            </label>
                            <label class="cont">binnen 5 Km
                                <input type="radio" name="distance" value="binnen 5 Km">
                                <span class="checkmark"></span>
                            </label> 
                            <label class="cont">binnen 15 Km
                                <input type="radio" name="distance" value="binnen 15 Km">
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">binnen 30 Km
                                <input type="radio" name="distance" value="binnen 30 Km">
                                <span class="checkmark"></span>
                            </label>   
                        </div>
                        <div class="form-group">
                            <label for="" class="main-label">Geslacht:</label>

                            <label class="cont">Geen voorkeur
                                <input type="radio" checked="checked" name="gender" value="Geen voorkeur">
                                <span class="checkmark"></span>
                            </label>
                            <label class="cont">Man
                                <input type="radio" name="gender" value="Man">
                                <span class="checkmark"></span>
                            </label> 
                            <label class="cont">Vrouw
                                <input type="radio" name="gender" value="Vrouw">
                                <span class="checkmark"></span>
                            </label>  
                        </div>
                        <div class="form-group">
                            <label for="" class="main-label">Beschikbare dagen:</label>
                            <div class="is-checkbox">
                                <label>
                                    <input type="checkbox" checked name="days[]" value="Geen voorkeur">
                                    <span class="custom-checkbox"></span>
                                    <span>Geen voorkeur</span>
                                </label> 
                            </div>
                            <div class="is-checkbox">
                                <label>
                                    <input type="checkbox" name="days[]" value="Ma">
                                    <span class="custom-checkbox"></span>
                                    <span>Ma</span>
                                </label> 
                            </div>
                            <div class="is-checkbox">
                                <label>
                                    <input type="checkbox" name="days[]" value="Di">
                                    <span class="custom-checkbox"></span>
                                    <span>Di</span>
                                </label> 
                            </div>
                            <div class="is-checkbox">
                                <label>
                                    <input type="checkbox" name="days[]" value="Wo">
                                    <span class="custom-checkbox"></span>
                                    <span>Wo</span>
                                </label> 
                            </div> 
                            <div class="is-checkbox">
                                <label>
                                    <input type="checkbox" name="days[]" value="Do">
                                    <span class="custom-checkbox"></span>
                                    <span>Do</span>
                                </label> 
                            </div> 
                            <div class="is-checkbox">
                                <label>
                                    <input type="checkbox" name="days[]" value="Vr">
                                    <span class="custom-checkbox"></span>
                                    <span>Vr</span>
                                </label> 
                            </div> 
                            <div class="is-checkbox">
                                <label>
                                    <input type="checkbox" name="days[]" value="Za">
                                    <span class="custom-checkbox"></span>
                                    <span>Za</span>
                                </label> 
                            </div> 
                            <div class="is-checkbox">
                                <label>
                                    <input type="checkbox" name="days[]" value="Zo">
                                    <span class="custom-checkbox"></span>
                                    <span>Zo</span>
                                </label> 
                            </div> 
                        </div>
                        <div class="form-group">
                            <label for="" class="main-label">Gewenste dagdeel:</label>
                            <label class="cont">Geen voorkeur
                                <input type="radio" checked="checked" name="desired" value="Geen voorkeur">
                                <span class="checkmark"></span>
                            </label>
                            <label class="cont">Middag
                                <input type="radio" name="desired" value="Middag">
                                <span class="checkmark"></span>
                            </label> 
                            <label class="cont">Avond
                                <input type="radio" name="desired" value="Avond">
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">nacht
                                <input type="radio" name="desired" value="nacht">
                                <span class="checkmark"></span>
                            </label>  

                        </div>
                        <div class="form-group">
                            <label for="" class="main-label">Bezit rijbewijs:</label>
                            <label class="cont">Geen voorkeur
                                <input type="radio" checked="checked" name="license" value="Geen voorkeur">
                                <span class="checkmark"></span>
                            </label>
                            <label class="cont">Noodzakelijk
                                <input type="radio" checked="checked" name="license" value="Noodzakelijk">
                                <span class="checkmark"></span>
                            </label> 
                            <label class="cont">Niet van toepassing
                                <input type="radio" checked="checked" name="license" value="Niet van toepassing">
                                <span class="checkmark"></span>
                            </label>  
                        </div>
                        <div class="form-group">
                            <label for="" class="main-label">Welke status dient kandidaat te hebben (meerdere opties mogelijk)</label>

                            <label class="cont">Geen voorkeur
                                <input type="radio" checked="checked" name="candidate_status" value="Geen voorkeur">
                                <span class="checkmark"></span>
                            </label>

                            <label class="cont">Cv aanwezig
                                <input type="radio" name="candidate_status" value="Cv aanwezig">
                                <span class="checkmark"></span>
                            </label> 
                            <label class="cont">Interview gehad met intaketeam
                                <input type="radio" name="candidate_status" value="Interview gehad met intaketeam">
                                <span class="checkmark"></span>
                            </label> 
                            <label class="cont">Gecontroleerde referenties aanwezig
                                <input type="radio" name="candidate_status" value="Gecontroleerde referenties aanwezig">
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">Geldig VOG
                                <input type="radio" name="candidate_status" value="Geldig VOG">
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">Relevant certificaat of diploma aanwezig
                                <input type="radio" name="candidate_status" value="Relevant certificaat of diploma aanwezig">
                                <span class="checkmark"></span>
                            </label>   
                        </div>
                        <div class="form-group">
                            <label for="" class="main-label">Werkervaring</label>
                            <label class="cont">Niet noodzakelijk
                                <input type="radio" checked="checked" name="experience" value="Niet noodzakelijk">
                                <span class="checkmark"></span>
                            </label> 
                             <label class="cont">minimaal 1 jaar
                                <input type="radio" name="experience" value="minimaal 1 jaar">
                                <span class="checkmark"></span>
                            </label> 
                             <label class="cont">meerdere jaren
                                <input type="radio" name="experience" value="meerdere jaren">
                                <span class="checkmark"></span>
                            </label>   
                        </div>
                        <div class="form-group">
                            <label for="" class="main-label">Overig</label>
                            <label class="cont">Geen bezwaar tegen huisdieren
                                <input type="radio" checked="checked" name="other" value="Geen bezwaar tegen huisdieren">
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">niet-roker
                                <input type="radio" name="other" value="niet-roker">
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">meerdere jaren
                                <input type="radio" name="other" value="meerdere jaren">
                                <span class="checkmark"></span>
                            </label>      
                        </div>
                        <div class="form-group">
                            <label for="" class="main-label">Diensten</label>
                            <label class="cont">stofzuigen
                                <input type="radio" checked="checked" name="services" value="stofzuigen">
                                <span class="checkmark"></span>
                            </label> 
                            <label class="cont">Poetsen
                                <input type="radio" name="services" value="Poetsen">
                                <span class="checkmark"></span>
                            </label> 
                            <label class="cont">Was doen
                                <input type="radio" name="services" value="Was doen">
                                <span class="checkmark"></span>
                            </label> 
                            <label class="cont">Strijken
                                <input type="radio" name="services" value="Strijken">
                                <span class="checkmark"></span>
                            </label> 
                            <label class="cont">Tuinwerk
                                <input type="radio" name="services" value="Tuinwerk">
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">Ramen wassen
                                <input type="radio" name="services" value="Ramen wassen">
                                <span class="checkmark"></span>
                            </label>   
                            <label class="cont">Opruimen
                                <input type="radio" name="services" value="Opruimen">
                                <span class="checkmark"></span>
                            </label>    
                            <label class="cont">Boodschappen doen
                                <input type="radio" name="services" value="Boodschappen doen">
                                <span class="checkmark"></span>
                            </label>   
                            <label class="cont">Koken
                                <input type="radio" name="services" value="Koken">
                                <span class="checkmark"></span>
                            </label>     
                        </div>
                        <div class="btn_wrapper" style="justify-content: flex-start;">
                            <button type="submit" class="btn"  style="background: #DC8742;">
                                verstuur
                            </button>
                        </div>
                    </form>  
            </div>
        </div>
    </section>

    <section class="footer_image footer_image_2"></section>
    
@endsection
