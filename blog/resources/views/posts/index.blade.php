@extends('layouts.app')

@section('content')
@if (Session::has('success'))
<p style="color: blueviolet">{{Session::get('success')}}</p>
@endif
<div class="clearfix">
    <h2 style="text-align: center">Blog Posts</h2>
    
  </div>
<div class="container">
    @if (auth::check())
    <div>
        <a role="button" class="btn btn-outline-primary" href="/posts/create" >Create post</a>
    </div>
        
    @endif
    <br>
        @foreach ($posts as $post)
        <div class="card">
            <form  action="posts/{{$post->id}}" method="POST">
                @csrf
                @method('delete')
            <button style="background-color: red;" class="btn btn-success float-right" >Delete</button>
            </form>
            <div class="row no-gutters">
                <div class="col-auto">
                    
            <img src="/storage/{{$post->image_path}}" class="float-left mr-4 mt-2" style="float:left;clear:right;margin-left:10px;height:300px">
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