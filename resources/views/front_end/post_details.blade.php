<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Planet-{{$data['post']->title}}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('front_end/post/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{URL::asset('front_end/post/css/blog-post.css')}}" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">My Planet</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/about')}}">About Me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/contact')}}">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
          <h1 class="mt-4">{{$data['post']->title}}</h1>

          <!-- Author -->
          
            
            <h5 style="color:blue;">{{$data['post']->tag}}</h5>
          

          <hr>

          <!-- Date/Time -->
          <p>{{$data['post']->publish_date}}</p>

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="/upload/{{$data['post']->image}}"  alt="">

          <hr>

          <!-- data['post'] Content -->
          <p class="lead">{{$data['post']->article}}</p>

          <hr>

          <!-- Comments Form -->
          <div class="card my-4">
                       <?php
                            $message = Session::get('comment');
                            if($message){
                                echo '<h3 style="color:blue;">'.$message.'</h3>';
                                Session::put('message',null);
                            }
                        ?>    
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form action = "{{url('/comment/'.$data['post']->id)}}" method = "post">
              {{csrf_field()}}
              <label >Name</label>
              <div class="form-group">
                  <input type="text"class="form-control" name = "name">
                </div>
                <label >Email</label>
                <div class="form-group">
                  <input type ="text" class="form-control" name = "email"></textarea>
                </div>
                <label >Comment</label>
                <div class="form-group">
                  <textarea class="form-control" rows="3" name = "comment"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>

          <!-- Single Comment -->
          @foreach($data['comment'] as $comment)
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">{{$comment->name}} </h5>
              {{$comment->comment}}
            </div>
          </div>
          @endforeach
          <!-- Comment with nested comments -->
          

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Categories Widget -->
          <ul class="list-unstyled mb-0">
          <h2 style="color:green;padding-top:60px;">All Posts</h2>
          <br>
                  @foreach($data['allpost'] as $post)
                    <li>
                    <a  href="{{url('/admin/postdetails/'.$post->id)}}">{{$post->title}}</a>
                    </li>
                    <br>
                    
                   @endforeach 
                  </ul>

          <!-- Side Widget -->
          
          

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Imran Hosen</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{URL::asset('front_end/post/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{URL::asset('front_end/post/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  </body>

</html>
