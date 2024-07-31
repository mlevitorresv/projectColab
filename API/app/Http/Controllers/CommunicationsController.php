<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Communication;
class CommunicationsController extends Controller
{
    public function index(){
        $communications = Communication::all();
        return response() ->json($communications);
    }

    public function show($id){
        $communication = Communication::find($id);
        if (!$communication){
            return response()->json(['error' => 'Communication not found'], 404);
        };
        return response()->json($communication);
    }

    public function store(Request $request){
        $communication = Communication::create($request->all());
        return response()->json($communication, 201);
    }

    public function destroy($id){
        $communication = Communication::find($id);
        if (!$communication) {
            return response()->json(['error' => 'Communication not found'], 404);
        }
        $communication->delete();
        return response()->json(null, 204);
    }
}
