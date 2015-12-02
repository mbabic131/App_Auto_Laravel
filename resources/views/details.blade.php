@extends('master')

@section('content')

<div id='tablice'>
    <h3>Podaci o automobilu:</h3>
        <table class='table table-bordered'>
             <tr class='active'>
                <th>Naziv automobila</th>
                <th>Pogon</th>
                <th>Jedinica mjere</th>
                <th>Prosječna potrošnja</th>
            </tr>
            <tr class='success'>
                <td>{{ $auto->Naziv }}</td>
                <td>{{ $auto->Tip }}</td>
                <td>{{ $auto->JM }}</td>
                <td>{{ $auto->Potrosnja }}</td>
            </tr>
        </table>

<h3>Podaci o energentu:</h3>
    <table class='table table-bordered'>
        <tr class='active'>
            <th>Energent</th>
            <th>Jedinica mjere</th>
            <th>Cijena (KN)</th>
        </tr>
        <tr class='info'>
            <td>{{ $energent->Pogon }}</td>
            <td>{{ $energent->JM }}</td>
            <td>{{ $energent->Cijena }}</td>
        </tr>
    </table>
</div>

<form name="mojaForma">
    <input type="hidden" name="cijena" value="{{ $energent->Cijena }}">
    <input type="hidden" name="potrosnja" value="{{ $auto->Potrosnja }}">
</form>

<dl>
    <dt>Broj prijeđenih kilometara</dt>
    <dd>Ovdje upišite prosječan broj kilometara koje godišnje prijeđete s vlastitim automobilom.</dd>
</dl>

<div id="forma">
    <form name="forma" class="form-horizontal" method="post" action="{{ URL('save') }}">

        <input type="hidden" name="Automobil" value="{{ $auto->Naziv }}">
        <input type="hidden" name="Pogon" value="{{ $auto->Tip }}">

        <div class="form-group">
            <label for="kmh" class="col-sm-2 control-label">Iznos</label>
            <div class="input-group col-sm-5">
                <input type="text" id="kmh" name="Broj_kmh" class="form-control" required="required">
                <div class="input-group-addon">KM</div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="button" value="Izračunaj" class="btn btn-primary" onclick="calc()">
            </div>
        </div>

        <dl>
            <dt>Ukupni troškovi prijevoza</dt>
            <dd>Ovdje su prikazani ukupni godišnji troškovi prijevoza za izabrani automobil.</dd>
        </dl>

        <div class="form-group">
            <label for="trosak" class="col-sm-2 control-label">Trošak</label>
            <div class="input-group col-sm-5">
                <input type="text" id="trosak" name="Ukupni_troskovi" class="form-control" required="required">
                <div class="input-group-addon">KN</div>
            </div>
        </div>

        <div class="form-group">
            <div class='col-sm-offset-2 col-sm-10'>
                <input type='submit' value='Spremi' class='btn btn-primary'>
            </div>
        </div>
    </form>
</div>

@stop