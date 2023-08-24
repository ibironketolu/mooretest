<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

use Datatables;


class TaskController extends Controller
{
    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(Task::select('*'))
            ->addColumn('action', 'task-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('index');
    }
 
    public function store(Request $request)
    {  
  
        $taskId = $request->id;
  
        $task   =   Task::updateOrCreate(
                    [
                     'id' => $taskId
                    ],
                    [
                    'taskname' => $request->name, 
                    'taskdescription' => $request->description,
                    ]);    
                          
        return Response()->json($task);
    }
 
    public function edit(Request $request)
    {   
        $where = array('id' => $request->id);
        $task  = Task::where($where)->first();
       
        return Response()->json($task);
    }
 
    public function destroy(Request $request)
    {
        $task = Task::where('id',$request->id)->delete();
       
        return Response()->json($task);
    }
    
}
