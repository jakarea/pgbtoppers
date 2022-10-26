<form action="{{ route('intake.store') }}" method="POST" class="intake_sign_up">
    @csrf

    <div class="input_wrapper"> 
        <input type="text" placeholder="Naam *" name="name" value="{{ old('name') }}">
        
    </div>
    <p class="label-error" style="color: red; margin-top: 0px;">{{ $errors->first('name') }}</p>
    <div class="input_wrapper"> 
        <input type="email" placeholder="E-mailadres *" name="email" value="{{ old('email') }}">
    </div>
    <p class="label-error" style="color: red; margin-top: 0px;">{{ $errors->first('email') }}</p>

    <div class="input_wrapper">
    <input type="number" placeholder="Telefoon overdag *" name="dayphone" value="{{ old('dayphone') }}">
    <p class="label-error" style="color: red; margin-top: 0px;">{{ $errors->first('dayphone') }}</p>

        <input type="number" placeholder="Telefoon avond" name="evephone" value="{{ old('evephone') }}">
        <p class="label-error" style="color: red; margin-top: 0px;">{{ $errors->first('evephone') }}</p>
 
    </div>
    
    <p class="label-error" style="color: red; margin-top: 0px;">{{ $errors->first('zoeken_naar') }}</p>

    @include('partials.forms.fields.checkbox', ['name' => 'mee_eens_zijn', 'value' => 1, 'attribute' => ' Ja, ik heb de algemene voorwaarden gelezen']) 
    <div>
        <button type="submit" class="btn btn-primary">Aanmelden</button>
    </div>
</form>
