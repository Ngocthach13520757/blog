<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex(){
        return view('pages.welcome');
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
