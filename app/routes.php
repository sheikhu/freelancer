<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('projects', 'ProjectsController');
Route::resource('projects', 'CategoriesController');
Route::resource('skills', 'SkillsController');


Route::get('/', function(){

    return View::make('index', ['projects' => Project::paginate(10)]);
});
?>
