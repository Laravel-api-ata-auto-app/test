<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\UserModel;
class UserController extends Controller
{
    public function Add(){
        return view('adduser');
    }
    public function action(Request  $reguest){
        if($reguest->input('adddata')){
            $profile = $reguest->file('profile');
            $fileName = $profile->getClientOriginalName();
            $profile->move('images', $fileName);
            $name = $reguest->input('name');
            $email = $reguest->input('email');
            $gender = $reguest->input('gender');
            $subject = $reguest->input('subject');
            $usermodel = new UserModel;
            $usermodel->name = $name;
            $usermodel->email = $email;
            $usermodel->gender = $gender;
            $usermodel->subject = $subject;
            $usermodel->profile = $fileName;
            $usermodel->save();
            $userModel = UserModel::all();
            return response()->json($userModel);
        }
         if($reguest->input('showdata')){
            $usermodel = UserModel::all();
            return view('viewdata',['usermodel' => $usermodel]);
        }
        else{
            return 'error';
        }
    }
    public function view(){
        $usermodel = UserModel::all();
        return view('viewdata',['usermodel' => $usermodel]);
    }
    public function getID($id)
    {
        $userModel = UserModel::where('id', $id)->first();
        return view('delete', ['userModel' => $userModel]);
    }
    public function editeID($id)
    {
        $userModel = UserModel::where('id', $id)->first();
        return view('update', ['userModel' => $userModel]);
    }
    public function delete(Request $reguest){
        $id = $reguest->input('id');
        if($reguest->input('delete')){
            $userModel = UserModel::where('id', $id)->delete();
            return redirect('/view')->with('success', 'Data Deleted Successfully');
        }
    }
    public function update(Request $reguest){
        $id = $reguest->input('id');
        $profile=$reguest->file('profile');
            if (empty($profile)) {
            $fileName = $reguest->input('old_profile');
        } else {
            $profile = $reguest->file('profile');
            $fileName = $profile->getClientOriginalName();
            $profile->move('images', $fileName);
        }
            $name = $reguest->input('name');
            $email = $reguest->input('email');
            $gender = $reguest->input('gender');
            $subject = $reguest->input('subject');
            $userModel = UserModel::where('id', $id)->update(
                [
                    'name' => $name,
                    'email' => $email,
                    'gender' => $gender,
                  'subject' => $subject,
                   'profile' => $fileName
                ]
            );
            return redirect('/view')->with('success', 'Data Deleted Successfully');
    }
    public function index(){
        $usermodel = UserModel::all();
        return response()->json($userModel);
    }
    public function showapi(){
        $userModel = UserModel::all();
            return response()->json($userModel);
    }
}
