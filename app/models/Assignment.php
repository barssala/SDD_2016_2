<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model {

    protected $table = 'assignment';
	
	protected $primaryKey = "id";

	protected $fillable = ["name", "description", "duedate", "active", "deleted"];
}

?>