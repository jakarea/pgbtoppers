@extends('layouts.default', ['body_class' => 'frontend-intake-page'])
@section('content')


<section class="intake">
    <div class="container">
    @if (session()->has('message'))
    <div class="text-success" style="text-align: center;">
        <p style="color: green;">{{ session('message') }}</p>
    </div>
@endif  
        <h1 class="h1">Intake</h1>
        <p>
        Nadat je hieronder jouw gegevens hebt verstuurd ontvang je een e-mail met uitleg over het intakegesprek en de gegevens die we graag willen ontvangen. Je verbindt je nog nergens aan. Pas als we van jou een reactie hebben ontvangen op onze e-mail, plannen we een online intakegesprek in.
        </p>
       
        @include('partials.frontend.forms.intake.sign_up')
    </div>
</section>


@include('partials.frontend.faq')

@endsection
