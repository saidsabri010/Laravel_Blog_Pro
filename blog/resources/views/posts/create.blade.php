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
    <h1>Create a Post</h1>
  <br>
    <form action="/posts" method="POST" enctype="multipart/form-data">
      @csrf
            <div class="form-group">
              <label>Title :</label>
              <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
              <div class="form-floating">
                <label for="floatingTextarea">Description :</label>
                <textarea name="description" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
              </div>
              <br>
              <div class="form-floating">
                <label for="file" class="form-label" >Select a File : </label>
                <input name="image" type="file" class="form-control" />
              </div>
              <br>

            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    
@endsection