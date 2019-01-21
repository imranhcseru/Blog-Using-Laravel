    @extends('back_end.layout')
        @section('content')
            <div class="box-content">
              <form class="form-horizontal" action="{{url('/admin/store')}}" method="post" enctype = "multipart/form-data">
              {{csrf_field()}}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Post Title</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  name = "post_title">
							  </div>
              </div>             
              <div class="control-group">
							  <label class="control-label" for="typeahead">Choose Tag</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  name = "choose_tag">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="fileInput">Post Cover Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file" name = "post_img">
							  </div>
							</div>          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2"> Post Details</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name = "post_desc"></textarea>
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name = "submit" value= "publish">Publish Post</button>
								<button type="submit" class="btn btn-primary" name = "submit" value = "draft">Save as Draft</button>
							</div>
						  </fieldset>
						</form>   

          </div>
        @endsection