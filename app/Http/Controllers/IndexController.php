<?php


namespace App\Http\Controllers;

class IndexController extends Controller
{
    function welcome() {
    	return view('welcome');
    }
    function buy() {
    	return view('buy');
    }
}
