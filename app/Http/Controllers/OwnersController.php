<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owners;

class OwnersController extends Controller
{
    public function index(){
        $owners = Owners::all();
        return view('index', ['owners' => $owners]);
    }
    public function create(){
        return view('create');
    }
    public function add(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required|regex:/^[0-9]{9,15}$/',
            'email' => 'required|email',
            'address' => 'required'
        ]);

        $newOwner = Owners::create($data);

        return redirect(route('owners.index'))->with('success', 'Pridėta');
    }
    public function edit(Owners $owner){
        return view('edit', ['owner' => $owner]);
    }
    public function update(Owners $owner, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required|regex:/^[0-9]{9,15}$/',
            'email' => 'required|email',
            'address' => 'required'
        ]); 

        $owner->update($data);

        return redirect(route('owners.index'))->with('success', 'Atnaujinta');
    }
    public function delete(Owners $owner){

        $owner->delete($owner);

        return redirect(route('owners.index'))->with('success', 'Ištrinta');
    }
}
