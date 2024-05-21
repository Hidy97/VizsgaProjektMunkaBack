<?php

namespace App\Http\Controllers;

use App\Models\Szavak;
use Illuminate\Http\Request;

class SzavakController extends Controller
{
    //
    public function index(){
        return Szavak::all();
    }

    public function show($id){
        return Szavak::find($id);
    }

    public function destroy($id){
        Szavak::find($id)-> delete();
    }

    public function update(Request $request, $id){
        $szo = Szavak::find($id);
        $szo->angol=$request->angol;
        $szo->magyar=$request->magyar;
        $szo->temaId=$request->temaId;
        $szo->save();
    }
    public function store(Request $request){
        $szo = new Szavak();
        $szo->angol=$request->angol;
        $szo->magyar=$request->magyar;
        $szo->temaId=$request->temaId;
        $szo->save();
    }

    public function szavakTemaSzerint(Request $request){
     
    }
}
