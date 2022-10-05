<form methos="POST">
    <div class="row">
        <div class="col-md-auto col">
            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Volledige naam">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="email" placeholder="E-mailadres">
            </div>
            <div class="form-group form-row">
                <div class="col">
                    <input class="form-control" type="tel" name="tel_home" placeholder="Tel. overdag">
                </div>
                <div class="col">
                    <input class="form-control" type="tel" name="tel_home" placeholder="Tel. avond">
                </div>
            </div>
            <div class="my-4">
                <h2 class="h2">Adres gegevens</h2>
                <div class="form-group form-row">
                    <div class="col">
                        <input class="form-control" type="text" name="name" placeholder="Straatnaam">
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" name="email" placeholder="Huisnummer">
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" name="email" placeholder="Toevoeging">
                    </div>
                </div>
                <div class="form-group form-row">
                    <div class="col">
                        <input class="form-control" type="text" name="email" placeholder="Stad">
                    </div>
                    <div class="col">
                        <input class="form-control" type="tel" name="tel_home" placeholder="Postcode">
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-secondary">Versturen</button>
                </div>
            </div>
        </div>
        <div class="col-md-auto col">
            <h2 class="h2">Gebruikers rollen</h2>
            @include('forms.fields.checkbox', ['name' => 'role', 'value' => 1, 'attribute' => 'role_name', 'type' => 'radio'])
            @include('forms.fields.checkbox', ['name' => 'role', 'value' => 1, 'attribute' => 'role_name'])
            @include('forms.fields.checkbox', ['name' => 'role', 'value' => 1, 'attribute' => 'role_name'])
            @include('forms.fields.checkbox', ['name' => 'role', 'value' => 1, 'attribute' => 'role_name'])
            @include('forms.fields.checkbox', ['name' => 'role', 'value' => 1, 'attribute' => 'role_name'])
        </div>
    </div>
</form>
