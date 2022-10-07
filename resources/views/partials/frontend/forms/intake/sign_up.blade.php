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
    <div class="form-group">
    <label class="cont" style="margin-left: 0px; margin-top: 12px; font-size: 15px; font-family: sans-serif;">Ik zoek huishoudelijk hulp
            <input type="radio" value="Ik zoek huishoudelijk hulp"  name="looking_for" {{ old('looking_for') == '1' ? 'checked' : '' }}>
            <span class="checkmark" style="top: -4px;"></span>
        </label>
        
    <label class="cont" style="margin-left: 0px; margin-top: 22px; margin-bottom: 20px; font-size: 15px; font-family: sans-serif;">Ik zoek een begeleider.
            <input type="radio" value="Ik zoek een begeleider."  name="looking_for" {{ old('looking_for') == '1' ? 'checked' : '' }}>
            <span class="checkmark" style="top: -4px;"></span>
        </label>
    </div>
    <p class="label-error" style="color: red; margin-top: 0px;">{{ $errors->first('looking_for') }}</p>

    @include('partials.forms.fields.checkbox', ['name' => 'aggree', 'value' => 1, 'attribute' => 'Ja, Ik heb de algemene voorwaarden gelezen en wil mij graag inschrijven bij PGBtoppers.nl.']) 
    @include('partials.forms.fields.checkbox', ['name' => 'permission', 'value' => 1, 'attribute' => 'Ik geef toestemming aan PGBtoppers om contact met mij op te nemen voor een online intakegesprek. Na dat gesprek ontvang ik het inschrijfformulier.'])

    <div>
        <button type="submit" class="btn btn-primary">Aanmelden</button>
    </div>
</form>
