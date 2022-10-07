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
        <h1 class="mb-5" style="font-size: 2.6rem; font-family: Arial, Helvetica, sans-serif; margin-bottom: 30px;">Alle goedgekeurde zorgverleners</h1>
        <form action="" method="GET">
            <div class="services-filter">
            @php 
                $age = isset($_GET['age']) ? $_GET['age'] : '';
            @endphp
                <div class="filter-wrap">
                    <span>Leeftijd:</span>
                    @php 
                    $age = isset($_GET['age']) ? $_GET['age'] : '';
                    @endphp
                    <select name="age">
                        <option value="">Selecteer</option>
                        <option value="Geen voorkeur" {{ $age == 'Geen voorkeur' ? 'selected' : ''}}>Geen voorkeur</option>
                        <option value="18-25" {{ $age == '18-25' ? 'selected' : ''}}>18-25</option>
                        <option value="25-40" {{ $age == '25-40' ? 'selected' : ''}}>25-40</option>
                        <option value="40-60" {{ $age == '40-60' ? 'selected' : ''}}>40-60</option>
                        <option value="60+" {{ $age == '60+' ? 'selected' : ''}}>60+</option>
                    </select>
                </div>
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
                    <span style="font-size: 13px;">Gewenste dagdeel:</span>
                    @php 
                    $desired = isset($_GET['desired']) ? $_GET['desired'] : '';
                    @endphp
                    <select name="desired" id="">
                        <option value="">Selecteer</option>
                        <option value="Geen voorkeur" {{ $desired == 'Geen voorkeur' ? 'selected' : ''}}>Geen voorkeur</option>
                        <option value="Middag" {{ $desired == 'Middag' ? 'selected' : ''}}>Middag</option>
                        <option value="Avond" {{ $desired == 'Avond' ? 'selected' : ''}}>Avond</option> 
                        <option value="nacht" {{ $desired == 'nacht' ? 'selected' : ''}}>nacht</option>  
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
                <div class="filter-wrap">
                    <span>meerdere opties mogelijk</span>
                    @php 
                    $candidate_status = isset($_GET['candidate_status']) ? $_GET['candidate_status'] : '';
                    @endphp
                    <select name="candidate_status" id="">
                        <option value="">Selecteer</option>
                        <option value="Geen voorkeur" {{ $candidate_status == 'Geen voorkeur' ? 'selected' : ''}}>Geen voorkeur</option>
                        <option value="Cv aanwezig" {{ $candidate_status == 'Cv aanwezig' ? 'selected' : ''}}>Cv aanwezig</option>
                        <option value="Interview gehad met intaketeam" {{ $candidate_status == 'Interview gehad met intaketeam' ? 'selected' : ''}}>Interview gehad met intaketeam</option>  
                        <option value="Gecontroleerde referenties aanwezig" {{ $candidate_status == 'Gecontroleerde referenties aanwezig' ? 'selected' : ''}}>Gecontroleerde referenties aanwezig</option>  
                        <option value="Geldig VOG" {{ $candidate_status == 'Geldig VOG' ? 'selected' : ''}}>Geldig VOG</option>  
                        <option value="Relevant certificaat of diploma aanwezig" {{ $candidate_status == 'Relevant certificaat of diploma aanwezig' ? 'selected' : ''}}>Relevant certificaat of diploma aanwezig</option>  
                    </select>
                </div>
                <div class="filter-wrap">
                    <span>Werkervaring</span>
                    @php 
                    $experience = isset($_GET['candidate_status']) ? $_GET['candidate_status'] : '';
                    @endphp
                    <select name="experience" id="">
                        <option value="">Selecteer</option>
                        <option value="Niet noodzakelijk" {{ $experience == 'Niet noodzakelijk' ? 'selected' : ''}}>Niet noodzakelijk</option>
                        <option value="minimaal 1 jaar" {{ $experience == 'minimaal 1 jaar' ? 'selected' : ''}}>minimaal 1 jaar</option>
                        <option value="meerdere jaren" {{ $experience == 'meerdere jaren' ? 'selected' : ''}}>meerdere jaren</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success" style="background: #dc8742; border-color: #dc8742;"><i class="fas fa-filter"></i>  Filter</button>
            </div>
        </form>
        </div>
        <div class="container">
        
            <div class="zoek-cards-wrap">
            @php $i = 1; @endphp
 
            @foreach($services as $service)
                <div class="zoek-main-card">
                     <a href="{{ url('ik-zoek/'.$service->id) }}">
                     <div class="zoek-media">
                     @if($service->user->photo)
                <img id="preview" class="img-responsive" style="max-width: 120px" src="/images/thumbnail/{{ $service->user->photo }}"/ >
                @else
                <img id="preview" class="img-responsive" src="https://ui-avatars.com/api/?background=random&name={{$service->user->name}}&rounded=true" alt="{{$service->user->name}}" style="width: 120px;">
                @endif
                    <div class="zoek-media-body">
                        <h5><strong>Name: </strong>{{ $service->user ? $service->user->name : '' }}</h5>
                        <h6><strong>Email: </strong>{{ $service->user ? $service->user->email : '' }}</h6> 
                    </div>
                    </div>
                    <div class="zoek-bottom-info">
                        <table>
                            <tr>
                                <td><p><span>Leeftijd:</span> {{ substr($service->age,0,17) }}</p></td>
                                <td><p><span>Afstand:</span> {{ substr($service->distance,0,15) }}</p></td>
                            </tr>
                            <tr>
                                <td><p><span>Geslacht:</span> {{ $service->gender }}</p></td>
                                <td><p><span>Status:</span> {{ substr($service->candidate_status,0,14) }}</p></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: left;"><p><span>Specifieke Ervaring:</span> {{ $service->specific_experience }}</p></td> 
                            </tr>
                        </table>
                    </div>
                    </a>
                </div> 
            @endforeach
            </div>
        </div>
    </section>

<section class="footer_image footer_image_2"></section>
    
@endsection
