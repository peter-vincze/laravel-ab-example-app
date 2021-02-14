<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
	public $viewVariables = [];

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function callAction($method, $parameters) {
        $request= Request();
		$this->viewVariables['host'] = $request->getHttpHost();
		View::composer($method, function($view){
            foreach($this->viewVariables as $key => $value) {
                $view->with($key, $value);
            }
        });
        return parent::callAction($method,$parameters);
    }

}
