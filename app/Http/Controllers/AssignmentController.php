<?php

namespace App\Http\Controllers;

use View;

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

    public function createAssignment() {
        return View::make('assignmentCreate');
    }

	public function editAssignment($id)
  {
    $assignment  = assignment::find($id);
    $questions = Question::where('assignment_id', $id)->get();

    return View::make('assignmentEdit', compact('assignment','questions'));
  }

    public function saveAssignment(AssignmentFormRequest $request) {
        $assignment = new Assignment;
        $assignment->name = $request->name;
        $assignment->description = $request->description;
        $assignment->active = $request->status == "Open";
        $assignment->duedate = $request->duedate;
        $assignment->deleted = false;
        $assignment->save();

        return redirect('editAssignment/'.$assignment->id);
    }

	public function update(AssignmentFormRequest $request,$id){

        $assignment  = assignment::find($id);

	    $assignment->name = $request->name;
        $assignment->description = $request->description;
        $assignment->active = $request->status == 'ACTIVE' ? 1 : 0;
        $assignment->duedate = $request->duedate;

        $assignment->save();

        return redirect('editAssignment/'.$assignment->id);
    }

	public function delete($id){

		$assignment = assignment::destroy($id);

        return redirect('getAssignments');
    }
}

?>
