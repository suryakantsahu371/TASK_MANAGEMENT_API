<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Project;

class TaskController extends Controller
{
   public function index(Request $request)
 {
    $query = Task::query();

    if ($request->status) {
        $query->where('status', $request->status);
    }

    if ($request->assigned_to) {
        $query->where('assigned_to', $request->assigned_to);
    }

    if ($request->due_date) {
        $query->whereDate('due_date', $request->due_date);
    }

    return response()->json($query->get());
  }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $task = Task::findOrFail($id);

        if ( $task -> assigned_to != auth($id) && $task ->project->created_by != auth()->id()){
            return response ()->json(['message' => 'Forbidden'],403);
        }

        $task->update($request->all());

        return response()->json($task);    
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
