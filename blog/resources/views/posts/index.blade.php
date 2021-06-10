@extends('layouts.app')

@section('content')
        <div 
        
        style="
          background-image: url('https://images.pexels.com/photos/2246476/pexels-photo-2246476.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260');
          height: 700px;
          backround-position: center center;
          backround-repeat: no repeat;
          backround-attachment: fixed;
          backround-cover: cover;
        "        
      > 
    <div style="  position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);"> 
        <h1 style="color: white;font-family: 'Stint Ultra Condensed', cursive;">Do you want to be a Blogger</h1>
        <a class="mx-auto bg-warning font-bold "  href="/posts">Do You want to be Blogger!</a>
    </div>
    </div>
    
      <br>
@endsection