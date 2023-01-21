<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        return User::All();
    }

    public function store(Request $request){
        User::create($request->all());
    }
    
    public function show($id){
        return User::findorFail($id);
    }

    public function update(Request $request, $id){
        $usuario = User::findorFail($id);
        $usuario->update($request->all());
    }

    public function destroy(Request $request, $id){
        $usuario = User::findorFail($id);
        $usuario->delete();
    }

}