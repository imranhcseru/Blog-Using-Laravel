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
									  <th>Message </th>
									  <th>User Email</th>
									  <th>Date</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
                              @foreach($allmessage as $message)
								<tr>
                                    	<td>>{{$message->name}}</td>
                                        <td class="center">{{$message->email}}</td>
                                        <td class="center">{{$message->date}}</td>                                       
								</tr>
                                @endforeach
							  </tbody>
						 </table>      
					</div>
@endsection