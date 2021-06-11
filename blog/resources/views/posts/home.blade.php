@extends('layouts.app')

@section('content')
        <div 
        
        style="
          background-image: url('https://images.pexels.com/photos/2246476/pexels-photo-2246476.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260');
          height: 600px;
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
        <h1 style="color: white;font-family: 'Stint Ultra Condensed', cursive;">Do you want to be a Blogger!</h1>
        <a class="btn btn-primary pt-2 m-2" class="mx-auto bg-warning font-bold "  href="/posts">Click Here</a>
    </div>
    </div>
   

    

    <div class="pt-3" style="
    padding: 3%;">
  <div class="row">
    <div class="col-md-6">
      <b><h3 style="display: block;text-align:center">Recet Posts</h3></b>
        
                    <h4 class="subheading">GetLance makes it easy to connect with clients and begin doing great work.</h4>
                    <p class="text-muted">Streamlined hiring. GetLance’s sophisticated algorithms highlight projects you’re a great fit for.
                        Top Rated and Rising Talent programs. Enjoy higher visibility with the added status of prestigious programs.
                        Do substantial work with top clients. GetLance pricing encourages freelancers to use GetLance for repeat relationships with their clients.</p>
                        <a href="#" class="btn btn-primary">Find Out More</a>
    </div>
    <div class="col-md-6 how-img">
      <img src="https://images.pexels.com/photos/3861972/pexels-photo-3861972.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" style="float:right;clear:right;margin-left:150px;height:200px">

    </div>

</div>
    </div>
    <div style="height:300px" class="card pt-3">
      <h5 class="card-header">Featured</h5>
      <div class="card-body">
        <img src="https://www.computerhope.com/logo.gif" style="float:right;clear:right;margin-left:150px">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        <a href="#" class="btn btn-primary">Find Out More</a>
      </div>
    </div>
    
    
      <br>
@endsection