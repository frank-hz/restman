<?php 

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class JobController extends BaseController {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function log(){
        echo "LOG IN";
    }

    function save(){
        echo "SAVE_";
    }
}