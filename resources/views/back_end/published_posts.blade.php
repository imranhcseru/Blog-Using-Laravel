@extends('back_end.layout')
@section('posts')
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
									  <th>Published</th>
									  <th>Added By</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
                              @foreach($data['all_published_posts'] as $published_post)
								<tr>
                                    	<td><a class="btn btn-info" href="{{url('/admin/postdetails/'.$published_post->id)}}">{{$published_post->title}}</a></td>
                                        <td class="center">{{$published_post->publish_date}}</td>
                                        <td class="center">{{$published_post->admin_name}}</td>                                       
								</tr>
                                @endforeach
							  </tbody>
						 </table>      
					</div>
@endsection