<?php

namespace App\Http\Controllers;

use App\Cv;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function index()
    {
        $cvs = Cv::all();

        return view('cv.index', compact('cvs'));
    }

    public function create()
    {
        return view('cv.create');
    }
}
