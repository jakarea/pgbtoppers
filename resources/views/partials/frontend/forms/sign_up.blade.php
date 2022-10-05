<form action="{{ route('home.store') }}" method="POST">
    @csrf
    <span class="h4">Meld mij aan:</span>
    <div class="input_wrapper">
        <input type="text" placeholder="Naam *" name="name" value="{{ old('name') }}">
    </div>
    <p class="label-error" style="color: red; margin-top: 0px;">{{ $errors->first('name') }}</p>
    <div class="input_wrapper">
        <input type="email" placeholder="E-mailadres *" name="email" value="{{ old('email') }}">
    </div>
    <p class="label-error" style="color: red; margin-top: 0px;">{{ $errors->first('email') }}</p>

    <div class="btn_wrapper">
        <button type="submit" class="btn btn-accent">
            verstuur
        </button>
    </div>

    @if (session()->has('message'))
    <div class="text-success" style="text-align: left;">
        <p style="color: white;">{{ session('message') }}</p>
    </div>
@endif

</form>
