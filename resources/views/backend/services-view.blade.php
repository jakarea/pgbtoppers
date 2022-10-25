@extends('layouts.dashboard')

@section('content')
<div class="container">
     <div class="row"> 
        <div class="col-lg-12">
        @if (session()->has('message'))
            <div class="text-success" style="text-align: center;">
                <p style="color: green;">{{ session('message') }}</p>
            </div>
        @endif
        </div>
        <div class="col-lg-12">
            <div class="intake-table">
                
                <div class="d-flex justify-content-between align-items-center">
                <h1 class="mb-5">{{ $service->user->name }} Informatie</h1>
                @if(Auth::user()->role === 1)
                <a href="{{ url('admin/services/edit/'.$service->id)}}" class="btn btn-info"><i class="fas fa-pen"></i> Bewerk</a>
                @endif
                </div>
                <table class="table table-striped" style="width: 60%; margin: 0 auto;">
                    
                    <tr>
                        <th>Naam</th>
                        <th>:</th>
                        <td>{{ $service->user->name }}</td>
                    </tr>
                    <tr>
                        <th>Leeftijd</th>
                        <th>:</th>
                        <td>{{ $service->age }}</td>
                    </tr>
                    <tr>
                        <th>Afstand</th>
                        <th>:</th>
                        <td>{{ $service->distance }}</td>
                    </tr>
                    <tr>
                        <th>Geslacht</th>
                        <th>:</th>
                        <td>{{ $service->gender }}</td>
                    </tr>
                    <tr>
                        <th>Beschikbare dagen</th>
                        <th>:</th>
                        <td>{{ $service->days }}</td>
                    </tr>
                    <tr>
                        <th>Gewenste dagdeel</th>
                        <th>:</th>
                        <td>{{ $service->desired }}</td>
                    </tr>
                    
                    <tr>
                        <th> Welke status dient de zorgverlener te hebben?
</th>
                        <th>:</th>
                        <td>{{ $service->candidate_status }}</td>
                    </tr>
                    <tr>
                        <th>Werkervaring</th>
                        <th>:</th>
                        <td>{{ $service->experience }}</td>
                    </tr>
                    <tr>
                        <th>Overig</th>
                        <th>:</th>
                        <td>{{ $service->other }}</td>
                    </tr>
                    <tr>
                        <th>Diensten</th>
                        <th>:</th>
                        <td>{{ $service->services }}</td>
                    </tr> 
                    <tr>
                        <th>Specifieke Ervaring</th>
                        <th>:</th>
                        <td>{{ $service->specific_experience ?: 'N/A'}}</td>
                    </tr> 
                    <tr>
                        <th>Welke status dient de zorgverlener te hebben?
</th>
                        <th>:</th>
                        <td>
                            <label>{{ $service->approved ? 'goedgekeurd' : 'afgekeurd' }}</label>

                            @if($service->approved)
                                <a style="float:right" href="{{url('admin/services-provider/'.$service->id.'/pending')}}" class="btn btn-warning"><i class="fas fa-check"></i> afgekeurd</a>
                            @else
                                <a style="float:right" href="{{url('admin/services-provider/'.$service->id.'/approve')}}" class="btn btn-success"><i class="fas fa-check"></i> goedgekeurd</a>
                            @endif
                        </td>
                    </tr>
                    
                    
                    
                </table> 
                
            </div>
        </div> 
    </div>
</div>
@endsection