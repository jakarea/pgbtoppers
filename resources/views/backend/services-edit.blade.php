@extends('layouts.dashboard')

@section('content')

<div class="container">
            <div class="custom-text custom-text-2">
            @if (session()->has('message'))
                <div class="text-success" style="text-align: center;">
                    <p style="color: green; margin-top: 0px;">{{ session('message') }}</p>
                </div>
            @endif
                <h2 class="h2">Edit Information</h2>
                <form action="{{ route('services.update',$service->id) }}" method="POST"> 
                    @csrf
                    <div class="form-group">
                        <label for="" class="main-label">Leeftijd:</label>
                            <label class="cont">Geen voorkeur
                                <input type="radio" value="Geen voorkeur" name="age" {{ $service->age == 'Geen voorkeur' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>
                            <p style="color: red; margin-top: 0px;">{{ $errors->first('name') }}</p>
                            <label class="cont">18-25
                                <input type="radio" name="age" value="18-25" {{ $service->age == '18-25' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>
                            <label class="cont">25-40
                                <input type="radio" name="age" value="25-40" {{ $service->age == '25-40' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>
                            <label class="cont">40-60
                                <input type="radio" name="age" value="40-60" {{ $service->age == '40-60' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>
                            <label class="cont">60+
                                <input type="radio" name="age" value="60+" {{ $service->age == '60+' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="" class="main-label">Afstand:</label>
                       
                            <label class="cont">Geen voorkeur
                                <input type="radio" name="distance" value="Geen voorkeur" {{ $service->distance == 'Geen voorkeur' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>
                            <label class="cont">binnen 5 Km
                                <input type="radio" name="distance" value="binnen 5 Km" {{ $service->distance == 'binnen 5 Km' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label> 
                            <label class="cont">binnen 15 Km
                                <input type="radio" name="distance" value="binnen 15 Km" {{ $service->distance == 'binnen 15 Km' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">binnen 30 Km
                                <input type="radio" name="distance" value="binnen 30 Km" {{ $service->distance == 'binnen 30 Km' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>   
                        </div>
                        <div class="form-group">
                            <label for="" class="main-label">Geslacht:</label>

                            <label class="cont">Geen voorkeur
                                <input type="radio" name="gender" value="Geen voorkeur" {{ $service->gender == 'Geen voorkeur' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>
                            <label class="cont">Man
                                <input type="radio" name="gender" value="Man" {{ $service->gender == 'Man' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label> 
                            <label class="cont">Vrouw
                                <input type="radio" name="gender" value="Vrouw" {{ $service->gender == 'Vrouw' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>  
                        </div>
                        <div class="form-group">
                            <label for="" class="main-label">Beschikbare dagen:</label>
                            <div class="is-checkbox">
                                <label>
                                    <input type="checkbox"  name="days[]" value="Geen voorkeur" {{ $service->days == 'Geen voorkeur' ? 'checked' : ''}}>
                                    <span class="custom-checkbox"></span>
                                    <span>Geen voorkeur</span>
                                </label> 
                            </div>
                            <div class="is-checkbox">
                                <label>
                                    <input type="checkbox" name="days[]" value="Ma" {{ $service->days == 'Ma' ? 'checked' : ''}}>
                                    <span class="custom-checkbox"></span>
                                    <span>Ma</span>
                                </label> 
                            </div>
                            <div class="is-checkbox">
                                <label>
                                    <input type="checkbox" name="days[]" value="Di" {{ $service->days == 'Di' ? 'checked' : ''}}>
                                    <span class="custom-checkbox"></span>
                                    <span>Di</span>
                                </label> 
                            </div>
                            <div class="is-checkbox">
                                <label>
                                    <input type="checkbox" name="days[]" value="Wo" {{ $service->days == 'Wo' ? 'checked' : ''}}>
                                    <span class="custom-checkbox"></span>
                                    <span>Wo</span>
                                </label> 
                            </div> 
                            <div class="is-checkbox">
                                <label>
                                    <input type="checkbox" name="days[]" value="Do" {{ $service->days == 'Do' ? 'checked' : ''}}>
                                    <span class="custom-checkbox"></span>
                                    <span>Do</span>
                                </label> 
                            </div> 
                            <div class="is-checkbox">
                                <label>
                                    <input type="checkbox" name="days[]" value="Vr" {{ $service->days == 'Vr' ? 'checked' : ''}}>
                                    <span class="custom-checkbox"></span>
                                    <span>Vr</span>
                                </label> 
                            </div> 
                            <div class="is-checkbox">
                                <label>
                                    <input type="checkbox" name="days[]" value="Za" {{ $service->days == 'Za' ? 'checked' : ''}}>
                                    <span class="custom-checkbox"></span>
                                    <span>Za</span>
                                </label> 
                            </div> 
                            <div class="is-checkbox">
                                <label>
                                    <input type="checkbox" name="days[]" value="Zo" {{ $service->days == 'Zo' ? 'checked' : ''}}>
                                    <span class="custom-checkbox"></span>
                                    <span>Zo</span>
                                </label> 
                            </div> 
                        </div>
                        <div class="form-group">
                            <label for="" class="main-label">Gewenste dagdeel:</label>
                            <label class="cont">Geen voorkeur
                                <input type="radio" name="desired" value="Geen voorkeur" {{ $service->desired == 'Geen voorkeur' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>
                            <label class="cont">Middag
                                <input type="radio" name="desired" value="Middag" {{ $service->desired == 'Middag' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label> 
                            <label class="cont">Avond
                                <input type="radio" name="desired" value="Avond" {{ $service->desired == 'Avond' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">nacht
                                <input type="radio" name="desired" value="nacht" {{ $service->desired == 'nacht' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>  

                        </div>
                        <div class="form-group">
                            <label for="" class="main-label">Bezit rijbewijs:</label>
                            <label class="cont">Geen voorkeur
                                <input type="radio" name="license" value="Geen voorkeur" {{ $service->license == 'Geen voorkeur' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>
                            <label class="cont">Noodzakelijk
                                <input type="radio" name="license" value="Noodzakelijk" {{ $service->license == 'Noodzakelijk' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label> 
                            <label class="cont">Niet van toepassing
                                <input type="radio" name="license" value="Niet van toepassing" {{ $service->license == 'Niet van toepassing' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>  
                        </div>
                        <div class="form-group">
                            <label for="" class="main-label">Welke status dient kandidaat te hebben (meerdere opties mogelijk)</label>

                            <label class="cont">Geen voorkeur
                                <input type="radio" name="candidate_status" value="Geen voorkeur" {{ $service->candidate_status == 'Geen voorkeur' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>

                            <label class="cont">Cv aanwezig
                                <input type="radio" name="candidate_status" value="Cv aanwezig" {{ $service->candidate_status == 'Cv aanwezig' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label> 
                            <label class="cont">Interview gehad met intaketeam
                                <input type="radio" name="candidate_status" value="Interview gehad met intaketeam" {{ $service->candidate_status == 'Interview gehad met intaketeam' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label> 
                            <label class="cont">Gecontroleerde referenties aanwezig
                                <input type="radio" name="candidate_status"  value="Gecontroleerde referenties aanwezig" {{ $service->candidate_status == 'Gecontroleerde referenties aanwezig' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">Geldig VOG
                                <input type="radio" name="candidate_status" value="Geldig VOG" {{ $service->candidate_status == 'Geldig VOG' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">Relevant certificaat of diploma aanwezig
                                <input type="radio" name="candidate_status" value="Relevant certificaat of diploma aanwezig" {{ $service->candidate_status == 'Relevant certificaat of diploma aanwezig' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>   
                        </div>
                        <div class="form-group">
                            <label for="" class="main-label">Werkervaring</label>
                            <label class="cont">Niet noodzakelijk
                                <input type="radio" name="experience" value="Niet noodzakelijk" {{ $service->experience == 'Niet noodzakelijk' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label> 
                             <label class="cont">minimaal 1 jaar
                                <input type="radio" name="experience" value="minimaal 1 jaar" {{ $service->experience == 'minimaal 1 jaar' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label> 
                             <label class="cont">meerdere jaren
                                <input type="radio" name="experience" value="meerdere jaren" {{ $service->experience == 'meerdere jaren' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>   
                        </div>
                        <div class="form-group">
                            <label for="" class="main-label">Specifieke ervaring noodzakelijk met:</label>
                            <label class="cont">Geen eisen
                                <input type="radio" value="Geen eisen" name="specific_experience" {{ $service->specific_experience == 'Geen eisen' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">Autisme
                                <input type="radio" name="specific_experience" value="Autisme" {{ $service->specific_experience == 'Autisme' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">ADHD
                                <input type="radio" name="specific_experience" value="ADHD" {{ $service->specific_experience == 'ADHD' ? 'checked' : ''}} >
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">Verslaving
                                <input type="radio" name="specific_experience" value="Verslaving" {{ $service->specific_experience == 'Verslaving' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">NAH
                                <input type="radio" name="specific_experience" value="NAH" {{ $service->specific_experience == 'NAH' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">Rolstoel gebonden mensen
                                <input type="radio" name="specific_experience" value="Rolstoel gebonden mensen" {{ $service->specific_experience == 'Rolstoel gebonden mensen' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label> 
                            <label class="cont">Angststoornis
                                <input type="radio" name="specific_experience" value="Angststoornis" {{ $service->specific_experience == 'Angststoornis' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>
                            <label class="cont">Borderline-persoonlijkheidsstoornis
                                <input type="radio" name="specific_experience" value="Borderline-persoonlijkheidsstoornis" {{ $service->specific_experience == 'Borderline-persoonlijkheidsstoornis' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">Dementie
                                <input type="radio" name="specific_experience" value="Dementie" {{ $service->specific_experience == 'Dementie' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">Eetstoornissen
                                <input type="radio" name="specific_experience" value="Eetstoornissen" {{ $service->specific_experience == 'Eetstoornissen' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">Fobiën
                                <input type="radio" name="specific_experience" value="Fobiën" {{ $service->specific_experience == 'Fobiën' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>  
                            
                        </div>
                        <div class="form-group">
                            <label for="" class="main-label">Overig</label>
                            <label class="cont">Geen bezwaar tegen huisdieren
                                <input type="radio" name="other" value="Geen bezwaar tegen huisdieren" {{ $service->other == 'Geen bezwaar tegen huisdieren' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">niet-roker
                                <input type="radio" name="other" value="niet-roker" {{ $service->other == 'niet-roker' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">meerdere jaren
                                <input type="radio" name="other" value="meerdere jaren" {{ $service->other == 'meerdere jaren' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>      
                        </div>
                        <div class="form-group">
                            <label for="" class="main-label">Diensten</label>
                            <label class="cont">helpen met administratie
                                <input type="radio" name="services" value="helpen met administratie" {{ $service->services == 'helpen met administratie' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label> 
                            <label class="cont">helpen met daginvulling
                                <input type="radio" name="services" value="helpen met daginvulling" {{ $service->services == 'helpen met daginvulling' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label> 
                            <label class="cont">begeleiden bij afspraken arts/instanties/
                                <input type="radio" name="services" value="begeleiden bij afspraken arts/instanties/" {{ $service->services == 'egeleiden bij afspraken arts/instanties' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label> 
                            <label class="cont">samen bewegen/sporten
                                <input type="radio" name="services" value="samen bewegen/sporten" {{ $service->services == 'samen bewegen/sporten' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label> 
                            <label class="cont">begeleiden bij externe dagbesteding
                                <input type="radio" name="services" value="begeleiden bij externe dagbesteding" {{ $service->services == 'begeleiden bij externe dagbesteding' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>  
                            <label class="cont">begeleiden bij uitstapjes (bios/theater/festival/..)
                                <input type="radio" name="services" value="begeleiden bij uitstapjes (bios/theater/festival/..)" {{ $service->services == 'begeleiden bij uitstapjes (bios/theater/festival/..)' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>   
                            <label class="cont">Geen bezwaar tegen huisdieren
                                <input type="radio" name="services" value="Geen bezwaar tegen huisdieren" {{ $service->services == 'Geen bezwaar tegen huisdieren' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>    
                            <label class="cont">niet-roker
                                <input type="radio" name="services" value="niet-roker" {{ $service->services == 'niet-roker' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>   
                            <label class="cont">meerdere jaren
                                <input type="radio" name="services" value="meerdere jaren" {{ $service->services == 'meerdere jaren' ? 'checked' : ''}}>
                                <span class="checkmark"></span>
                            </label>     
                        </div>
                        <div class="btn_wrapper mb-4" style="justify-content: flex-start;">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                    </form>  
            </div>
        </div>

@endsection