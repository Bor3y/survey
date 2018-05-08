<?php

namespace Bor3y\Survey\Http\Controllers;

use App\Http\Controllers\Controller;

class SurveyController extends Controller {

    public function index(){
        return view('survey::index');
    }

    public function test(){
        return view('survey::test');
    }
}
