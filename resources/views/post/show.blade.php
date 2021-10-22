@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <h2>{{$user->name}}</h2>
            <p> {{$post->caption}}</p>


            
            <!-- Press Button to Animate -->
            <!-- <button class="btn btn-primary" id="middle" onclick="function()"><b> Rate Me </b></button> -->

            <button class="btn btn-primary" onclick="thumbup()"> Good </button>
            <img src="/images/good.jpg" id="good" class="box1">




            <button class="btn btn-primary" onclick="thumbdown()"> Bad </button>
            <img src="/images/bad.jpg" id="bad" class="box1"> 
       

            
            <!-- Press Button to go back previous page -->
            <input type="button" class="btn btn-primary" value=" BACK " onclick="history.back(-1)">
            
        </div>

      
    </div>
</div>
@endsection
