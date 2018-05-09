<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PagesController extends Controller
{
    public function getIndex(){
<<<<<<< HEAD
        //Debugbar::info('hello');
        return view('pages.welcome');
=======
        
        $post = Post::orderBy('created_at','desc')->limit(5)->get();

        return view('pages.welcome')->withPosts($post);
>>>>>>> 303c0a259285d164019d23f76f13ef93d21e1a22
    }

    public function getAbout(){
        $first = 'Thach';
        $last = 'Huynh';
        $full = $first . ' ' . $last;
        $email = 'thachhn3@vng.com.vn';
        $data = ['fullname'=>$full, 'email'=>$email];
        return view('pages.about')->withData($data);
    }

    public function getContact(){
        return view('pages.contact');
    }

}
