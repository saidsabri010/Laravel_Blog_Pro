@extends('layouts.app')

@section('content')
<div class="container center_div" class="text-center">
    <h1>{{$post->title}}</h1>
  <br>
  <div class="col">
    <div class="card-block p-2">
        <h2>Author</h2>
        <span>made by <b>{{$post->user->name}}</b> ,created on  {{$post->created_at}}</span>
        <h3>Title</h3>
        {{$post->title}}
        <h4 class="card-title">Description</h4>
        <p class="m-3 p-2">{{$post->description}}</p>
    </div>
</div>
</div>
    
@endsection