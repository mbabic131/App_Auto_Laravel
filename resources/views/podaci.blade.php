@extends('master')

@section('content')

@if (Session::has('flash_message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ Session::get('flash_message') }}
</div>
@endif

@if (Session::has('flash_message2'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('flash_message2') }}
</div>
@endif

<script src="{{ URL::asset('JS/bootstrap.min.js') }}"></script>

<div class="container">
    <table class='table table-bordered table-hover'>
        <tr>
            <th>ID</th>
            <th>Naziv automobila</th>
            <th>Pogon</th>
            <th>Broj prijeđenih kilometara</th>
            <th>Ukupni troškovi (KN)</th>
            <th></th>
        </tr>
        @foreach ($podaci as $podatak)
            <tr>
                <td>{{ $podatak->id }}</td>
                <td>{{ $podatak->Automobil }}</td>
                <td>{{ $podatak->Pogon }}</td>
                <td>{{ $podatak->Broj_kmh }}</td>
                <td>{{ $podatak->Ukupni_troskovi }}</td>
                <td>
                    <a href='{{ URL("delete/$podatak->id") }}'><span class='glyphicon glyphicon-remove'></span> DEL</a>
                    <a href='{{ URL("update/$podatak->id/edit") }}'><span class='glyphicon glyphicon-edit'></span> EDIT</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>

{!! $podaci->render() !!}

@stop
