<?php
/**
 * Created by PhpStorm.
 * User: dastan
 * Date: 5/13/18
 * Time: 12:30 AM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view(Request $request)
    {
        return view('tasks')->with([
            'tasks' => $request->user()->tasks
        ]);
    }

    /**
     * @param Request $request
     */
    public function create(Request $request){
        $text = $request->input('text');
        User::first()->tasks()->create([
            'text' => "task $text"
        ]);
    }
}