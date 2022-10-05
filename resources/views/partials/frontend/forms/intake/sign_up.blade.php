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

    @include('partials.forms.fields.checkbox', ['name' => 'aggree', 'value' => 1, 'attribute' => 'Ja, Ik heb de algemene voorwaarden gelezen en wil mij graag inschrijven bij PGBtoppers.nl.']) 
    @include('partials.forms.fields.checkbox', ['name' => 'permission', 'value' => 1, 'attribute' => 'Ik geef toestemming aan PGBtoppers om contact met mij op te nemen voor een online intakegesprek. Na dat gesprek ontvang ik het inschrijfformulier.'])

    
    

    <div>
        <button type="submit" class="btn btn-primary">Verzenden</button>
    </div>
</form>
