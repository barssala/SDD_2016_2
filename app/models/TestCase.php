<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class TestCase extends Model {

    protected $table = 'test_case';
	
	protected $primaryKey = "id";

	protected $fillable = ["question_id ", "input", "output"];
}

?>