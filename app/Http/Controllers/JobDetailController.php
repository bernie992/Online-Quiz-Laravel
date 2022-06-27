<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobDetail;

class JobDetailController extends Controller
{
    public function storedata(Request $request)
    {
        $job = new JobDetail();
        $job -> job_title=$request->title;
        $job -> post_date=$request->post_date;
        $job -> last_date=$request->last_date;
        $job -> job_description=$request->job_description;
        $job -> experience=$request->experience;
        $job -> vacancy=$request->vacancy;
        $job -> location=$request->location;
        $job -> save();

        return redirect()->back();
    }

    public function showdata()
    {
        $jobshow = JobDeatail::all();

        return view('manage.career', compact('jobshow'));
    }
}
