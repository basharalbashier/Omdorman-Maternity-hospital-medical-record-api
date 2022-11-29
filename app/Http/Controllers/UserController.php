<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreuSResponseRequest;
use App\Http\Requests\UpdateuSResponseRequest;
use App\Models\User;
use App\Models\uSResponse;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return User::all();
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
     * @param  \App\Http\Requests\StoreuSResponseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $user=  User::create($request->all());

        $token= $user->createToken('user')->plainTextToken;
       

        $respons= [

            'user'=>$user,
            'token'=>$token

        ];
       
        return response($respons,201);

        return User::create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\uSResponse  $uSResponse
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
        return uSResponse::find($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\uSResponse  $uSResponse
     * @return \Illuminate\Http\Response
     */
    public function edit(uSResponse $uSResponse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateuSResponseRequest  $request
     * @param  \App\Models\uSResponse  $uSResponse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $us = uSResponse::find($id);
        $us->update($request->all());
        return $us;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\uSResponse  $uSResponse
     * @return \Illuminate\Http\Response
     */
    public function destroy(uSResponse $uSResponse)
    {
        //
    }



    public function login(Request $request){ 

 
        $fields =$request->validate([
            'email'=>'required',
            'password'=>'required'

        ]);
        $user=User::where('email', $fields['email'])->where('password', $fields['password'])->first();

        if(!$user){

            return response('Wrong data');
        }
        $token = $user->createToken('userLogin')->plainTextToken;

        $respons= [

            'user'=>$user,
            'token'=>$token
        ];

        return response($respons,201);


    }

    public function logout(Request $request){ 

       auth()->user()->token->each(function($token, $key) {
            $token->delete();
        });

        return 1;


    }

}













/*





*/