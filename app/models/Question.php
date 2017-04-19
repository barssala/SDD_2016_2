<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model {

    protected $table = 'question';
	
	protected $primaryKey = "id";

	protected $fillable = ["assignment_id ", "name", "description", "guideline", "score", "active", "deleted"];
}

?>