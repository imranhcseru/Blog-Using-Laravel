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
									  <th>Comment</th>
									  <th>User Email</th>
									  <th>Date</th> 
									  <th>In Post Id</th>                                         
								  </tr>
							  </thead>   
							  <tbody>
                              @foreach($allcomment as $comment)
								<tr>
                                    	<td>{{$comment->comment}}</a>
                                        <td class="center">{{$comment->email}}</td>
                                        <td class="center">{{$comment->date}}</td>  
										<td class="center">{{$comment->post_id}}</td>                                     
								</tr>
                                @endforeach
							  </tbody>
						 </table>      
					</div>
@endsection