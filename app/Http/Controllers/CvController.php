<?php

namespace App\Http\Controllers;

use App\Cv;
use Illuminate\Http\Request;
use App\Http\Requests\SaveCv;

class CvController extends Controller
{
    public function index()
    {
        $cvs = Cv::all();
        $statuses = ['Screening', 'Approved', 'Rejected'];

        return view('cvs.index', compact('cvs', 'statuses'));
    }

    public function create()
    {
        return view('cvs.create');
    }

    public function store(SaveCv $request)
    {
        $cv = new Cv;
        $cv->firstname = $request->firstname;
        $cv->lastname = $request->lastname;
        $cv->mobile = $request->mobile;
        $cv->cv = $request->cv->store('files');
        $cv->save();

        return \Redirect::to('/cvs');
    }

    public function show($cv_id)
    {
        $cv = Cv::find($cv_id);

        return $cv;
    }

    public function updateStatus(Request $request)
    {
        $statuses = [
            'approve' => 1,
            'reject'  => 2
        ];

        $cv = Cv::find($request->cv_id);

        if (! $cv) return 'Invalid Cv item';
        
        if (! $statuses[$request->status]) return 'Invalid Status';

        $cv->status = $statuses[$request->status];
        $cv->save();

        return 'Status Updated';
    }
}
