@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row"> 
        <div class="col-12">
        @if (session()->has('message'))
            <div class="text-success" style="text-align: center;">
                <p style="color: green;">{{ session('message') }}</p>
            </div>
        @endif
        </div>
        <div class="col-lg-12">
            

            <div class="intake-table">
                <div class="d-flex justify-content-between align-items-center">
                <h1 class="mb-5">Gebruikers</h1>

                    @if(Auth::user()->role == 1 || Auth::user()->role == 2)
                        <a href="{{ url('admin/users/add') }}" class="btn btn-info">Add</a>
                    @endif
                </div>

                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>

                    @php 
                        $i = isset($_GET['page']) ? $_GET['page'] : 1;
                        $i = ($i-1) * 20;
                    @endphp

                    @foreach($users as $user)
                    
                    <tr>
                        <td valign="middle">{{ ++$i }}</td>
                        <td valign="middle">
                        @if($user->photo)
                <img id="preview" class="img-responsive prev-inner" style="max-width: 120px" src="/images/thumbnail/{{ $user->photo }}" style="width: 60px;">
                @else
                <img id="preview" class="img-responsive" src="https://ui-avatars.com/api/?background=random&name={{Auth()->user()->name}}&rounded=true" alt="{{Auth()->user()->name}}" style="width: 60px;">
                @endif
                        </td>  
                        <td valign="middle">{{ $user->name }}</td>
                        <td valign="middle">{{ $user->email }}</td>
                        <td valign="middle">
                        @if($user->role === 1)
                        {{ ('Admin') }}

                        @elseif($user->role === 2)

                        {{ ('Intake Team') }}
                        @elseif($user->role === 3)

                        {{ ('Healthcare Provider') }}
                        @else
                        {{ ('Looking for healthcare Provider') }}
                        @endif
                        </td>
                        <td valign="middle">
                            <a href="{{ url('admin/users/'.$user->id.'/edit') }}">
                                <i class="fas fa-pen text-success"></i>
                            </a>
                            @if(Auth()->user()->role == 1)

                            <a href="{{ url('admin/users/'.$user->id.'/delete') }}">
                                <i class="fas fa-trash ml-2 text-danger"></i>
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
            @if ($users->hasPages())
                <div class="pagination-wrapper text-center">
                {{ $users->links("pagination::bootstrap-4") }}
                </div>
            @endif
            </div>
        </div>
    </div>
</div>
@endsection