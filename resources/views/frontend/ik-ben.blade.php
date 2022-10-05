@extends('layouts.default', ['body_class' => 'frontend-home-page'])
@section('content')
    <section class="hero">
        <div class="container">
            <div class="home-hero-text">
                <h1>Ik ben een zorgverlener</h1>
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
            <div class="custom-text custom-text-2">
            @if (session()->has('message'))
                <div class="text-success" style="text-align: center;">
                    <p style="color: green; margin-top: 0px;">{{ session('message') }}</p>
                </div>
            @endif
                <h2 class="h2">Als je zoekt als hulpvrager naar een Begeleider::</h2>
                <form action="{{ route('services-provider.store') }}" method="POST"> 
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
                            <label for="" class="main-label">Specifieke ervaring noodzakelijk met:</label>
                            <label class="cont">Geen eisen
                                <input type="radio" value="Geen eisen" checked="checked" name="specific_experience">
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">Autisme
                                <input type="radio" name="specific_experience" value="Autisme">
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">ADHD
                                <input type="radio" name="specific_experience" value="ADHD">
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">Verslaving
                                <input type="radio" name="specific_experience" value="Verslaving">
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">NAH
                                <input type="radio" name="specific_experience" value="NAH">
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">Rolstoel gebonden mensen
                                <input type="radio" name="specific_experience" value="Rolstoel gebonden mensen">
                                <span class="checkmark"></span>
                            </label> 
                            <label class="cont">Angststoornis
                                <input type="radio" name="specific_experience" value="Angststoornis">
                                <span class="checkmark"></span>
                            </label>
                            <label class="cont">Borderline-persoonlijkheidsstoornis
                                <input type="radio" name="specific_experience" value="Borderline-persoonlijkheidsstoornis">
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">Dementie
                                <input type="radio" name="specific_experience" value="Dementie">
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">Eetstoornissen
                                <input type="radio" name="specific_experience" value="Eetstoornissen">
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">Fobiën
                                <input type="radio" name="specific_experience" value="Fobiën">
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
                            <label class="cont">helpen met administratie
                                <input type="radio" checked="checked" name="services" value="helpen met administratie">
                                <span class="checkmark"></span>
                            </label> 
                            <label class="cont">helpen met daginvulling
                                <input type="radio" name="services" value="helpen met daginvulling">
                                <span class="checkmark"></span>
                            </label> 
                            <label class="cont">begeleiden bij afspraken arts/instanties/
                                <input type="radio" name="services" value="begeleiden bij afspraken arts/instanties/">
                                <span class="checkmark"></span>
                            </label> 
                            <label class="cont">samen bewegen/sporten
                                <input type="radio" name="services" value="samen bewegen/sporten">
                                <span class="checkmark"></span>
                            </label> 
                            <label class="cont">begeleiden bij externe dagbesteding
                                <input type="radio" name="services" value="begeleiden bij externe dagbesteding">
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">begeleiden bij uitstapjes (bios/theater/festival/..)
                                <input type="radio" name="services" value="begeleiden bij uitstapjes (bios/theater/festival/..)">
                                <span class="checkmark"></span>
                            </label>   
                            <label class="cont">Geen bezwaar tegen huisdieren
                                <input type="radio" name="services" value="Geen bezwaar tegen huisdieren">
                                <span class="checkmark"></span>
                            </label>    
                            <label class="cont">niet-roker
                                <input type="radio" name="services" value="niet-roker">
                                <span class="checkmark"></span>
                            </label>   
                            <label class="cont">meerdere jaren
                                <input type="radio" name="services" value="meerdere jaren">
                                <span class="checkmark"></span>
                            </label>     
                        </div>
                        <div class="btn_wrapper" style="justify-content: flex-start;">
                            <button type="submit" class="btn" style="background: #DC8742;">
                                verstuur
                            </button>
                        </div>
                        
                    </form>  
            </div>
        </div>
    </section>

    <section class="footer_image footer_image_2"></section>
    
@endsection
