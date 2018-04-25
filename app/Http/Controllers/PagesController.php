<?php

namespace App\Http\Controllers;

use App\Model\Areport;
use App\Model\Bulletin;
use App\Model\Clientele;
use App\Model\Concern;
use App\Model\Cstatus;
use App\Model\Dreport;
use App\Model\Jobpost;
use App\Model\Qreport;
use App\Model\Slider;
use Illuminate\Http\Request;
use Mail;
use Storage;

class PagesController extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('id', 'desc')->limit(5)->get();
        $bulletins = Bulletin::orderBy('id', 'desc')->limit(5)->get();
        $concerns = Concern::limit(8)->get();
        $clients = Clientele::all();
        return view('frontend.index', compact('sliders', 'bulletins', 'concerns', 'clients'));
    }
    public function atAglance()
    {
        return view('frontend.pages.at-a-glance');
    }
    public function ourHistory()
    {
        return view('frontend.pages.ourHistory');
    }
    public function annualReports()
    {
        $maksonReport = Areport::where('company', 0)->get();
        $metroReport = Areport::where('company', 1)->get();
        return view('frontend.pages.annual-reports', compact('maksonReport', 'metroReport'));
    }
    public function annualReportPost(Request $request)
    {
        $maksonReports = Areport::where('company', $request->id)
                ->where('year', $request->year)->get();
        foreach ($maksonReports as $key => $report) {
            $maksonReports[$key]['fileFullpath'] = "'".asset('/uploads/'.$report->file)."'";
        }
        return response()->json($maksonReports);
    }
    public function complianceCtatus()
    {
        $maksonReport = Cstatus::where('company', 0)->get();
        $metroReport = Cstatus::where('company', 1)->get();
        return view('frontend.pages.compliance-status', compact('maksonReport', 'metroReport'));
    }
    public function compleanceReportPost(Request $request)
    {
        $maksonReports = Cstatus::where('company', $request->id)
                ->where('year', $request->year)->get();
        foreach ($maksonReports as $key => $report) {
            $maksonReports[$key]['fileFullpath'] = "'".asset('/uploads/'.$report->file)."'";
        }
        return response()->json($maksonReports);
    }
    public function quarterlyReports()
    {
        $maksonReport = Qreport::where('company', 0)->get();
        $metroReport = Qreport::where('company', 1)->get();
        return view('frontend.pages.quarterly-reports', compact('maksonReport', 'metroReport'));
    }
    public function qcompleanceReportPost(Request $request)
    {
        $maksonReports = Areport::where('company', $request->id)
                ->where('year', $request->year)->get();
        foreach ($maksonReports as $key => $report) {
            $maksonReports[$key]['fileFullpath'] = "'".asset('/uploads/'.$report->file)."'";
        }
        return response()->json($maksonReports);
    }
    public function directoReports()
    {
        $maksonReport = Dreport::where('company', 0)->get();
        $metroReport = Dreport::where('company', 1)->get();
        return view('frontend.pages.director-report', compact('maksonReport', 'metroReport'));
    }
    public function directorReportPost(Request $request)
    {
        $maksonReports = Dreport::where('company', $request->id)
                ->where('year', $request->year)->get();
        foreach ($maksonReports as $key => $report) {
            $maksonReports[$key]['fileFullpath'] = "'".asset('/uploads/'.$report->file)."'";
        }
        return response()->json($maksonReports);
    }
    public function recognition()
    {
        return view('frontend.pages.award-recognition');
    }
    public function meetPeople()
    {
        return view('frontend.pages.meet-people');
    }
    public function boardOfdirector()
    {
        return view('frontend.pages.boardOfdirector');
    }
    public function missionVision()
    {
        return view('frontend.pages.missionVision');
    }
    public function groupConcernMesl()
    {
        return view('frontend.pages.groupConcernMesl');
    }
    public function groupConcernMasml()
    {
        return view('frontend.pages.groupConcernMasml');
    }
    public function groupConcernMpdl()
    {
        return view('frontend.pages.groupConcernCtl');
    }
    public function groupConcernMal()
    {
        return view('frontend.pages.groupConcernMal');
    }
    public function groupConcernMtextile()
    {
        return view('frontend.pages.groupConcernMtextile');
    }
    public function groupConcernMakcot()
    {
        return view('frontend.pages.groupConcernMakcot');
    }
    public function groupConcernLamuni()
    {
        return view('frontend.pages.groupConcernLamuni');
    }
    public function groupConcernMalogist()
    {
        return view('frontend.pages.groupConcernMalogist');
    }
    public function invastore()
    {
        return view('frontend.pages.invastore');
    }
    public function strategy()
    {
        return view('frontend.pages.strategy-for-responsibility');
    }
    public function carrerr()
    {
        $jobposts = Jobpost::orderBy('id', 'desc')->get();
        return view('frontend.pages.carrerr', compact('jobposts'));
    }
    public function detailJob($id)
    {
        $jobpost = Jobpost::find($id);
        return view('frontend.pages.job-post', compact('jobpost'));
    }

    public function jobApply(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'file' => 'required|mimes:pdf'
        ]);
        $data = array(
            'name' => $request->name,
            'email' => $request->email
        );
        $jobpost = Jobpost::find($request->job_id);
        $data['title'] = $jobpost->title;
        $file = $request->file('file');
        // $file = Storage::disk('public')->put('cv',$request->file('file'));
        $email = Mail::send('auth.emails.cvApply', $data, function($message) use ($data, $file){
            $message->from($data['email']);
            $message->to('km.likhon.lik@gmail.com');
            $message->subject($data['name']);
            $message->attach($file,[
                        'as' => str_slug($data['name'],'_').'.pdf',
                        'mime' => 'application/pdf',
                    ]);
        });
        if($email == null){
            return redirect()->route('job.details', $request->job_id)->with('success', 'This message have been send successfully!');
        }else{
            return redirect()->route('job.details', $request->job_id)->with('error', 'This message did not send successfully!');
        }
    }


    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function postContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:6'
        ]);
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'bodyMessage' => $request->message
        );
        $email = Mail::send('auth.emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('km.likhon.lik@gmail.com');
            $message->subject($data['name']);
        });
        if($email == null){
            return redirect()->route('contact')->with('success', 'This message have been send successfully!');
        }else{
            return redirect()->route('contact')->with('error', 'This message did not send successfully!');
        }
    }
    public function postContactHome(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:6'
        ]);
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'bodyMessage' => $request->message
        );
        $email = Mail::send('auth.emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('km.likhon.lik@gmail.com');
            $message->subject($data['name']);
        });
        if($email == null){
            return redirect()->route('post.home')->with('success', 'This message have been send successfully!');
        }else{
            return redirect()->route('post.home')->with('error', 'This message did not send successfully!');
        }
    }
}
