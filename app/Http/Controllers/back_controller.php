<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
class back_controller extends Controller{
    public function index(){
        $data = array();
        $data['all_posts'] = DB::table('post')->get();
        $data['all_published_posts'] = DB::table('post')->where('type','published')->get();
        $data['all_drafts'] = DB::table('post')->where('type','draft')->get();
        return view('back_end.index')->with('data',$data);
    }
    public function logout(){
        Session::put('admin_name',null);
        return Redirect::to('/admin');
    }
    public function add_post(){
        return view('back_end.add_post');
    }
    public function login(){
        return view('back_end.login');
    }

    public function check_admin(Request $request){
        $data = array();
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $user = DB::table('admin')->where('email',$data['email'])->where('password',$data['password'])->first();
        if($user){
           // echo $user->name;
           Session::put('admin_name',$user->name);
           Session::put('admin_id',$user->id);
            return Redirect::to('/admin/home/');
        }
        else{
            Session::put('text','Credentials Does not match');
            return Redirect::to('/admin');
        }
    }
    public function store(Request $request){
            $data = array();
            $data['title'] = $request->post_title;
            $data['tag'] = $request->choose_tag;
            $data['desc'] = $request->post_desc;
            $data['image'] =$request->post_img;
            $data['date'] =  date('Y-m-d'); 
            $data['admin_name'] = Session::get('admin_name');   
            $this->validate($request, [
                'post_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        
            if ($request->hasFile('post_img')) {
                $image = $request->file('post_img');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/upload');
                $image->move($destinationPath, $name);
            }
            $data['image'] =$name;
            switch($request->submit) {
                case 'publish': 
                $data['type'] = "published";
                DB::table('post')->insert(array('title'=>$data['title'],'tag'=>$data['tag'],'image'=>$data['image'],'article'=>$data['desc'],'type' => $data['type'],'publish_date' => $data['date'],'create_date' => $data['date'],'admin_name'=>$data['admin_name']));
                break;
            
                case 'draft':
                $data['type'] = "draft";
                DB::table('post')->insert(array('title'=>$data['title'],'tag'=>$data['tag'],'image'=>$data['image'],'article'=>$data['desc'],'type' => $data['type'],'publish_date' => null,'create_date' => $data['date'],'admin_name'=>$data['admin_name'])); 
                break;
            }
            Session::put('message','Post Added Successfully');
            return Redirect::to('/admin/allposts');
            
    }

    public function all_posts(){
        $data = array();
        $data['all_posts'] = DB::table('post')->get();
        // $admin_id = Session::get('admin_id');
        // $data['admin'] = DB::table('admin')->where('id',$admin_id)->first();
        
        return view('back_end.all_posts')->with('data',$data);
    }

    public function published_posts(){
        $data = array();
        $data['all_published_posts'] = DB::table('post')->where('type','published')->get();
        // $admin_id = Session::get('admin_id');
        // echo $admin_id;
        // $data['admin'] = DB::table('admin')->where('id',$admin_id)->first();
        
        return view('back_end.published_posts')->with('data',$data);
    }

    public function drafts(){
        $data = array();
        // $admin_id = Session::get('admin_id');
        // $data['admin'] = DB::table('admin')->where('id',$admin_id)->first();
        $data['all_drafts'] = DB::table('post')->where('type','draft')->get();
        return view('back_end.drafts')->with('data',$data);
    }

    public function add_admin(){
        
    }

    public function admin_list(){
        
    }

    public function post_details($post_id){
        $post = DB::table('post')->where('id',$post_id)->first();
        return view('back_end.post_details')->with('post',$post);
    }

    public function publish_post($post_id){
        $post = DB::table('post')->where('id',$post_id)->update(['type'=>'published']);
        $all_published_posts = DB::table('post')->where('type','publish')->get();
        return view('back_end.published_posts')->with('all_published_posts',$all_published_posts);
    }

    public function edit_post($post_id){
        $post = DB::table('post')->where('id',$post_id)->first();
        return view('back_end.edit_post')->with('post',$post);
    }

    public function update_post(Request $request){
        $data = array();
        $data['title'] = $request->post_title;
        $data['tag'] = $request->choose_tag;
        $data['desc'] = $request->post_desc;
        $data['image'] =$request->post_img;
        $data['date'] =  date('Y-m-d');    
        $this->validate($request, [
            'post_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        if ($request->hasFile('post_img')) {
            $image = $request->file('post_img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/upload');
            $image->move($destinationPath, $name);
        }
        $data['image'] =$name;
        switch($request->submit) {
            case 'publish': 
            $data['type'] = "published";
            DB::table('post')->update(array('title'=>$data['title'],'tag'=>$data['tag'],'image'=>$data['image'],'article'=>$data['desc'],'type' => $data['type'],'publish_date' => $data['date'],'create_date' => $data['date'],'update_date' => $data['date']));
            break;
        
            case 'draft':
            $data['type'] = "draft";
            DB::table('post')->update(array('title'=>$data['title'],'tag'=>$data['tag'],'image'=>$data['image'],'article'=>$data['desc'],'type' => $data['type'],'publish_date' => null,'create_date' => $data['date'],'update_date' => $data['date'])); 
            break;
        }
        Session::put('message','Post Updated Successfully');
        return Redirect::to('/admin/allposts');
        
    }
    public function delete_post($post_id){
        $post = DB::table('post')->where('id',$post_id)->first();
    }
    public function comment(){
        $allcomment = DB::table('comment')->get();
        return view('back_end.comment')->with('allcomment',$allcomment);
    }
    public function message(){
        $allmessage = DB::table('message')->get();
        return view('back_end.message')->with('allmessage',$allmessage);
    }
}
