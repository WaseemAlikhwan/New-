<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\patient;
use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $x= Doctor::all();
         return view('layouts.Rating.index',['doctors'=>$x]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $x=Doctor::all();
        $y=patient::all();
        return view('layouts.Rating.add',['doctors'=>$x],['patients'=>$y]);   

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $check=Rating::where('patient_id',auth()->id())->where('doctor_id',$request->doctor_name)->first();
        
        if($check){
            $check->update(['rate'=>$request->rating]);
            // $massage='تم تعديل التقييم بنجاح';
        }
        else {
            $data=[
                'doctor_id'=>$request->doctor_name ,
                'patient_id' =>$request->patient_name,
                'rate'=>$request->rating,
            
            ];
        Rating::create($data);
        // $massage='تم اضافة التقييم بنجاح';
        }
        return redirect()->route('rating');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {   
        $rate= Rating::find($id);
        $sum=$rate->where('doctor_id',$id)->avg('rate');
        return view('layouts.Rating.avg',compact('rate','sum'));
    }

    // public function search(Request $request)
    // {
    //     $query= $request->input('query');
    //     $doctors=Doctor::where('name','like',"%$query%")->get();
    //     return view('layouts.Rating.index',['doctors'=>$doctors]);
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rating $rating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rating $rating)
    {
        //
    }
}
