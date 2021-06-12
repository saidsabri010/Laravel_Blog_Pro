@extends('layouts.app')

@section('content')
@if (Session::has('success'))
<p style="color: blueviolet">{{Session::get('success')}}</p>
@endif
<div class="clearfix">
    <h2 style="text-align: center">Blog Posts</h2>
    
  </div>
<div class="container">

    <?php // check if a user is authonticated ?>
    @if (auth::check())
    <div>
        <a role="button" class="btn btn-outline-primary" href="/posts/create" >Create post</a>
    </div>     
    @endif

    <br>
        @foreach ($posts as $post)
        <div class="card">
            <?php // check if a user is loged in and they have posts ?>
            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)

            <a style="width: 100px;position: absolute;
            right: 0;"  class="btn btn-success float-right" 
            href="/posts/{{$post->slug}}/edit">Update</a>
            <br>
            <br>
            <form  action="posts/{{$post->id}}" method="POST">
                @csrf
                @method('delete')
            <button style="background-color: red;" onclick="return confirm('Are you sure you want to delete this post?');" class="btn btn-success float-right" >Delete</button>
            </form>
                
            @endif
            
            <div class="row no-gutters">
                <div class="col-auto">                   
            <img  src=" {{asset('images/' . $post->image_path)}}" class="float-left mr-4 mt-2" style="float:left;clear:right;margin-left:10px;height:300px;position:relative;top:-10px">
                </div>
                    <div class="col">
                        <div class="card-block p-2">
                            <h2>Author</h2>
                            <span>made by <b>{{$post->user->name}}</b> ,created on  {{$post->created_at}}</span>
                            <h3>Title</h3>
                            {{$post->title}}
                            <h4 class="card-title">Description</h4>
                            <p class="m-3 p-2">{{$post->description}}</p>
                            <a href="/posts/{{$post->slug}}" class="btn btn-primary ">Keep Reading</a>
                        </div>
                    </div>
            </div>
        </div>
            
        @endforeach
</div>

<br>
@endsection