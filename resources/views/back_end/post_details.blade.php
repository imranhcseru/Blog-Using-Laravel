@extends ('back_end.layout')
@section('content')
<a class="btn btn-info" href="{{url('/admin/editpost/'.$post->id)}}">
  <i class="halflings-icon white edit"></i>  
</a>
<a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Post?');" href="{{url('/admin/deletespot/'.$post->id)}}">
  <i class="halflings-icon white trash"></i> 
</a>
@if($post->type != "published")
  <a class="btn btn-info" onclick="return confirm('Are you sure you want to delete this item?');" href="{{url('/admin/publish/'.$post->id)}}">Publish</a>
@endif
<h3>Created By :<a class="btn btn-info" href="">Harun</a></h3>
<h3>Status :{{$post->type}}</h3>
<div class="row-fluid"><h1 class="mt-4">{{$post->title}}</h1>
  <p class="lead">
    <h3>{{$post->tag}}</h3>
  </p>
 <hr>
<p>Create Date :{{$post->create_date}}</p>
<hr>
<img  class="img-fluid rounded" src="/upload/{{$post->image}}" alt="">
<hr>{{$post->article}}
<hr>
</div>
@endsection