<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Organisator;
use App\Models\User;
use Illuminate\Http\Request;

class OrganisationController extends Controller
{
    public function index(){
        $org = response()->json(Organisator::all());
        return $org;
    }

    public function show($id){
        $org = response()->json(Organisator::find($id));
        return $org;
    }

    public function destroy($id){
        //Organisator::find($id)->delete();
        return redirect('/organisation/list');
    }

    public function store(Request $request){
        $org = new Organisator();
        $org -> name = $request->name;
        $org -> description = $request->description;
        $org->save();
    }
    public function update(Request $request, $id){
        $org = Organisator::find($id);
        $org -> name = $request->name;
        $org -> description = $request->description;
        $org->save();
    }
    public function newView(){
        $org = Organisator::all();
        return view('organisation.new',['org'=> $org]);
    }
    public function editView($id){
        $event = Event::all();
        $org = Organisator::find($id);
        return view('organisation.edit',['event'=>$event ,'org'=> $org]);
    }

    public function listView(){
        $org = Organisator::all();
        return view('organisation.list',['org'=> $org]);
    }

}
