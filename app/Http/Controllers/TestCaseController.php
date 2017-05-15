<?php

namespace App\Http\Controllers;

use View;

use App\Http\Requests\TestcaseFormRequest;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\models\Question;
use App\models\TestCase;

class TestCaseController extends BaseController {

    public function createTestCase($question_id) {
        return View::make('testCaseCreate', array('question_id' => $question_id));
    }

	public function editTestCase($id)
    {
		    $testCase = TestCase::find($id);
        return View::make('testCaseEdit',array('testCase' => $testCase));
    }

    public function saveTestCase(TestCaseFormRequest $request,$question_id) {

      echo "really";
      // var_dump($request);
      $testCase = new TestCase;
      $testCase->question_id = $question_id;
      $testCase->input = $request->json_input;
      $testCase->output = $request->json_output;
      $testCase->save();
		   return redirect('editQuestion/'.$question_id);
    }

	public function update(TestCaseFormRequest $request,$id){

        $testCase  = TestCase::find($id);

        $testCase->input = $request->json_input;
        $testCase->output = $request->json_output;
        $testCase->save();

        return redirect('editQuestion/'.$testCase->question_id);
    }

	public function delete($id){

		$testCase = TestCase::destroy($id);

        return redirect()->back();
    }

}

?>
