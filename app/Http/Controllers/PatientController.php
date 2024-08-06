<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Psy\Command\WhereamiCommand;

class PatientController extends Controller
{

    public function index()
    {
     $patients=Patient::all();
     return view('layouts.patients.index',['patients'=>$patients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('layouts.patients.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
              
            $data = [
              'name' => $request->name,
              'email' =>$request->email,
         
          ];
          Patient::create([
            'name' => $request->name,
            'email' =>$request->email,
             

          ]);
          $line1= Patient::orderby('id','DESC')->first();

          return redirect('/home/times/create/'.$line1['id'].'/'.$line1['name']);
         

    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //dd($id);
        return view('layouts.patients.edit',['iid'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       // dd($id);
       $var=[
        'name' => $request->name,
        'email' =>$request->email,
   
       ];
           $patient=patient::find($id);
           $patient->update($var);

       return redirect('/home/patients')->with('success','you update a patient!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {         
        $patient=patient::find($id);
       $patient->delete();
       return redirect('/home/patients')->with('success','you delete a patient!');
    }
}
