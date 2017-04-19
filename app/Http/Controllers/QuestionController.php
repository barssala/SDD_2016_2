<?php

namespace App\Http\Controllers;

use View;
use App\Http\Requests\QuestionFormRequest;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\models\Question;

class QuestionController extends BaseController {

    // public function getAssignments()
    // {
        // $assignments = Assignment::all();
        // return View::make('assignmentlist', array('assignments' => $assignments));
    // }

    public function createQuestion($assignment_id) {
        return View::make('questionCreate', array('assignment_id' => $assignment_id));
    }

	public function getQuestionUpdate($id)
    {
        $question  = Question::find($id);
		$testcases = TestCases::find($id);
		
        return View::make('questionUpdate', compact('question','testcases'));
    }
	
    public function saveQuestion(QuestionFormRequest $request) {
		
        $question = new Question;
		$question->assignment_id = $request->assignment_id;
        $question->name = $request->name;
        $question->description = $request->description;
		$question->guideline = $request->guideline;
		$question->score = $request->score;
        $question->active = $request->status == "Open";        
        $question->deleted = false;
        $question->save();
		
		return redirect('updateQuestion/'.$question->id);
		
    }

}

?>
