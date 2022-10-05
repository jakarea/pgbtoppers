@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center"> 
        <div class="col-lg-6">
            <div class="intake-table">
                
                <div class="d-flex justify-content-between align-items-center">
                <h1 class="h1">Gebruikers</h1> 
                </div>
                <form action="{{ route('users.update',$user->id) }}" method="POST">
                @csrf
                <table class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <td valign="middle">{{ $user->id }}</td>
                    </tr>
                    <tr>  
                        <th>Name</th>
                        <td valign="middle"><input type="text" name="name" value="{{ $user->name }}" class="form-control"></td> 
                    </tr>
                    <tr>  
                        <th>Email</th>
                        <td valign="middle"><input type="text" name="email" value="{{ $user->email }}" class="form-control"></td>
                    </tr>

                    @if(Auth()->user()->role == 1)
  
                    <tr>  
                       <th>Role</th>
                        <td>
                        <select name="role" class="form-control">
                            <option value="1">Admin</option>
                            <option value="2">Ik BEN EEN ZORGVERLENER</option>
                            <option value="3">IK ZOEK EEN ZORGVERLENER</option>
                        </select>
                        </td>
                    </tr> 

                    @endif

                    <tr>
                        <td colspan="2" class="text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </td>
                    </tr>
                </table>
                </form>
            </div>
        </div> 
    </div>
</div>
@endsection