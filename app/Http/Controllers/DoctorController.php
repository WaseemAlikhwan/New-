<?php

namespace App\Http\Controllers;
use App\Models\Competency;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $x= Doctor::all();
         $y=competency::all();

        return view('layouts.Doctor.index' , ['doctors'=>$x],['competencies'=>$y]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
         $x=Competency::all();
        return view('layouts.Doctor.add',['competencies'=>$x]);   
    }

    /** 
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
        $data = [
            'name' => $request->name,
            'competency_id'=>$request->competency_id,
            
        ];
        if($request->name){
            Doctor::create($data);
            return redirect()->route('doctors');
        }
        else{
         echo 'no';
         return redirect()->route('doctor.add');
        }
           
   } 
   
   
  
    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
