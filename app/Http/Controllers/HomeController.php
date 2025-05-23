<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use App\Models\Post;

use Alert;

class HomeController extends Controller
{
    public function index(){
        if(Auth::id())
        {

            $post = Post::where('post_status','=','active')->get();

            $usertype = Auth()->user()->usertype;

            if($usertype == 'user')
            {
                return view('home.homepage',compact('post'));
            }
            elseif($usertype == 'admin')
            {
                return view('admin.index');
            }
            else {
                return redirect()->back();
            }
        }
    }

    public function homepage()
    {

        $post = Post::where('post_status','=','active')->get();

        return view('home.homepage',compact('post'));
    }

    public function post_details($id){

        $post = Post::find($id);
        return view ('home.post_details',compact('post'));
    }

    public function create_post(){
        return view('home.create_post');
    }

    public function user_post(Request $request){

        $user = Auth()->user();
        $userid = $user->id;
        $username = $user->name;
        $usertype = $user->usertype;

        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = $userid;
        $post->name = $username;
        $post->usertype = $usertype;
        $post->post_status = 'pending';

        $image = $request->image;

        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('postimage',$imagename);

            $post->image = $imagename;
        }

        $post->save();

        Alert::success('Congrats','Your post was added successfully');

        return redirect()->back();

    }
}
