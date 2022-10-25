@extends('layouts.dashboard')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="user-profile-wrap">
                <div class="d-flex align-items-center justify-content-between">
                    <h1>Mijn profiel</h1>
                    <a href="{{ url('admin/users/'.Auth()->user()->id).'/edit' }}">
                    <i class="fas fa-pen"></i>
                    </a>
                </div>
                `
                <div class="media align-items-center">
                @if(Auth::user()->photo)
                <img id="preview" class="img-responsive" style="max-width: 120px" src="/images/thumbnail/{{ Auth::user()->photo }}"/ >
                @else
                <img id="preview" class="img-responsive" src="https://ui-avatars.com/api/?background=random&name={{Auth()->user()->name}}&rounded=true" alt="{{Auth()->user()->name}}" style="width: 120px;">
                @endif
                    <div class="media-body ml-3">
                    <p><strong>Name: </strong> {{ Auth()->user()->name }}</p>
                    <br>
                    <p><strong>Email: </strong> {{ Auth()->user()->email }}</p>
                    <p><strong>Role: </strong>
                        @if(Auth()->user()->role === 1)
                            {{ ('Admin') }}
                        @elseif(Auth()->user()->role === 2)
                            {{ ('Intake Team') }}
                        @elseif(Auth()->user()->role === 3)
                            {{ ('Healthcare provider') }}
                        @else
                            {{ ('Looking for healthcare provider') }}
                        @endif
                    </p>
                    </div>
                </div>
                @if(Auth::user()->role === 3 && !Auth::user()->paid)
                    <a href="{{ route('admin.payment')}}" class="activation_notice">Activeer uw zorgverlenerprofiel</a>
                @endif
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        @if($user->service)
        <div class="col-lg-7">
            <div class="intake-table">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="my-5">Informatie</h1>
                    <a href="{{ url('admin/services/'.$user->service->id.'/edit')}}" class="btn btn-info"><i class="fas fa-pen"></i> Bewerk</a> 
                </div>

                <table class="table table-striped" style="width: 100%; margin: 0 auto;">
                    <tr>
                    <th>Naam</th>
                    <th>:</th>
                    <td>{{ $user->service->user->name }}</td>
                    </tr>
                    <tr>
                    <th>Leeftijd</th>
                    <th>:</th>
                    <td>{{ $user->service->age }}</td>
                    </tr>
                    <tr>
                    <th>Afstand</th>
                    <th>:</th>
                    <td>{{ $user->service->distance }}</td>
                    </tr>
                    <tr>
                    <th>Geslacht</th>
                    <th>:</th>
                    <td>{{ $user->service->gender }}</td>
                    </tr>
                    <tr>
                    <th>Beschikbare dagen</th>
                    <th>:</th>
                    <td>{{ $user->service->days }}</td>
                    </tr>
                    <tr>
                    <th>Gewenste dagdeel</th>
                    <th>:</th>
                    <td>{{ $user->service->desired }}</td>
                    </tr>
                    <tr>
                    <th>Welke status dient de zorgverlener te hebben?
</th>
                    <th>:</th>
                    <td>{{ $user->service->candidate_status }}</td>
                    </tr>
                    <tr>
                    <th>Werkervaring</th>
                    <th>:</th>
                    <td>{{ $user->service->experience }}</td>
                    </tr>
                    <tr>
                    <th>Overig</th>
                    <th>:</th>
                    <td>{{ $user->service->other }}</td>
                    </tr>
                    <tr>
                    <th>Diensten</th>
                    <th>:</th>
                    <td>{{ $user->service->services }}</td>
                    </tr>
                    <tr>
                    <th>Specifieke Ervaring</th>
                    <th>:</th>
                    <td>{{ $user->service->specific_experience ?: 'N/A'}}</td>
                    </tr>
                </table> 
            </div>
        </div>
        @elseif(Auth()->user()->role === 3)
            <a href="{{ url('admin/services-provider/add')  }}" class="btn btn-primary mt-4">Create Profile</a>
        @elseif(Auth()->user()->role === 4)
        <a href="{{ url('admin/services/add')  }}" class="btn btn-primary mt-4">Create Profile</a>
        @endif
    </div>
</div>
@endsection