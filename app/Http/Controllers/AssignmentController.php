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

class AssignmentController extends BaseController {

    public function getAssignments()
    {
        $assignments = Assignment::all();

        // var_dump($assignments);
        // var_dump($user->toJson());

        return View::make('assignmentlist', array('assignments' => $assignments));
    }

    public function createAssignment() {
        return View::make('assignmentinfo');
    }

    public function saveAssignment(AssignmentFormRequest $request) {
        /*var_dump($request->name);
        var_dump($request->description);
        var_dump($request->duedate);
        var_dump($request->status);
        var_dump($request->status == "Open");*/

        $assignment = new Assignment;
        $assignment->name = $request->name;
        $assignment->description = $request->description;
        $assignment->active = $request->status == "Open";
        $assignment->duedate = $request->duedate;
        $assignment->deleted = false;
        $assignment->save();
        //return View::make('assignmentlist');
        return redirect('getAssignments');
    }

}

?>
