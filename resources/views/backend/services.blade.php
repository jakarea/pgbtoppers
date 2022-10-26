@extends('layouts.dashboard')

@section('content')
<div class="container">
     <div class="row"> 
        <div class="col-lg-12">
            <div class="intake-table">
                
                <div class="d-flex justify-content-between align-items-center mb-5">
                <h1 class="mb-0" style="font-size: 2rem;">IK ZOEK EEN ZORGVERLENER</h1>
                <a class="btn btn-primary" href="{{ url('admin/services-provider/add')  }}">Toevoegen</a>
</div>
                <form action="" method="GET">
                    
                <div class="services-filter">
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
                </form>
                </div>
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Gebruiker</th>
                        <th>Leeftijd</th>
                        <th>Afstand</th>
                        <th>Geslacht</th> 
                        <th>Beschikbare dagen</th> 
                        <th>Gewenste dagdeel</th>  
                        <th class="text-right">Actie</th>
                    </tr>

                    @php $i = 1; @endphp

                    

                    @foreach($services as $service)
 
                    <tr>
                        <td valign="middle">{{ $i++ }}</td>  
                        <td valign="middle">{{ $service->user ? $service->user->name : '' }}</td>
                        <td valign="middle">{{ $service->age }}</td>
                        <td valign="middle">{{ $service->distance }}</td>
                        <td valign="middle">{{ $service->gender }}</td>
                        <td valign="middle">{{ $service->days }}</td>
                        <td valign="middle">{{ $service->desired }}</td>
                        
                        <td class="text-right">  
                            <a href="{{ url('admin/services-provider/'.$service->id)}}">
                                <i class="fas fa-eye"></i>
                            </a> 

                            @if($service->user->id == Auth()->user()->id || Auth()->user()->role == 1 || Auth::user()->role == 2)
                            <a href="{{url('admin/services/'.$service->id.'/edit')}}" style="margin-left: 1rem; color: green;">
                                <i class="fas fa-pen"></i>
                            </a>
                            @endif

                            @if(Auth::user()->role === 1)
                            <a href="{{url('admin/services/destroy/'.$service->id)}}" style="margin-left: 1rem; color: red;">
                                <i class="fas fa-trash"></i>
                            </a>
                            @endif
                        </td>
                    </tr> 
                    @endforeach
                </table>
            </div>
        </div>
        <div class="col-12">
            <div class="text-center  mt-4">
            @if ($services->hasPages())
                <div class="pagination-wrapper text-center"> 
                {{ $services->appends($_GET)->links("pagination::bootstrap-4") }}
                </div>
            @endif
            </div>
        </div>
     </div>
</div>
@endsection