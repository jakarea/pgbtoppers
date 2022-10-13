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
    <label class="cont" style="margin-left: 0px; margin-top: 12px; font-size: 15px; font-family: sans-serif;">huishoudelijke hulp
            <input type="radio" value="Ik zoek huishoudelijk hulp"  name="zoeken_naar" {{ old('zoeken_naar') == '1' ? 'checked' : '' }}>
            <span class="checkmark" style="top: -4px;"></span>
        </label>
        
    <label class="cont" style="margin-left: 0px; margin-top: 22px; margin-bottom: 20px; font-size: 15px; font-family: sans-serif;">begeleider
            <input type="radio" value="Ik zoek een begeleider."  name="zoeken_naar" {{ old('zoeken_naar') == '1' ? 'checked' : '' }}>
            <span class="checkmark" style="top: -4px;"></span>
        </label>
    </div>
    <p class="label-error" style="color: red; margin-top: 0px;">{{ $errors->first('zoeken_naar') }}</p>

    @include('partials.forms.fields.checkbox', ['name' => 'mee_eens_zijn', 'value' => 1, 'attribute' => 'Ja, Ik heb de algemene voorwaarden gelezen en wil mij graag inschrijven bij PGBtoppers.nl.']) 
    @include('partials.forms.fields.checkbox', ['name' => 'toestemming', 'value' => 1, 'attribute' => 'Ik geef toestemming aan PGBtoppers om contact met mij op te nemen voor een online intakegesprek. Na dat gesprek ontvang ik het inschrijfformulier.'])

    <div>
        <button type="submit" class="btn btn-primary">Aanmelden</button>
    </div>
</form>
