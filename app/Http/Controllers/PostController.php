<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
        * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id','desc')->paginate(5);
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate form data( if error appear while validate it jump back to create form)
        $this->validate($request,[
            'title' => 'required|max:255',
            'slug'  => 'required|min:5|max:255|unique:posts,slug',
            'body' => 'required'
        ]);//validate the request object with array of rules
        //store to database
        $post = new Post();
        $post->title = $request->title;
        $post->slug = str_replace(' ','_',$request->slug);
        $post->body = $request->body;
        $post->save();
        Session::flash('success','The blog post was successfully save');
        //redirect to another page
        return redirect()->route('posts.show', $post->id);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        if($post->slug === $request->slug){
            $this->validate($request,[
                'title' => 'required|max:255',
                'body' =>'required',    
            ]);
            
        }else{
            $this->validate($request,[
                'title' => 'required|max:255',
                'slug'  => 'required|min:5|max:255|unique:posts,slug',
                'body' =>'required',    
            ]);
        }
        $post->title = $request->title;
        $post->slug = str_replace(' ', '_', $request->slug);
        $post->body = $request->body;
        $post->save();
        Session::flash('success','This post has been updated successfully!');
        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        Session::flash('success', 'Blog has been deleted successfully');
        return redirect('posts');
    }
}
