<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    var $route = "line-chart";
    public function index()
    {
        return view('backend.report.line-chart');
    }
    //
}