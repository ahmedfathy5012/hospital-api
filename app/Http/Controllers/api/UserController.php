<?php

namespace app\Http\Controllers\api;

use App\Doctor;
use App\Http\Resources\CountResource;
use App\Http\Resources\rolesResource;
use App\Http\Resources\UserResource;
use App\Http\Resources\UsersResource;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\VarDumper\Cloner\Data;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate();
        return new UsersResource($users);
    }


    public function register(Request $request){
      $request->validate([
          'Identification_number' => 'required',
          'name'=>'required',
      ]);
        $user = new User();
        $user->Identification_number = $request->input('Identification_number');
        $user->name = $request->input('name');
        $user->password = Hash::make($request->input('Identification_number'));
        $user->api_token = bin2hex(openssl_random_pseudo_bytes(30));
       $user->save();

       return $user->id;
    }



    public function login(Request $request){
        $request->validate([
            'Identification_number' => 'required',
            'password'=>'required',
        ]);
        $userIdent = $request->input('Identification_number');
        $credintials = $request->only('Identification_number','password');
        if(Auth::attempt($credintials)){
            $user = User::where('Identification_number' , $userIdent)->first();
            return new UserResource($user);
        }
        $message = [
            'error' => true,
            'message' => 'User Login attempt Failed' ,
        ];
        return response($message,401);
    }


    public function data_count(){
        return new CountResource(User::all());
    }


    public function store(Request $request)
    {
        //
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return new UserResource($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getRoles(){
        return rolesResource::collection(Role::all());
    }
}
