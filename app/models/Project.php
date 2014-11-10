<?php

class Project extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

    public function categories()
    {
        return $this->morphToMany('Category', 'categorizable');
    }

    public function skills()
    {
        return $this->morphToMany('Skill', 'skillable');
    }

}
