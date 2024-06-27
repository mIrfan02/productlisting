<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function create(){
        return view('AdminDashboard.Materialform');
    }
    public function store(Request $request){
        $request->validate([
            'Title'=>'required',
        ]);
        $material=new Material();
        $material->Title = $request->input('Title');
        $material->save();
        return redirect()->route('material_index');
    }
    public function index(){
        $material = Material::all();
        return view('AdminDashboard.Material', ['material' => $material]);
    }
    public function edit($id){
        $material= Material::where('id',$id)->first();

        return view('AdminDashboard.EditMaterial', ['material' => $material]);
    }
    public function update( Request $request ,$id){
        $request->validate([
            'Title'=>'required',
        ]);
    
        $material = Material::findOrFail($id); 
        $material->Title = $request->input('Title');
        $material->save(); // Save the changes
        return redirect('/materialindex');
    }
    public function destroy($id){
        $material= Material::where('id',$id)->first();
        $material->delete();
        return redirect('/materialindex');
    }
}
