<?php

namespace App\Http\Controllers;

use View;

//use Illuminate\Http\Request;
//use App\Http\Requests;
//use App\Http\Requests\Request;
use App\Http\Requests\AssignmentFormRequest;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\models\Assignment;
use App\models\Question;

class AssignmentController extends BaseController {

    public function getAssignments()
    {
        $assignments = Assignment::all();
		
        return View::make('assignmentlist', array('assignments' => $assignments));
    }

	public function getAssignmentUpdate($id)
    {
        $assignment  = assignment::find($id);
		$questions = Question::find($id);
		
        return View::make('assignmentUpdate', compact('assignment','questions'));
    }
	
    public function createAssignment() {
        return View::make('assignmentCreate');
    }

    public function saveAssignment(AssignmentFormRequest $request) {
        $assignment = new Assignment;
        $assignment->name = $request->name;
        $assignment->description = $request->description;
        $assignment->active = $request->status == "Open";
        $assignment->duedate = $request->duedate;
        $assignment->deleted = false;
        $assignment->save();
        //return View::make('assignmentlist');
        return redirect('updateAssignment/'.$assignment->id);
    }
	
	public function update(AssignmentFormRequest $request,$id){
        $assignment  = assignment::find($id);
 
	    $assignment->name = $request->name;
        $assignment->description = $request->description;
        $assignment->active = $request->status;
        $assignment->duedate = $request->duedate;
		
        $assignment->save();
 
        return redirect('updateAssignment');
    }
	
	public function delete($id){
		
		$assignment = assignment::destroy($id);
	
        return redirect('getAssignments');
    }
}

?>
