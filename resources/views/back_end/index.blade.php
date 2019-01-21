@extends('back_end.layout')
@section('content')
<div class="row-fluid">	

				
				<a class="quick-button metro red span2" href="{{URL::to('/admin/comment')}}">
					<i class="icon-comments-alt"></i>
					<p>Comments</p>
					<span class="badge"></span>
				</a>
				<a class="quick-button metro pink span2" href="{{URL::to('/admin/message')}}">
					<i class="icon-envelope"></i>
					<p>Messages</p>
					<span class="badge"></span>
				</a>
				<div class="clearfix"></div>
								
			</div><!--/row-->
			<div class="box-header">
						<h2><i class="halflings-icon white user"></i><span class="break"></span>All Posts</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
		
						</div>
					</div>
<div class="box-content">
						<table class="table">
							  <thead>
								  <tr>
									  <th>Post title</th>
									  <th>Create Date</th>
									  <th>Post State</th>
									                                           
								  </tr>
							  </thead>   
							  <tbody>
                              @foreach($data['all_posts'] as $post)
								<tr>
                                    	<td><a class="btn btn-info" href="{{url('/admin/postdetails/'.$post->id)}}">{{$post->title}}</a></td>
                                        <td class="center">{{$post->create_date}}</td>
                                        <td class="center">{{$post->type}}</td>
                                                                               
								</tr>
                                @endforeach
							  </tbody>
						 </table>      
					</div>
					<div class="box-header">
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Published Posts</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
		
						</div>
					</div>
					<div class="box-content">
						<table class="table">
							  <thead>
								  <tr>
									  <th>Post title</th>
									  <th>Published Date</th>
									                                            
								  </tr>
							  </thead>   
							  <tbody>
                              @foreach($data['all_published_posts'] as $published_post)
								<tr>
                                    	<td><a class="btn btn-info" href="{{url('/admin/postdetails/'.$published_post->id)}}">{{$published_post->title}}</a></td>
                                        <td class="center">{{$published_post->publish_date}}</td>
                                                                               
								</tr>
                                @endforeach
							  </tbody>
						 </table>      
					</div>	
					<div class="box-header">
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Drafts</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
		
						</div>
					</div>
					<div class="box-content">
						<table class="table">
							  <thead>
								  <tr>
									  <th>Post title</th>
									  <th>Create Date</th>
									  <th>Added By</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
                              @foreach($data['all_drafts'] as $draft)
								<tr>
                                    	<td><a class="btn btn-info" href="{{url('/admin/postdetails/'.$draft->id)}}">{{$draft->title}}</a></td>
                                        <td class="center">{{$draft->create_date}}</td>
                                        <td class="center"></td>                                       
								</tr>
                                @endforeach
							  </tbody>
						 </table>      
					</div>		
@endsection