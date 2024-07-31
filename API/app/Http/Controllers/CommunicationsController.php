<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\Communication;
class CommunicationsController extends Controller
{
    public function index(){
        $communications = Communication::all();
        return response() ->json($communications);
    }

    public function show($id){
        $communication = Communication::find($id);
        return response() ->json($communication);
    }

    public function store(Request $request){
        $communication = Communication::create($request->all());
        return response()->json($communication, 201);
    }

    public function destroy($id){
        Communication::destroy($id);
        return response()->json(null, 204);
    }
}
