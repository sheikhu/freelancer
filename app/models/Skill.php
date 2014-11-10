<?php

class Skill extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

    public function projects()
    {
        return $this->morphedByMany('Project', 'skillable');
    }

    public function users()
    {
        return $this->morphedByMany('User', 'skillable');
    }

}