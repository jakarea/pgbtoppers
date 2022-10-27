@extends('layouts.default', ['body_class' => 'frontend-home-page'])
@section('content')
    <section class="hero">
        <div class="container">
            <div class="home-hero-text">
                <h1>IK ZOEK EEN ZORGVERLENER</h1>
            </div>
        </div>
    </section>

    <section class="zoek-view-sec">
        <div class="container"> 
            <h1 class="mb-5" style="font-size: 2.4rem; font-family: Arial, Helvetica, sans-serif; margin-bottom: 30px;">Zorgverleners</h1>
        </div>
        <div class="container">
            <div class="secondary-parent-wrap">
                <div class="left-sidebar-filter-wrap">
                    <form action="" method="GET">
                        <div class="services-filter">
                            <div class="filter-wrap">
                                <span>Afstand:</span>
                                @php 
                                $distance = isset($_GET['distance']) ? $_GET['distance'] : '';
                                @endphp
                                <select name="distance" id="">
                                    <option value="">Selecteer</option>
                                    <option value="Geen voorkeur" {{ $distance == 'Geen voorkeur' ? 'selected' : ''}}>Geen voorkeur</option>
                                    <option value="binnen 5 Km"  {{ $distance == 'binnen 5 Km' ? 'selected' : ''}}>binnen 5 Km</option>
                                    <option value="binnen 15 Km" {{ $distance == 'binnen 15 Km' ? 'selected' : ''}}>binnen 15 Km</option>
                                    <option value="binnen 30 Km" {{ $distance == 'binnen 30 Km' ? 'selected' : ''}}>binnen 30 Km</option> 
                                </select>
                            </div>
                            <div class="filter-wrap">
                                <span>Geslacht:</span>
                                @php 
                                $gender = isset($_GET['gender']) ? $_GET['gender'] : '';
                                @endphp
                                <select name="gender" id="">
                                    <option value="">Selecteer</option>
                                    <option value="Geen voorkeur"  {{ $gender == 'Geen voorkeur' ? 'selected' : ''}}>Geen voorkeur</option>
                                    <option value="Man" {{ $gender == 'Man' ? 'selected' : ''}}>Man</option>
                                    <option value="Vrouw" {{ $gender == 'Vrouw' ? 'selected' : ''}}>Vrouw</option> 
                                </select>
                            </div> 
                            <div class="filter-wrap">
                                <span>Leeftijd:</span>
                                @php 
                                
                                $age = isset($_GET['age']) ? $_GET['age'] : [];
                                
                                @endphp
                                <div class="d-flexx">
                                    <div class="is-checkbox" style="margin-left: 0px; margin-top: 12px;">
                                        <label>
                                            <input type="checkbox" name="age[]" value="Geen voorkeur" {{ in_array('Geen voorkeur', $age) ? 'checked' : '' }}>
                                            <span class="custom-checkbox"></span>
                                            <span>Geen voorkeur</span>
                                        </label> 
                                    </div>
                                    <div class="is-checkbox" style="margin-left: 0px; margin-top: 6px;">
                                        <label>
                                            <input type="checkbox" name="age[]" value="18-25" {{ in_array('18-25', $age) ? 'checked' : '' }}>
                                            <span class="custom-checkbox"></span>
                                            <span>18-25</span>
                                        </label> 
                                    </div>
                                    <div class="is-checkbox" style="margin-left: 0px; margin-top: 6px;">
                                        <label>
                                            <input type="checkbox" name="age[]" value="25-40" {{ in_array('25-40', $age) ? 'checked' : '' }}>
                                            <span class="custom-checkbox"></span>
                                            <span>25-40</span>
                                        </label> 
                                    </div>
                                    <div class="is-checkbox" style="margin-left: 0px; margin-top: 6px;">
                                        <label>
                                            <input type="checkbox" name="age[]" value="40-60" {{ in_array('40-60', $age) ? 'checked' : '' }}>
                                            <span class="custom-checkbox"></span>
                                            <span>40-60</span>
                                        </label> 
                                    </div>
                                    <div class="is-checkbox" style="margin-left: 0px; margin-top: 6px;">
                                        <label>
                                            <input type="checkbox" name="age[]" value="60+" {{ in_array('60+', $age) ? 'checked' : '' }}>
                                            <span class="custom-checkbox"></span>
                                            <span>60+</span>
                                        </label> 
                                    </div>
                                </div>
                            </div>
                            <div class="filter-wrap custom-text-2">
                                <div class="form-group">
                                    <span>Beschikbare dagen:</span>
                                        @php 
                                        $days = isset($_GET['days']) ? $_GET['days'] : [];
                                        
                                        @endphp
                                    <div class="d-flexx">
                                        <div class="is-checkbox" style="margin-left: 0px;">
                                            <label>
                                                <input type="checkbox" name="days[]" value="Geen voorkeur" {{ in_array('Geen voorkeur', $days) ? 'checked' : '' }}>
                                                <span class="custom-checkbox"></span>
                                                <span>Geen voorkeur</span>
                                            </label> 
                                        </div>
                                        <div class="is-checkbox" style="margin-left: 0px;  width: 35%">
                                            <label>
                                                <input type="checkbox" name="days[]" value="Ma" {{ in_array('Ma', $days) ? 'checked' : '' }}>
                                                <span class="custom-checkbox"></span>
                                                <span>Ma</span>
                                            </label> 
                                        </div>
                                    </div> 
                                    <div class="d-flexx">
                                    <div class="is-checkbox" style="margin-left: 0px;">
                                            <label>
                                                <input type="checkbox" name="days[]" value="Di" {{ in_array('Di', $days) ? 'checked' : '' }}>
                                                <span class="custom-checkbox"></span>
                                                <span>Di</span>
                                            </label> 
                                        </div>
                                    <div class="is-checkbox" style="margin-left: 0px;">
                                        <label>
                                            <input type="checkbox" name="days[]" value="Wo" {{ in_array('Wo', $days) ? 'checked' : '' }}>
                                            <span class="custom-checkbox"></span>
                                            <span>Wo</span>
                                        </label> 
                                    </div> 
                                    <div class="is-checkbox" style="margin-left: 0px;">
                                        <label>
                                            <input type="checkbox" name="days[]" value="Do" {{ in_array('Do', $days) ? 'checked' : '' }}>
                                            <span class="custom-checkbox"></span>
                                            <span>Do</span>
                                        </label> 
                                    </div> 
                                    </div>
                                    <div class="d-flexx">
                                    <div class="is-checkbox" style="margin-left: 0px;">
                                        <label>
                                            <input type="checkbox" name="days[]" value="Vr" {{ in_array('Vr', $days) ? 'checked' : '' }}>
                                            <span class="custom-checkbox"></span>
                                            <span>Vr</span>
                                        </label> 
                                    </div> 
                                    <div class="is-checkbox" style="margin-left: 0px;">
                                        <label>
                                            <input type="checkbox" name="days[]" value="Za" {{ in_array('Za', $days) ? 'checked' : '' }}>
                                            <span class="custom-checkbox"></span>
                                            <span>Za</span>
                                        </label> 
                                    </div>
                                    <div class="is-checkbox" style="margin-left: 0px;">
                                        <label>
                                            <input type="checkbox" name="days[]" value="Zo" {{ in_array('Zo', $days) ? 'checked' : '' }}>
                                            <span class="custom-checkbox"></span>
                                            <span>Zo</span>
                                        </label> 
                                    </div> 
                                    </div> 
                                </div>
                            </div>
                            <div class="filter-wrap custom-text-2">
                                <div class="form-group">
                                    <span>Gewenste dagdeel:</span>
                                    @php 
                                    $desired = isset($_GET['desired']) ? $_GET['desired'] : [];
                                    @endphp 
                                    <div class="d-flexx">
                                        <div class="is-checkbox" style="margin-left: 0px;">
                                            <label>
                                                <input type="checkbox" name="desired[]" value="Ma" {{ in_array('Ma', $desired) ? 'checked' : '' }}>
                                                <span class="custom-checkbox"></span>
                                                <span>Geen voorkeur</span>
                                            </label> 
                                        </div>
                                        <div class="is-checkbox" style="margin-left: 0px; width: 35%">
                                            <label>
                                                <input type="checkbox" name="desired[]" value="Di" {{ in_array('Di', $desired) ? 'checked' : '' }}>
                                                <span class="custom-checkbox"></span>
                                                <span>Middag</span>
                                            </label> 
                                        </div>
                                    </div> 
                                    <div class="d-flexx">
                                        <div class="is-checkbox" style="margin-left: 0px;">
                                            <label>
                                                <input type="checkbox" name="desired[]" value="Ma" {{ in_array('Ma', $desired) ? 'checked' : '' }}>
                                                <span class="custom-checkbox"></span>
                                                <span>Avond</span>
                                            </label> 
                                        </div>
                                        <div class="is-checkbox" style="margin-left: 0px;">
                                            <label>
                                                <input type="checkbox" name="desired[]" value="Di" {{ in_array('Di', $desired) ? 'checked' : '' }}>
                                                <span class="custom-checkbox"></span>
                                                <span>nacht</span>
                                            </label> 
                                        </div>
                                    </div> 
                                </div>
                            </div>  

                            
                            <div class="filter-wrap">
                                <span>Welke status dient kandidaat te hebben:</span>
                                @php 
                                $candidate_status = isset($_GET['candidate_status']) ? $_GET['candidate_status'] : [];
                                @endphp

                                <div class="d-flexx">
                                    <div class="is-checkbox" style="margin-left: 0px; margin-top: 6px;">
                                        <label>
                                            <input type="checkbox" name="candidate_status[]" value="Geen voorkeur" {{ in_array('Geen voorkeur', $candidate_status) ? 'checked' : '' }}>
                                            <span class="custom-checkbox"></span>
                                            <span>Geen voorkeur</span>
                                        </label> 
                                    </div>
                                    <div class="is-checkbox" style="margin-left: 0px; margin-top: 6px;">
                                        <label>
                                            <input type="checkbox"  name="candidate_status[]" value="Cv aanwezig" {{ in_array('Cv aanwezig', $candidate_status) ? 'checked' : '' }}>
                                            <span class="custom-checkbox"></span>
                                            <span>Cv aanwezig</span>
                                        </label> 
                                    </div>
                                    <div class="is-checkbox" style="margin-left: 0px; margin-top: 6px;">
                                        <label>
                                            <input type="checkbox"  name="candidate_status[]" value="Interview gehad met intaketeam" {{ in_array('Interview gehad met intaketeam', $candidate_status) ? 'checked' : '' }}>
                                            <span class="custom-checkbox"></span>
                                            <span>Interview gehad met intaketeam</span>
                                        </label> 
                                    </div>
                                    <div class="is-checkbox" style="margin-left: 0px; margin-top: 6px;">
                                        <label>
                                            <input type="checkbox"  name="candidate_status[]" value="Gecontroleerde referenties aanwezig" {{ in_array('Gecontroleerde referenties aanwezig', $candidate_status) ? 'checked' : '' }}>
                                            <span class="custom-checkbox"></span>
                                            <span>Gecontroleerde referenties aanwezig</span>
                                        </label> 
                                    </div>
                                    <div class="is-checkbox" style="margin-left: 0px; margin-top: 6px;">
                                        <label>
                                            <input type="checkbox"  name="candidate_status[]" value="Relevant certificaat of diploma aanwezig" {{ in_array('Relevant certificaat of diploma aanwezig', $candidate_status) ? 'checked' : '' }}>
                                            <span class="custom-checkbox"></span>
                                            <span>Relevant certificaat of diploma aanwezig</span>
                                        </label> 
                                    </div>
                                </div> 
                            </div>
                            <div class="filter-wrap">
                                <span>Werkervaring</span>
                                @php 
                                $experience = isset($_GET['experience']) ? $_GET['experience'] : '';
                                @endphp
                                <select name="experience" id="">
                                    <option value="">Selecteer</option>
                                    <option value="Niet noodzakelijk" {{ $experience == 'Niet noodzakelijk' ? 'selected' : ''}}>Niet noodzakelijk</option>
                                    <option value="minimaal 1 jaar" {{ $experience == 'minimaal 1 jaar' ? 'selected' : ''}}>minimaal 1 jaar</option>
                                    <option value="meerdere jaren" {{ $experience == 'meerdere jaren' ? 'selected' : ''}}>meerdere jaren</option>
                                </select>
                            </div>
                            <div class="filter-wrap">
                                <span>Overig</span>
                                @php 
                                $other = isset($_GET['other']) ? $_GET['other'] : '';
                                @endphp
                                <select name="other" id="">
                                    <option value="">Selecteer</option>
                                    <option value="Geen bezwaar tegen huisdieren" {{ $other == 'Geen bezwaar tegen huisdieren' ? 'selected' : ''}}>Geen bezwaar tegen huisdieren</option>
                                    <option value="niet-roker" {{ $other == 'niet-roker' ? 'selected' : ''}}>niet-roker</option>
                                    <option value="meerdere jaren" {{ $other == 'meerdere jaren' ? 'selected' : ''}}>meerdere jaren</option>
                                </select>
                            </div>
                            <div class="filter-wrap">
                                <span>Diensten </span>
                                @php 
                                $serv = isset($_GET['services']) ? $_GET['services'] : '';
                                @endphp
                                <select name="services" id="">
                                    <option value="">Selecteer</option>
                                    <option value="stofzuigen" {{ $serv == 'stofzuigen' ? 'selected' : ''}}>stofzuigen </option>
                                    <option value="Poetsen" {{ $serv == 'Poetsen' ? 'selected' : ''}}> Poetsen</option>
                                    <option value="Was doen" {{ $serv == 'Was doen' ? 'selected' : ''}}>Was doen</option>
                                    <option value="Strijken" {{ $serv == 'Strijken' ? 'selected' : ''}}>Strijken</option>
                                    <option value="Tuinwerk" {{ $serv == 'Tuinwerk' ? 'selected' : ''}}>Tuinwerk</option>
                                    <option value="Ramen wassen" {{ $serv == 'Ramen wassen' ? 'selected' : ''}}> Ramen wassen</option>
                                    <option value="Opruimen" {{ $serv == 'Opruimen' ? 'selected' : ''}}> Opruimen</option>
                                    <option value="Boodschappen doen" {{ $serv == 'Boodschappen doen' ? 'selected' : ''}}> Boodschappen doen </option>
                                    <option value="Koken" {{ $serv == 'Koken' ? 'selected' : ''}}> Koken</option>
                                </select>
                            </div>
                            <div class="filter-wrap">
                                <span>Bezit rijbewijs:</span>
                                @php 
                                $license = isset($_GET['license']) ? $_GET['license'] : '';
                                @endphp
                                <select name="license" id="">
                                    <option value="">Selecteer</option>
                                    <option value="Geen voorkeur" {{ $license == 'Geen voorkeur' ? 'selected' : ''}}>Geen voorkeur</option>
                                    <option value="Noodzakelijk" {{ $license == 'Noodzakelijk' ? 'selected' : ''}}>Noodzakelijk</option>
                                    <option value="Niet van toepassing" {{ $license == 'Niet van toepassing' ? 'selected' : ''}}>Niet van toepassing</option>  
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success" style="background: #dc8742; border-color: #dc8742;"><i class="fa fa-filter"></i>  Filter</button>
                        </div>
                    </form>
                </div>
            
                <div class="zoek-cards-wrap">
                    @php $i = 1; @endphp
                
                    @foreach($services as $service)
                        <div class="zoek-main-card">
                            <a href="{{ url('huishoudelijke-hulp/'.$service->id) }}">
                            <div class="zoek-media">
                            @if($service->user->photo)
                        <img id="preview" class="img-responsive" style="width: 60px" src="/images/thumbnail/{{ $service->user->photo }}"/ >
                        @else
                        <img id="preview" class="img-responsive" src="https://ui-avatars.com/api/?background=random&name={{$service->user->name}}&rounded=true" alt="{{$service->user->name}}" style="width: 80px;">
                        @endif
                            <div class="zoek-media-body">
                                <h5><strong>Naam: </strong>{{ $service->user ? $service->user->name : '' }}</h5>
                            </div>
                            </div>
                            <div class="zoek-bottom-info">
                                <table>
                                    <tr>
                                        <td><p><span>Leeftijd:</span> {{ substr($service->age,0,17) }}</p></td>  
                                    </tr> 
                                    <tr>
                                        <td><p><span>Welke status dient de zorgverlener te hebben?:</span> {{ substr($service->candidate_status,0,14) }}</p></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;"><p><span>Specifieke Ervaring:</span> {{ $service->specific_experience }}</p></td> 
                                    </tr>
                                </table>
                            </div>
                            </a>
                        </div> 
                    @endforeach
    
                </div>
            </div>
        </div>
    </section>

    <section class="footer_image footer_image_2"></section>
    
@endsection
