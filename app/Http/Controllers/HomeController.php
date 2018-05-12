<?php
/**
 * Created by PhpStorm.
 * User: dastan
 * Date: 5/12/18
 * Time: 11:09 PM
 */

namespace App\Http\Controllers;


class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
        return view('home');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function root()
    {
        return redirect()->route('home');
    }
}