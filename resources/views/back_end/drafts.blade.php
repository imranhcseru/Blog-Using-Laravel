@extends('back_end.layout')

@section('posts')
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
                                        <td class="center">{{$draft->admin_name}}</td>                                       
								</tr>
                                @endforeach
							  </tbody>
						 </table>      
					</div>
@endsection