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
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id mattis nibh. Vestibulum quis nibh vel nibh facilisis finibus. Nulla malesuada dignissim eros ac tristique. Suspendisse aliquam massa libero, tincidunt vulputate urna volutpat eleifend. Donec bibendum nibh ac convallis blandit. Mauris non orci in purus sodales ullamcorper mollis a orci. Ut cursus vel quam quis vehicula.
        </p>
        @include('partials.frontend.forms.intake.sign_up')
    </div>
</section>


@include('partials.frontend.faq')

@endsection
