@extends('layouts.dashboard')

@section('content')
<div class="container">
     <div class="row">
        <div class="col-lg-12">
            <div class="intake-table">
                <h1 class="mb-5">Intake Information</h1>
                <table class="table table-striped">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Day Number</th>
                        <th>Evening Number</th>
                    </tr>

                    @php 
                        $i = isset($_GET['page']) ? $_GET['page'] : 1;
                        $i = ($i-1) * 20;
                    @endphp

                    @foreach($intake as $intak)
                    <tr>
                        <td valign="middle">{{ ++$i }}</td> 
                        <td valign="middle">{{ $intak->name }}</td>
                        <td valign="middle">{{ $intak->email }}</td>
                        <td valign="middle">{{ $intak->dayphone }}</td>
                        <td valign="middle">{{ $intak->evephone }}</td>
                         
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="col-12">
            <div class="text-center  mt-4">
                @if ($intake->hasPages())
                <div class="pagination-wrapper text-center">
                {{ $intake->links("pagination::bootstrap-4") }}
                </div>
            @endif
            </div>
        </div>
     </div>
</div>
@endsection