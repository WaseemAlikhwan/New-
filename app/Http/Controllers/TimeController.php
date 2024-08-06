<?php

namespace App\Http\Controllers;

use App\Models\Time;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      // $times=Time::all(); 
      // return view ('layouts.Time.index',['times'=>$times]); 

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($patientq,$pa)
    {     
     // dd($pa);
      //var_dump($patientq);
       //  dd($patientq);
       
        $doctors=Doctor::all(); 
        
        return view('layouts.Time.create',['doctors'=>$doctors,'patientt'=>$patientq,'pa'=>$pa]);
         


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(request $request){
                   
      $request->validate([
        'ds'=>['required',
        function($attribute,$value,$fail) use($request){ 
               if($request->ds=="doctor_name")
                    $fail('choose a doctor');
        } 
      ],            
        'nameP'=>['required'],
         'date'=>['required','date','after_or_equal:today',
         function($attribute,$value,$fail) use($request){
          if($this->count1($request->date,$request->ds)==8){
                    $fail('sorry times is full');
          }
          
        }        
     
        ],

          'hour'=>['required','integer','between:8,15',function($attribute,$value,$fail) use($request){ 
            if($this->checkdate($request->date,$request->hour,$request->ds)){
              
              $hours=$this->hoursdate($request->date,$request->ds); 
              if(count($hours)!=8){
              $ho='';             
               foreach($hours as $hour ){
                  $ho.=" ".$hour;      
               }
              $fail($ho);
              }
            }
   
          }
             
      ],
      ]
      ); 
                  
          $doctor_id=$request->ds;
          $date1=$request->date;
          $hour=$request->hour;
           $user_id=$request->nameP;
         Time::create([
                'doctor_id'=>$doctor_id,
               'patient_id'=> $user_id,
                'date'=>$date1,
                 'hour'=>$hour 
         ]);
    
        return redirect()->route('patients');
    
    }


    /**
     * Display the specified resource.
     */
    public function show(Time $time)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Time $time)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Time $time)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Time $time)
    {
        //
    }


            public function checkdatehour($date){
      
              return   Time::where('date',$date)->get();

                  }


            public function hoursdate($d1,$d3){
                     $d2=$d1;
                 $notvalid=$this->hoursdatee($d2,$d3);
                                   
                    $hours=array(8,9,10,11,12,13,14,15);
                        $not=array();
                        foreach($notvalid as $f1){                           
                           static  $i=0;
                         $not[$i]=$f1['hour'];                             
                                $i++;
                                      }                         
                           return  $valid =array_diff($hours,$not);
                              
                                     }


             public function hoursdatee($d1,$d3){
                  return    Time::where('date',$d1)->where('doctor_id',$d3)->get('hour');
                                    
                        }
                    
                      
            public function checkdate($d1,$d2,$d3){
                                              
                      return Time::where('date',$d1)->where('hour',$d2)->where('doctor_id',$d3)->get();
                                     }



             public function count1($date,$ds){
             
              return Time::where('date',$date)->where('doctor_id',$ds)->count();  

             } 















                                            














                                            














}
