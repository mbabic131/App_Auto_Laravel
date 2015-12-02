<?php

namespace App\Http\Controllers;

use App\Auti;
use App\Energenti;
use App\Spremljeno;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    public function index() {

        $podaci = Spremljeno::paginate(5); //dohvaćanje svih podataka iz tablice spremljenos i prikaz 5 redova po stranici

        return view('podaci', compact('podaci'));
    }

    public function view() {

        $auti = Auti::all(); //dohvaćanje svih vrijednosti iz tablice Auti

        return view('view', compact('auti'));
    }

    public function show() {

        $Naziv = $_POST{'auto'};
        $get = DB::table('autis')->where('Naziv', $Naziv)->first();
        $id = $get->id;

        $auto = Auti::findOrFail($id);
        $Pogon = $auto->Tip;

        $one = DB::table('energentis')->where('Pogon', $Pogon)->first();
        $id = $one->id;

        $energent = Energenti::findOrFail($id);

        return view('details', compact('auto', 'energent'));
    }

    public function store(Request $request) {

        $input = $request->all();
        $input['created_at'] = Carbon::now();
        $input['updated_at'] = Carbon::now();

        $unos = new Spremljeno;
        $unos->Automobil = $input['Automobil'];
        $unos->Pogon = $input['Pogon'];
        $unos->Broj_kmh = $input['Broj_kmh'];
        $unos->Ukupni_troskovi = $input['Ukupni_troskovi'];
        $unos->created_at = $input['created_at'];
        $unos->updated_at = $input['updated_at'];

        $unos->save();

        \Session::flash('flash_message', 'Podaci su spremljeni.');

        return redirect('podaci');
    }

    public function edit($id) {

        $podatak = Spremljeno::findOrFail($id);

        return view('edit', compact('podatak'));
    }

    public function update($id, Request $request) {

        $podatak = Spremljeno::findOrFail($id);

        $podatak->Automobil = $request->naziv_auto;
        $podatak->Pogon = $request->pogon_auto;
        $podatak->Broj_kmh = $request->kilometri_auto;
        $podatak->Ukupni_troskovi = $request->troskovi_auto;

        $podatak->save();

        \Session::flash('flash_message', 'Podaci su izmjenjeni.');

        return redirect('podaci');
    }

    public function delete($id){

        $podatak = Spremljeno::findOrFail($id);
        $podatak->delete();

        \Session::flash('flash_message2', 'Podaci su obrisani.');

        return redirect('podaci');
    }
}