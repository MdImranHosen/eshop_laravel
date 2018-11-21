@extends('admin_layout')
@section('admin_content')

<div class="row-fluid sortable">
<div class="box span12">
<div class="box-header" data-original-title>
	<h2><i class="halflings-icon edit"></i><span class="break"></span>Update Category</h2>
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
	<form class="form-horizontal" action="{{ url('/update-category', $category_info->category_id) }}" method="post">
		{{ csrf_field() }}
	  <fieldset>
		<div class="control-group">
		  <label class="control-label" for="category_name"> Category Name </label>
		  <div class="controls">
			<input type="text" class="span6 typeahead" name="category_name" id="category_name" value="{{ $category_info->category_name }}">
		  </div>
		</div>
		<div class="control-group hidden-phone">
		  <label class="control-label" for="category_description">Category Description</label>
		  <div class="controls">
			<textarea class="cleditor" name="category_description" id="category_description" rows="3">
				{{ $category_info->category_description }}
			</textarea>
		  </div>
		</div>
		<div class="form-actions">
		  <button type="submit" class="btn btn-primary"> Save </button>
		</div>
	  </fieldset>
	</form>   

</div>
</div><!--/span-->

</div><!--/row-->

@endsection