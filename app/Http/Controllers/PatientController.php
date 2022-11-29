<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StorepatientRequest;
use App\Http\Requests\UpdatepatientRequest;
use App\Models\patient;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return patient::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepatientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $fields =   $request->validate([
            'name'=>'required',
            'age'=>'required',
            'tel'=>'required',
            'occup'=>'required',
            'user_id'=>'required',
        ]);

        $user=patient::where('tel', $fields['tel'])->first();

        if($user){

            return response($user,205);
        }
        return patient::create($request->all());
    }

    public function find($id){

        return patient::find($id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show($unit)
    {
        //
        return patient::where([['unit', '=',$unit]])->get();
    }



    public function look($text){
   


    
        return patient::where([['name', 'like', '%'.$text.'%'],['tel', 'like', '%'.$text.'%']])->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepatientRequest  $request
     * @param  \App\Models\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepatientRequest $request, patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(patient $patient)
    {
        //
    }
}





//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */

//     /**
//      * Display the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function show($id)
//     {
//         //

//         return Order::find($id);


//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, $id)
//     {
//         //
//        $fields= $request->validate([
//             'status'=>'required',


//         ]);
//         $status=$fields['status'];
//         $order = Order::find($id);
//         if($status=='7'){
//           if($order['status']=='0'){
//             $order->update($request->all());
//             return $order;
//           }else{
//             return 'You need to be faster';
//           }
            

//         }

//         $order->update($request->all());
     
//         if($status=='11'){
//             $driver = Provier::find($order['provider_id']);
//             $lemo = Lemo::find($driver['from']);

//             $palance = $lemo['palance'];
//             $palanceAfter= $palance- ($order['fee']*5/100) ;
//         //    $doit= $lemo->update(['palance'=>$persantag]);
//             if($palanceAfter<0){
//                 $providers=   Provier::  where('from', '=' ,$lemo['id'])->update(['blocked'=>'1']);
//                 return $providers;
//             }
            
//            return $palanceAfter;

//         }
//         return $order;

//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         //
//         return Order::destroy($id);
//     }
//         /**
//      * Search for name 
//      *
//      * @param  str  $name
//      * @return \Illuminate\Http\Response
//      */
//     public function search($name)
//     {
//         //
//         return Order::where('name', 'like', '%'.$name.'%')->get();
//     }

//             /**
//      * Search for phone 
//      *
//      * @param  str  $phone
//      * @return \Illuminate\Http\Response
//      */
//     public function my_orders($phone)
//     {
//         //
//         return Order::where('user_phone', '=' ,$phone)->get();
//     }

//                 /**
//      * Search for phone 
//      *
//      * @param  str  $phone
//      * @return \Illuminate\Http\Response
//      */
//     public function getorders($phone)
//     {


         
//         //
//         return Order::where([['car_type', '=' ,$phone],['status', '=' ,'0']])->get();
//     }



//                 /**
//      * Search for phone 
//      *
//      * @param  str  $phone
//      * @return \Illuminate\Http\Response
//      */
//     public function dohaverunning($phone)
//     {
//         //
//         return Order::where('provider_phone', '=' ,$phone)->get();
//     }
// }
