@extends('layouts.dashboard')
@section('content')
<div class="container">
    <div class="row"> 
        <div class="col-lg-12">
            <div class="intake-table">
                
                <div class="d-flex justify-content-between align-items-center mb-5">
                <h1 class="mb-0" style="font-size: 1.9rem;">betalingsinformatie</h1>
                <a class="btn btn-primary" href="{{ url('admin/payment')}}">PBetalenay</a>
</div>
                <!-- <a href="{{ url('admin/testimonial/add') }}" class="btn btn-info">Toevoegen</a> -->

                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Gebruiker</th>
                        <th>Email</th>
                        <th>Betalings-ID</th>
                        <th>Hoeveelheid</th>
                        <th>Munteenheid</th> 
                    </tr>
                    @php $i = 1; @endphp
                    @foreach($histories as $history)
                    <tr>
                        <td valign="middle">{{ $i++ }}</td>  
                        <td valign="middle">{{ $history->user ? $history->user->name : '' }}</td>
                        <td valign="middle">{{ $history->email }}</td>
                        <td valign="middle">{{ substr($history->payment_id,0,20) }}</td>
                        <td valign="middle">{{ $history->amount }}</td>
                        <td valign="middle">{{ $history->currency }}</td>
                    </tr> 
                    @endforeach
                </table>
            </div>
        </div>
        <div class="col-12">
            <div class="text-center  mt-4">
            @if ($histories->hasPages())
                <div class="pagination-wrapper text-center">
                
                {{ $histories->appends($_GET)->links("pagination::bootstrap-4") }}
                </div>
            @endif
            </div>
        </div>
    </div>
</div>
@endsection