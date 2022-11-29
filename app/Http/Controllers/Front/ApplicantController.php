<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{


    public function store(Request $request)
    {

        $CV = $request->CV;
        if ($CV) {
            $file = $request->file('CV');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/CV', $filename);
        }
        $val = $request->validate([
            'name' => 'required|max:255',
            'CV' => 'required|mimes:pdf'
        ]);
        // $val['CV'] = $request->CV;
        $val['job_id'] = $request->id;

        // Applicant::create([
        //     'name' => $request->name,
        //     'CV' => $filename,
        //     'job_id' => $request->id
        // ]);
        Applicant::create($val);
        return redirect()->route('show', $request->id);
    }
}