@extends('back_end.layout')

@section('posts')
<div class="box-content">
						<table class="table">
							  <thead>
								  <tr>
									  <th>Post title</th>
									  <th>Create Date</th>
									  <th>Post State</th>
									  <th>Added By</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
                              @foreach($data['all_posts'] as $post)
								<tr>
                                    	<td><a class="btn btn-info" href="{{url('/admin/postdetails/'.$post->id)}}">{{$post->title}}</a></td>
                                        <td class="center">{{$post->create_date}}</td>
                                        <td class="center">{{$post->type}}</td>
                                        <td class="center">{{$post->admin_name}}</td>                                       
								</tr>
                                @endforeach
							  </tbody>
						 </table>      
					</div>
@endsection