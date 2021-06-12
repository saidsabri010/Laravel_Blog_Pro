<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Cviebrock\EloquentSluggable\Sluggable;




class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth',['except' => ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('updated_at','DESC')->get();
        return view('posts.index',[
            'posts' => $posts,
        ]);
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
        $request->validate([
            'title' => 'required|min:2|max:240',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,svg,gif|max:10000'
        ]);

        $imagePath = uniqid()  . '-' . $request->title . '-' . 
        $request->image->extension();
        $request->image->move(public_path('images'),$imagePath);
        $post = Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image_path' =>  $imagePath,
            'slug' => str_slug( $request->input('title')),
            'user_id' => auth()->user()->id
        ]);
       
        //$imagePath = request('image')->store('uploads','public');
        //$imagePath = uniqid()  . '-' . $request->title . '-' . 
        //$request->image->extension();
        //$request->image->move(public_path('images'),$imagePath);
        //$slug = SlugService::createSlug(Post::class,'slug', $request->title);
        return redirect()->route('posts.index')->with('success','Post has been uploaded successfuly !');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('posts.show')
        ->with('post', Post::where('slug',$slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('posts.edit')
        ->with('post', Post::where('slug',$slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required|min:2|max:240',
            'description' => 'required',
        ]);

        $post = Post::Where('slug',$slug)
        ->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => str_slug( $request->input('title')),
            'user_id' => auth()->user()->id
        ]);
        return redirect('/posts')->with('success','post has been updated successfuly !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::find($id)->first();
        $posts->delete();
        return redirect()->route('posts.index')->with('success','post has been deleted successfuly !');
    }
}
