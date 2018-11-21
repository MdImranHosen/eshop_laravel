@extends('admin_layout')
@section('admin_content')

<div class="row-fluid sortable">
<div class="box span12">
<div class="box-header" data-original-title>
	<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Slider</h2>
	<div class="box-icon">
		<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
		<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
		<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
	</div>
</div>
<p class="alert alert-success">
	<?php
		$message = Session::get('message');
		if ($message) {
			echo $message;
			Session::put('message',null);
		}
     ?>
</p>
<div class="box-content">
	<form class="form-horizontal" action="{{ url('/save-slider') }}" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
	  <fieldset>
		<div class="control-group">
		  <label class="control-label" for="slider_name"> Slider Name </label>
		  <div class="controls">
			<input type="text" class="span6 typeahead" name="slider_name" placeholder="Slider Name" id="slider_name" required="">
		  </div>
		</div>
		<div class="control-group hidden-phone">
		  <label class="control-label" for="slider_description">Slider Description</label>
		  <div class="controls">
			<textarea class="cleditor" name="slider_description" id="slider_description" rows="3"></textarea>
		  </div>
		</div>
	  <div class="control-group">
	  <label class="control-label" for="slider_image">Slider Image</label>
	    <div class="controls">
		<input class="input-file uniform_on" id="slider_image" name="slider_image" type="file">
	   </div>
	  </div>
		<div class="control-group">
		  <label class="control-label" for="publication_status">Publication Status</label>
		  <div class="controls">
			<input type="checkbox" name="publication_status" id="publication_status" value="1">
		  </div>
		</div>
		<div class="form-actions">
		  <button type="submit" class="btn btn-primary"> Add Slider Image </button>
		  <button type="reset" class="btn"> Cancel </button>
		</div>
	  </fieldset>
	</form>   

</div>
</div><!--/span-->

</div><!--/row-->

@endsection