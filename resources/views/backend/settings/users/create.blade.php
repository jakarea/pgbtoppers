@extends('layouts.dashboard')
@section('content')
<div class="container">
	<div class="row justify-content-center align-items-center">
		<div class="col-lg-6">
			<div class="intake-table">
				<div class="d-flex justify-content-between align-items-center">
					<h1 class="h1">Gebruiker aanmaken</h1>
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

				<div style="text-align: center; margin-bottom: 20px;">
				<img id="preview" class="table_photo" style="max-width: 160px" src="/images/thumbnail/default.jpeg"/ >
				</div>

				<form action="{{ route('users.store') }}" enctype = "multipart/form-data" method="POST">
					@csrf
					<table class="table table-striped">
						<tr>
							<th>Name</th>
							<td valign="middle"><input type="text" name="name" value="{{ old('name')}}" class="form-control"></td>
						</tr>
						<tr>
							<th>Email</th>
							<td valign="middle"><input type="text" name="email" value="{{ old('email')}}" class="form-control"></td>
						</tr>
						<tr>
							<th>Role</th>
							<td>
								<select name="role" class="form-control">
								<option value=""> --Select One-- </option>
                                    @if(Auth::user()->role === 1)
									<option value="1" {{ old('role') === 1  ? 'selected' :'' }}>Admin</option>
                                    @endif
									<option value="2" {{ old('role') === 2  ? 'selected' :'' }}>Intake team</option>
									<option value="3" {{ old('role') === 3  ? 'selected' :'' }}>Healthcare provider</option>
									<option value="4" {{ old('role') === 4  ? 'selected' :'' }}>Looking for healthcare provider</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>Wachtwoord</th>
							<td valign="middle"><input type="password" name="password" class="form-control"></td>
						</tr>
						<tr>  
                        <th>Photo</th>
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