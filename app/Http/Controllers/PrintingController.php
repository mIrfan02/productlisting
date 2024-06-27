<?php

namespace App\Http\Controllers;

use App\Models\Printing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PrintingController extends Controller
{
    public function create(){
        return view('AdminDashboard.Printingform');
    }
    public function store(Request $request){
        // Validate the incoming request data
        $request->validate([
            'Title'=>'required',
        ]);
        // You have a Printing model///
        $print = new Printing();
        $print->Title = $request->input('Title');
        
        // Save the Print instance
        $print->save();
    
        return redirect()->route('printingpage');
    }
    public function index(){
           $print = Printing::all();
           return view('AdminDahboard.Printing', ['print' => $print]);
       }
       public function edit($id){
        $print= Printing::where('id',$id)->first();

        return view('AdminDashboard.EditPrints', ['print' => $print]);
    }
    public function update( Request $request ,$id){
        $request->validate([
            'Title'=>'required',
        ]);
    
        $print = Printing::findOrFail($id); 
        $print->Title = $request->input('Title');
        $print->save(); // Save the changes
        return redirect('/printing');
    }
    public function destroy($id){
        $print= Printing::where('id',$id)->first();
        $print->delete();
        return redirect('/printing');
    }
        
    }

