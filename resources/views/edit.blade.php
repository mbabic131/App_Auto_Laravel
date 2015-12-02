@extends('master')

@section('content')

<h3>Izmjena podataka:</h3>
<br />

<form name="update_forma" action="{{ URL('izmjeni' , $podatak->id) }}" method="post" class="form-horizontal">

    <div class="form-group">
        <label for="auto" class="col-sm-2 control-label">Naziv automobila</label>
        <div class="col-sm-5">
            <input type="text" id="auto" name="naziv_auto" value="{{ $podatak->Automobil }}" required="required">
        </div>
    </div>

    <div class="form-group">
        <label for="teh" class="col-sm-2 control-label">Pogon</label>
        <div class="col-sm-5">
            <input type="text" id="teh" name="pogon_auto" value="{{ $podatak->Pogon }}" required="required">
        </div>
    </div>

    <div class="form-group">
        <label for="kilo" class="col-sm-2 control-label">Broj prijeđenih kilometara</label>
        <div class="col-sm-5">
            <input type="text" id="kilo" name="kilometri_auto" value="{{ $podatak->Broj_kmh }}" required="required">
        </div>
    </div>

    <div class="form-group">
        <label for="trosak" class="col-sm-2 control-label">Ukupni troškovi</label>
        <div class="col-sm-5">
            <input type="text" id="trosak" name="troskovi_auto" value="{{ $podatak->Ukupni_troskovi }}" required="required">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" value="Izmjeni" class="btn btn-primary">
        </div>
    </div>

</form>

@stop
