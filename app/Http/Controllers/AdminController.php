<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\News;
use App\Models\Contact;
use App\Models\User;
class AdminController extends Controller
{
    public function addview(){
        return view('admin.add_doctor');
    }

    public function upload(Request $request){

        $request->validate([
            'doctor_name'=>'required',
            'email'=>'required',
            'phone'=>'numeric',
            'speciality'=>'required'
        ]);

        $doctor=new Doctor();
        $doctor->doctor_name=$request->doctor_name;
        $doctor->email=$request->email;
        $doctor->phone=$request->phone;
        $doctor->speciality=$request->speciality;
        $doctor->room_no=$request->room_no;
        $image=$request->img;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->img->move('doctorimg',$imagename);
        $doctor->image=$imagename;

        $doctor->save();

        return back()->with('message','Doctor Added Successfully');
    }

    public function showappointments(){
        $data=Appointment::all();
        return view('admin.showappointment',compact('data'));
    }

    public function approved($id){
          $data=Appointment::find($id);
          $data->status='Approved';
          $data->save();
          return redirect()->back()->with('message','Appointment approved successfully');
    }

    public function cancelled($id){
        $data=Appointment::find($id);
        $data->status='Cancelled';
        $data->save();
        return redirect()->back()->with('message','Appointment cancelled successfully');
    }

    public function managedoctors(){
        $data=Doctor::all();
        return view('admin.manage_doctors',compact('data'));
    }

    public function deletedoctor($id){
        $data=Doctor::find($id);
        $data->delete();
        return redirect()->back()->with('message','Doctor deleted successfully');
    }

    public function updatedoctor($id){
        $data=Doctor::find($id);
        return view('admin.update_doctors',compact('data'));
    }

    public function update(Request $request,$id){
        $data=Doctor::find($id);
        $data->doctor_name=request('doctor_name');
        $data->email=request('email');
        $data->phone=request('phone');
        $data->speciality=request('speciality');
        $data->room_no=request('room_no');
        $image=$request->img;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->img->move('doctorimg',$imagename);
            $data->image=$imagename; 
        }
        $data->save();
        return redirect()->back()->with('message','Doctor updated successfully');
    }

    public function addnews(){
        return view('admin.add_news');
    }

    public function storenews(Request $request){

        $request->validate([
            'title'=>'required|max:255',
            'description'=>'required',
        ]);
        $news=new News();
        $news->title=$request->title;
        $news->topic=$request->topic;
        $news->description=$request->description;
        $news->date=$request->date;
        $image=$request->img;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->img->move('newsimg',$imagename);
        $news->image=$imagename;
        $news->save();
        return redirect()->back()->with('message',"News Added Successfully");
    }

    public function managenews(){
        $data=News::all();
        return view('admin.manage_news',compact('data'));
    }

    public function deletenews($id){
        $data=News::find($id);
        $data->delete();
        return redirect()->back()->with('message',"News Deleted Successfully");
    }

    public function updatenews($id){
        $newsdata=News::find($id);
        return view('admin.update_news',compact('newsdata'));
    }

    public function updatenewsdata(Request $request,$id){
        $newsdata1=News::find($id);
        $newsdata1->title=$request->title;
        $newsdata1->topic=$request->topic;
        $newsdata1->description=$request->description;
        $newsdata1->date=$request->newsdate;
        $image=$request->img;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->img->move('newsimg',$imagename);
            $newsdata1->image=$imagename;
        }
        $newsdata1->save();
        return redirect()->back()->with('message',"News Updated Successfully");
    }

    public function showcontacts(){
        $contactinfo=Contact::all();
        return view('admin.all_contacts',compact('contactinfo'));
    }

    public function showusers(){
        $users=User::all();
        return view('admin.manage_users',compact('users'));

    }

    public function deleteuser($id){
        $user=User::find($id);
        $user->delete();
        return redirect()->back()->with('message',"User Deleted Successfully");
    }

    public function updateuser($id){
      $userupdate=User::find($id);
      return view('admin.update_user',compact('userupdate'));

    }

    public function updateuserinfo(Request $request,$id){
        $updateuser=User::find($id);
        $updateuser->name=$request->username;
        $updateuser->email=$request->email;
        $updateuser->phone=$request->phone;
        $updateuser->address=$request->address;
        $updateuser->save();
        return redirect()->back()->with('message',"User Updated Successfully");
    }

    public function searchpatient(Request $request){
        $query=$request->input('query');
        $searchresult=Appointment::where('name','like','%'.$query.'%')
        ->orWhere('email','like','%'.$query.'%')
        ->orWhere('phone','like','%'.$query.'%')
        ->orWhere('doctor','like','%'.$query.'%') 
        ->orWhere('date','like','%'.$query.'%')
        ->orWhere('status','like','%'.$query.'%') 
        ->get();
        return view('admin.showappointment',['data' => $searchresult, 'query' => $query]);
    }
}
