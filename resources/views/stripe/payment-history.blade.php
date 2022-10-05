@extends('layouts.dashboard')
@section('content')
<div class="container">
    <div class="row"> 
        <div class="col-lg-12">
            <div class="intake-table">
                <div class="d-flex justify-content-between align-items-center">
                <h1 class="mb-5">Payment Information</h1>
                <!-- <a href="{{ url('admin/testimonial/add') }}" class="btn btn-info">Add</a> -->
                </div>
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Email</th>
                        <th>Payment Id</th>
                        <th>Amount</th>
                        <th>Currency</th> 
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