

@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-3">
           <img class="rounded-circle animate__animated animate__slideInLeft" width="150" id="image" src="/storage/{{ $profile->image }}">

       </div>

       <div class="col-md-9">
           <h3>{{ $user->name }}</h3>
           <span><strong>0</strong> posts</span>
           <span><strong>{{ $numPosts }}</strong> posts</span><br /><br />


            <!-- Press this wordings to Edit user's profile  -->
           <div class="pt-3">{{$profile->description}}</div>
           <div class="pt-3"><a href="/profile/edit"><b> Edit profile </b></a></div>


        </div>
   </div>


    <!-- Display images of each post for different days -->
    <div class="row pt-5">
        @foreach($posts as $post)
            <div class="col-4 mb-5">
                <a href="/post/{{$post->id}}">
                    <img src="/storage/{{$post->image}}" class="w-100">
                </a>                
            </div>
        @endforeach
    </div>


</div>
@endsection




