<?php

/**
 * Created by PhpStorm.
 * User: dastan
 * Date: 5/12/18
 * Time: 11:09 PM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home(Request $request)
    {
        return view('home')->with([
            'undone_tasks_count' => $request->user()->tasks()->undone()->count()
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function root()
    {
        return redirect()->route('home');
    }
}