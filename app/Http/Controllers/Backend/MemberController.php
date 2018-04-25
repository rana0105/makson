<?php

namespace App\Http\Controllers\Backend;

use App\Autoid;
use App\Http\Controllers\Controller;
use App\Model\Member;
use Illuminate\Http\Request;
use Session;

class MemberController extends Controller
{
   
    public function index()
    {
        $members = Member::orderBy('total_point', 'desc')->get();
        return view('backend.members.index', compact('members'));
    }

    public function getRegistration()
    {
        $autoid = Autoid::find(1);
        return view('frontend.pages.registration', compact('autoid'));
    }

    public function storeRegistration(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email|max:255|unique:members',
            'phone' => 'required|string|max:255|unique:members',
            "member_auto_id" => 'required|unique:members',
        ]);
        $register = new Member;
        $register->member_auto_id = $request->member_auto_id;
        $register->name = $request->name;
        $register->age = $request->age;
        $register->address = $request->address;
        $register->profession = $request->profession;
        $register->phone = $request->phone;
        $register->email = $request->email;
        $register->marital_status = $request->marital_status;
        $register->vehicle = $request->vehicle;
        $register->save();
        if($register){
          Autoid::find(1)->increment('autoid');
        }
        session(['member_id' => $register->id]);
        return redirect()->route('register.after.quiz')->with('success', 'Register successfully created !');
    }

    public function quiz(Request $request)
    {
      $data = $request->session()->all();
      return view('frontend.pages.quiz', compact('data'));
    }

    public function storeQuizPoint(Request $request)
    {
        $point1 = (config('quizPoint.points.quiz_1.'.$request->input('quiz_1')));
        $point2 = (config('quizPoint.points.quiz_2.'.$request->input('quiz_2')));
        $point3 = (config('quizPoint.points.quiz_3.'.$request->input('quiz_3')));
        $point4 = (config('quizPoint.points.quiz_4.'.$request->input('quiz_4')));
        $point5 = (config('quizPoint.points.quiz_5.'.$request->input('quiz_5')));
        $totalPoint = $point1 + $point2 + $point3 + $point4 + $point5;

        $this->storePointToUser(
            session()->get('member_id'),
            'quiz_point',
            $totalPoint
        );

        return redirect()->route('quiz.after.video')
            ->with('success', 'Your quiz point is successfully Store');
    }

    private function storePointToUser( $userId, $pointType, $point)
    {
        $member = Member::findOrFail($userId);

        $member->update([ $pointType => $point ]);

        return true;
    }


    public function video()
    {
      return view('frontend.pages.video');
    }

     public function storeVideoPoint(Request $request)
    {
        $point1 = (config('videoPoint.points.video_1.'.$request->input('video_1')));
        $point2 = (config('videoPoint.points.video_2.'.$request->input('video_2')));
        $point3 = (config('videoPoint.points.video_3.'.$request->input('video_3')));
        $point4 = (config('videoPoint.points.video_4.'.$request->input('video_4')));
        $point5 = (config('videoPoint.points.video_5.'.$request->input('video_5')));
        $point6 = (config('videoPoint.points.video_6.'.$request->input('video_6')));
        $totalPoint = $point1 + $point2 + $point3 + $point4 + $point5 + $point6;

        $this->storePointToUserVideo(
            session()->get('member_id'),
            'video_point',
            $totalPoint
        );

        return redirect()->route('thank.you')
            ->with('success', 'Your video point is successfully Store');
    }

    private function storePointToUserVideo( $userId, $pointType, $point)
    {
        $member = Member::findOrFail($userId);

        $member->update([ 
            $pointType => $point,
            'total_point' => 0
            ]);

        return true;
    }

    public function getThanks()
    {
        return view('frontend.pages.thankYou');
    }

}
