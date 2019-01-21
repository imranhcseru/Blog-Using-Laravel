@extends('front_end.layout')
@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('upload/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
              <h1>Welcome to My Planet</h1>
              <span class="subheading">This is how I talk</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        @foreach ($data['all_posts'] as $post)
          <div class="post-preview">
            <a href="{{url('/postid/'.$post->id)}}">
              <h2 class="post-title">
                {{$post->title}}
              </h2>
              </a>
              <h5 class="post-subtitle" style="color:green;">
                {{$post->tag}}
              </h5>
            
            <p class="post-meta">{{$post->publish_date}}</p>
          </div>
          <?php
          $text = $post->article;
          if(strlen($text)>300){
            $text=substr($text,0,300).'......';
            echo $text;
          }
          ?>
          
          
          <hr>
          @endforeach
        </div>
        
      </div>
    </div>

    <hr>
    
    @endsection