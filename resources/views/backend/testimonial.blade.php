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
                <h1 class="mb-5">Beoordelingen Toevoegen</h1>
 
                <a href="{{ url('admin/testimonial/add') }}" class="btn btn-info">Toevoegen</a>
                </div>
                <table class="table table-striped">
                    <tr>
                        <th>No</th>
                        <th>Afbeelding</th>
                        <th>Naam</th>
                        <th>Aanduiding</th> 
                        <th>Beschrijving</th> 
                        @if(Auth::user()->role === 1 || Auth::user()->role === 2)
                            <th class="text-right">Actie</th>
                        @endif
                    </tr>

                    @php $i = 1; @endphp

                    @foreach($testmonial as $test)
                    <tr>
                        <td valign="middle">{{ $i++ }}</td> 
                        <td valign="middle">
                        <img src="{{ asset('images/testimonial/'.$test->image) }}" alt="advisor Image" class="img-fluid" style="width: 90px; height: 50px; object-fit: cover;">
                        </td> 
                        <td valign="middle">{{ $test->name }}</td>
                        <td valign="middle">{{ $test->designation }}</td>
                        <td valign="middle">{{ $test->description }}</td>
                        @if(Auth::user()->role === 1 || Auth::user()->role === 2)
                        <td class="text-right"> 
                            <a href="{{url('admin/testimonial/edit/'.$test->id)}}">
                                <i class="fas fa-pen"></i>
                            </a>
                            <a href="{{url('admin/testimonial/destroy/'.$test->id)}}">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                        @endif
                    </tr>
                    @endforeach
 
                </table>
            </div>
        </div>
        <div class="col-12">
            <div class="text-center  mt-4">
               
            </div>
        </div>
     </div>
</div>
@endsection