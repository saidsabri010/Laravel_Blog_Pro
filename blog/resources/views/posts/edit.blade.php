@extends('layouts.app')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container center_div" class="text-center">
    <h1>Edit a Post</h1>
  <br>
    <form action="/posts/{{$post->slug}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
            <div class="form-group">
              <label>Title :</label>
              <input value="{{$post->title}}" type="text" name="title" class="form-control" placeholder="Title">
            </div>
              <div class="form-floating">
                <label for="floatingTextarea">Description :</label>
                <textarea  name="description" class="form-control" placeholder="Leave a comment here" id="floatingTextarea">{{$post->description}}</textarea>
              </div>
              <br>
            
              

            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    
@endsection