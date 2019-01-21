<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
class front_controller extends Controller
{
    public function home(){
        $data = array();
        $data['all_posts'] = DB::table('post')->where('type','published')->orderBy('publish_date')->get();
        $data['article'] = DB::select('SELECT LEFT(article, 100)  FROM post');
        return view('front_end.home')->with('data',$data);
    }

    public function post_details($post_id){
        $data = array();
        $data['post'] =DB::table('post')->where('id',$post_id)->first();
        $data['allpost'] =DB::table('post')->get();
        $data['comment'] =DB::table('comment')->where('post_id',$post_id)->orderBy('date', 'desc')->get();
        return view('front_end.post_details')->with('data',$data);
    }

    public function about(){
        return view('front_end.about');
    }

    public function contact(){
        return view('front_end.contact');
    }

    public function message(Request $request ){
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['message'] = $request->message;
        $data['date'] =  date('Y-m-d'); 
        DB::table('message')->insert(array('name'=>$data['name'],'email'=>$data['email'],'message'=>$data['message'],'date'=>$data['date']));
        
        Session::put('message','Thanks . We will contact with you soon.');
        return view('front_end.contact');
    }
    

    public function comment(Request $request ,$post_id){
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['date'] =  date('Y-m-d'); 
        $data['comment'] = $request->comment;
        DB::table('comment')->where('id',$post_id)->insert(array('name'=>$data['name'],'email'=>$data['email'],'comment'=>$data['comment'],'post_id'=>$post_id,'date'=>$data['date']));
        $value = array();
        $value['post'] =DB::table('post')->where('id',$post_id)->first();
        $value['allpost'] =DB::table('post')->get();
        $value['comment'] =DB::table('comment')->where('post_id',$post_id)->orderBy('date', 'desc')->get();
        Session::put('comment','Comment Added Successfully.');
        return view('front_end.post_details')->with('data',$value);
    }
}
