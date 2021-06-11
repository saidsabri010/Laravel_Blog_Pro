@extends('layouts.app')

@section('content')
<div class="clearfix">
    <h2 style="text-align: center">Blog Posts</h2>
    
  </div>
  <div class="card">
    <div class="row no-gutters">
        <div class="col-auto">
            <img src="https://images.pexels.com/photos/3861961/pexels-photo-3861961.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" class="float-left mr-4 mt-2" style="float:left;clear:right;margin-left:10px;height:200px">
        </div>
        <div class="col">
            <div class="card-block p-2">
                <h4 class="card-title">Description</h4>
                <p class="m-3 p-2">This lorem ipsum generator is made for all the webdesigners, designers, webmasters and others who need lorem ipsum. Generator is made the way that everyone can use it, but especially for projects which need html markup. You can decide which html tags you want and our generator will generate just as you specified.
                    Pretty cool, isn't it?</p>
                <a href="#" class="btn btn-primary ">Keep Reading</a>
            </div>
        </div>
    </div>
</div>

@endsection