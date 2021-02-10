<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Jobs;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class HomeController extends Controller
{
    //

    public static function categoryList()
    {
     return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function getSetting()
    {
        return Setting::first();
    }

    public function index(){
        $setting = Setting::first();

        $jobs = Jobs::select('id','title','company','location','salaries','image','slug')->limit(4)->inRandomOrder()->get();
        $slider = Jobs::select('image')->get();


        #print_r($jobs);
        #exit();
        $data = [
            'setting'=>$setting,
            'jobs'=>$jobs,
            'slider'=>$slider,

            'page'=> 'home'
        ];


       return view('home.index',$data);
    }

    public function getjobs(Request $request)
    {

        $search = $request->input('search');
        $count = Jobs::where('title','like','%'.$search.'%')->get()->count();
        if ($count==1){
            $data = Jobs::where('title','like','%'.$search.'%')->first();
            return redirect()->route('jobs',['id'=>$data->id,'slug'=>$data->slug]);
        }
        else
        {
            return redirect()->route('jobslist',['search',$search]);
        }



        #$data = Jobs::where('title','like',$request->input('search'))->first();
        #return redirect()->route('jobs',['id'=>$data->id,'slug'=>$data->slug]);
    }
    public function jobslist($search)
    {

        $datalist = Jobs::where('title','like','%'.$search.'%')->get();
        return view('home.search_jobs',['search'=>$search,'datalist'=>$datalist]);
    }



    public function jobs($id,$slug)
    {

        $data = Jobs::find($id);
        $datalist = Image::where('jobs_id',$id)->get();
       #print_r($data);
       #exit();
        return view('home.jobs_detail',['data'=>$data,'datalist'=>$datalist]);
    }

    public function categoryjobs($id,$slug)
    {

        $datalist = Jobs::where('category_id',$id)->get();

        $data = Category::find($id);
        return view('home.category_jobs',['data'=>$data,'datalist'=>$datalist]);
    }


    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about',['setting'=>$setting]);
    }
    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }
    public function references()
    {
        $setting = Setting::first();
        return view('home.references',['setting'=>$setting]);
    }
    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();
        return redirect()->route('contact')->with('success','Message Kaydedilmiştir, Teşekkür Ederiz...');

    }
    public function faq()
    {
        $datalist = Faq::all();
        return view('home.faq',['datalist'=>$datalist]);
    }



    public function login(){

        return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }

        else
        {
            return view('admin.login');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }




    public function test($id,$name){
        return view('home.test',['id'=>$id,'name'=>$name]);
        /*
        echo "Id Number : ",$id;
        echo "<br>Name : ",$name;

        for($i =1; $i<=$id;$i++){
            echo "<br> $i.$name";
        }
        */
    }
}
