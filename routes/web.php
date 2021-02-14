<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\IndexController::class, 'welcome']);
Route::get('/buy', [App\Http\Controllers\IndexController::class, 'buy']);
Route::get('/show-autoloaders', function(){
    foreach(spl_autoload_functions() as $callback)
    {
        if(is_string($callback))
        {
            echo '- ',$callback,"\n<br>\n";
        }

        else if(is_array($callback))
        {
            if(is_object($callback[0]))
            {
                echo '- ',get_class($callback[0]);
            }
            elseif(is_string($callback[0]))
            {
                echo '- ',$callback[0];
            }
            echo '::',$callback[1],"\n<br>\n";            
        }
        else
        {
            var_dump($callback);
        }
    }
});