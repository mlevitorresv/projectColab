<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use Illuminate\Routing\Events\ResponsePrepared;

class UsersController extends Controller
{
    public function index(){
        $users = User::all();
        return response() ->json($users);
    }

    public function show($id){
        $user = User::find($id);
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }
        return response()->json($user);
    }

    public function store(Request $request){
        $user = User::create($request->all());
        return response()->json($user, 201);
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->update($request->all());
        return response()->json($user, 200); 
    }

    public function destroy($id){
        $user = User::find($id);
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }
        $user->delete();
        return response()->json(null, 204);
    }
}
