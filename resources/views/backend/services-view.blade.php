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
                <h1 class="mb-5">{{ $service->user->name }} Information</h1>
                @if(Auth::user()->role === 1)
                <a href="{{ url('admin/services/edit/'.$service->id)}}" class="btn btn-info"><i class="fas fa-pen"></i> Edit</a>
                @endif
                </div>
                <table class="table table-striped" style="width: 60%; margin: 0 auto;">
                    
                    <tr>
                        <th>User ID</th>
                        <th>:</th>
                        <td>{{ $service->user->id }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <th>:</th>
                        <td>{{ $service->user->name }}</td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <th>:</th>
                        <td>{{ $service->age }}</td>
                    </tr>
                    <tr>
                        <th>Distance</th>
                        <th>:</th>
                        <td>{{ $service->distance }}</td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <th>:</th>
                        <td>{{ $service->gender }}</td>
                    </tr>
                    <tr>
                        <th>Days</th>
                        <th>:</th>
                        <td>{{ $service->days }}</td>
                    </tr>
                    <tr>
                        <th>Desired</th>
                        <th>:</th>
                        <td>{{ $service->desired }}</td>
                    </tr>
                    <tr>
                        <th>License</th>
                        <th>:</th>
                        <td>{{ $service->license }}</td>
                    </tr>
                    <tr>
                        <th>Candidate Status</th>
                        <th>:</th>
                        <td>{{ $service->candidate_status }}</td>
                    </tr>
                    <tr>
                        <th>Experience</th>
                        <th>:</th>
                        <td>{{ $service->experience }}</td>
                    </tr>
                    <tr>
                        <th>Other</th>
                        <th>:</th>
                        <td>{{ $service->other }}</td>
                    </tr>
                    <tr>
                        <th>Services</th>
                        <th>:</th>
                        <td>{{ $service->services }}</td>
                    </tr> 
                    <tr>
                        <th>Specific Experience</th>
                        <th>:</th>
                        <td>{{ $service->specific_experience ?: 'N/A'}}</td>
                    </tr> 
                </table>
                 SEND Messags[Not done]
            </div>
        </div> 
     </div>
</div>
@endsection