@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center"> 
        <div class="col-lg-6">
            <div class="intake-table">
                
                <div class="d-flex justify-content-between align-items-center">
                <h1 class="h1">Gebruikers</h1> 
                </div>
                @if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
                @if($user->photo)
                <img id="preview" class="img-responsive" style="max-width: 120px" src="/images/thumbnail/{{ $user->photo }}"/ >
                @else
                <img id="preview" class="img-responsive" src="https://ui-avatars.com/api/?background=random&name={{$user->name}}&rounded=true" alt="{{$user->name}}" style="width: 120px;">
                @endif
                <form action="{{ route('users.update',$user->id) }}" enctype = "multipart/form-data" method = "POST">
                @csrf
                <table class="table table-striped">
                
                    <tr>  
                        <th>Naam</th>
                        <td valign="middle"><input type="text" name="name" value="{{ $user->name }}" class="form-control"></td> 
                    </tr>
                    <tr>  
                        <th>Email</th>
                        <td valign="middle"><input type="text" name="email" value="{{ $user->email }}" class="form-control"></td>
                    </tr>

                    @if(Auth()->user()->role === 1 || Auth()->user()->role === 2)
                    @php 
                        $disabled = '';
                        if(Auth()->user()->role !== 1 &&  $user->role ===1)
                        $disabled = 'disabled';
                    @endphp
                    
                    <tr>  
                        <th>Role</th>
                        <td>
                            <select name="role" class="form-control" <?= $disabled ?> >
                                <option value=""> -- Do not change -- </option>
                                @if(Auth()->user()->role === 1 || $user->role === 1)
                                    <option value="1" {{ $user->role ===1 ? 'selected' : '' }}>Admin</option>
                                @endif
                                <option value="2" {{ $user->role ===2 ? 'selected' : '' }}>Intake team</option>
                                <option value="3" {{ $user->role ===3 ? 'selected' : '' }}>Healthcare provider</option>
                                <option value="4" {{ $user->role ===4 ? 'selected' : '' }}>Looking for healthcare provider</option>
                            </select>
                        </td>
                    </tr> 

                    @endif
                    <tr>
							<th>Wachtwoord</th>
							<td valign="middle"><input type="password" name="password" class="form-control"></td>
						</tr>
                    <tr>  
                        <th>Foto</th>
                        <td valign="middle"><input type="file" name="photo" class="form-control"></td>
                    </tr>

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