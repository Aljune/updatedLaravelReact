<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectAPIController extends Controller
{
    public function projectList()
    {
      try{
        $getAll = Project::orderBy('id','desc')->get();

        return response()->json([
            'value'  => $getAll,
            'status' => 'success',
            'message' => 'list getAll() success'
            ]);

    }catch (\Exception $e){
        return [
        'value'  => [],
        'status' => 'error',
        'message'   => $e->getMessage()

        ];
    }
}

    public function createProject(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required',
                'introduction' => 'required',
                'location' => 'required',
                'cost' => 'required'
            ]);

            $data = [
                'name' => $request->name,
                'introduction' => $request->introduction,
                'location' => $request->location,
                'cost' => $request->cost,
            ];

            $project = Project::create($data);

            return response()->json([
                'value'  => $project,
                'status' => 'success',
                'message' => 'Project Added success'
            ]);

        }catch (\Exception $e){
            return [
                'value'  => [],
                'status' => 'error',
                'message'   => $e->getMessage()

            ];
        }
    }

    public function removeProject(Request $request)
    {
        try{
            $removeProject = $request->id;
            $getAllgetProject = Project::find($removeProject);
            if($getAllProject){
                $getAllProject->delete();
            }
            return response()->json([
                'value'  => [],
                'status' => 'success',
                'message' => 'Project Removed Successfully !!'
            ]);

        }catch (\Exception $e){
            return [
                'value'  => [],
                'status' => 'error',
                'message'   => $e->getMessage()

            ];
        }
    }

    public function projectDetail(Request $request) // Item 6. sa instruction
    {
        try{
            $projectID = $request->id;
            $getProjectData = Project::find(projectID);
            return response()->json([
                'value'  => $getProjectData,
                'status' => 'success',
                'message' => 'Project Removed Successfully !!'
            ]);

        }catch (\Exception $e){
            return [
                'value'  => [],
                'status' => 'error',
                'message'   => $e->getMessage()

            ];
        }
    }

}
