<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function index(){
        $projects = Project::all();
        return response() ->json($projects);
    }

    public function show($id){
        $project = Project::find($id);
        if (!$project){
            return response()->json(['error' => 'Project not found'], 404);
        };
        return response() ->json($project);
    }

    public function store(Request $request){
        $project = Project::create($request->all());
        return response()->json($project, 201);
    }

    public function update(Request $request, $id){
        $project = Project::find($id);
        $project->update($request->all());
        return response()->json($project, 200); 
    }

    public function destroy($id){
        $project = Project::find($id);
        if (!$project){
            return response()->json(['error' => 'Communication not found'], 404);
        };
        $project->delete();
        return response()->json(null, 204);
    }
}
