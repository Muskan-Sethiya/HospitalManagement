<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Pagination\Paginator;
use App\Models\News;
use App\Models\Contact;


class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype=='0'){
                $doctor=Doctor::all();
                $newsItem = News::latest()->take(3)->get();
                return view('user.home',compact('doctor','newsItem'));
            }
            else{
                $doctorCount = Doctor::count();
                $appointmentcount=Appointment::count();
                $usercount=User::count();
                $newscount=News::count();
                return view('admin.home',compact('doctorCount','appointmentcount','usercount','newscount'));
            }
        }else{
            return redirect()->back();
        }
    }

    public function index(){
        if(Auth::id()){
            return redirect('home');
        }
        else{
            $doctor=Doctor::all();
            $newsItem = News::latest()->take(3)->get();
            return view('user.home',compact('doctor','newsItem'));
        }
    }

    public function aboutview(){
        $latestdoctor=Doctor::latest()->take(3)->get();
        return view('user.about',compact('latestdoctor'));
    }

    public function appointment(Request $request){
       $request->validate([
           'username'=>'required',
           'email'=>'required|email',
           'date'=>'required',
           'doctor'=>'required',
           'phone'=>'required',
       ]);

       $data=new Appointment();
       $data->name=$request->username;
       $data->email=$request->email;
       $data->date=$request->date;
       $data->doctor=$request->doctor;
       $data->phone=$request->phone;
       $data->message=$request->message;
       $data->status='In progress';
       if(Auth::id()){
        $data->user_id=Auth::user()->id;
       }
       $data->save();
       return redirect()->back()->with('message','Appointment request sent successfully, We will contact with you shortly');
    }

    public function myappointment(){
        if(Auth::id()){
            $userid=Auth::user()->id;
            $appoint=Appointment::where('user_id',$userid)->get();
            return view('user.my_appointment',compact('appoint'));
        }else{
            return redirect()->back();
        }
     
    }

    public function cancel_appoint($id){
        $data=Appointment::find($id);
        $data->delete();
        return redirect()->back()->with('message','Appointment canceled successfully');

    }

    public function contactview(){
        return view('user.contact');
    }

    public function storecontact(Request $request){
           $request->validate([
              'fullName'=>'required',
              'email'=>'required|email',
              'message'=>'required'
           ]);

           $contact=new Contact();
           $contact->fullName=$request->fullName;
           $contact->email=$request->email;
           $contact->subject=$request->subject;
           $contact->message=$request->message;
           $contact->save();
           return redirect()->back()->with('message',"Information Send Successfully");
    }
}
