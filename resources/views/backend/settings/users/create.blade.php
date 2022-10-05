@extends('layouts.dashboard')

@section('content')
<div class="container">

    <div class="row align-items-center mb-4">
        <div class="col-md-10">
            <h1 class="h1 mb-0">Gebruiker aanmaken</h1>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-12">
            @include('backend.forms.users.create')
        </div>
    </div>
</div>
@endsection
