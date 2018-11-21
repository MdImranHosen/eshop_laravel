@extends('admin_layout')
@section('admin_content')

<div class="row-fluid sortable">
<div class="box span12">
<div class="box-header" data-original-title>
	<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Category</h2>
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
	<form class="form-horizontal" action="{{ url('/save-product') }}" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
	  <fieldset>
		<div class="control-group">
		  <label class="control-label" for="product_name"> Product Name </label>
		  <div class="controls">
			<input type="text" class="span6 typeahead" name="product_name" placeholder="Product Name" id="product_name" required="">
		  </div>
		</div>
		<div class="control-group">
		<label class="control-label" for="selectError3">Product Category</label>
		<div class="controls">
		  <select id="selectError3" name="category_id">
		  	<option>Select Category</option>
		  <?php 
            $all_published_category = DB::table('tbl_category')
                      ->where('publication_status',1)
                      ->get();
        
             foreach($all_published_category as $v_category){
            ?>
			<option value="{{ $v_category->category_id }}">{{ $v_category->category_name }}</option>
		<?php } ?>
		  </select>
		</div>
	  </div>
	  <div class="control-group">
		<label class="control-label" for="selectError3">Product Manufacture</label>
		<div class="controls">
		  <select id="selectError3" name="manufacture_id">
		  	<option>Select Manufacture</option>
            <?php 
            $all_published_manufacture = DB::table('tbl_manufacture')
              ->where('publication_status',1)
              ->get();
            foreach($all_published_manufacture as $v_manufacture){
           ?>
			<option value="{{ $v_manufacture->manufacture_id }}">{{ $v_manufacture->manufacture_name }}</option>
           <?php } ?>
		  </select>
		</div>
	  </div>
		<div class="control-group hidden-phone">
		  <label class="control-label" for="product_short_description">Product Short Description</label>
		  <div class="controls">
			<textarea class="cleditor" name="product_short_description" id="product_short_description" rows="3"></textarea>
		  </div>
		</div>
		<div class="control-group hidden-phone">
		  <label class="control-label" for="product_long_description">Product Long Description</label>
		  <div class="controls">
			<textarea class="cleditor" name="product_long_description" id="product_long_description" rows="3"></textarea>
		  </div>
		</div>
		<div class="control-group">
		  <label class="control-label" for="product_price"> Product Price </label>
		  <div class="controls">
			<input type="text" class="span6 typeahead" name="product_price" placeholder="Product Price" id="product_price" required="">
		  </div>
		</div>
	  <div class="control-group">
	  <label class="control-label" for="product_image">Product Image</label>
	    <div class="controls">
		<input class="input-file uniform_on" id="product_image" name="product_image" type="file">
	   </div>
	  </div> 
	  <div class="control-group">
		  <label class="control-label" for="product_size"> Product Size </label>
		  <div class="controls">
			<input type="text" class="span6 typeahead" name="product_size" placeholder="Product Size" id="product_size" required="">
		  </div>
		</div>
		<div class="control-group">
		  <label class="control-label" for="product_color"> Product Color </label>
		  <div class="controls">
			<input type="text" class="span6 typeahead" name="product_color" placeholder="Product Color" id="product_color" required="">
		  </div>
		</div>
		<div class="control-group">
		  <label class="control-label" for="product_quantity"> Product Quantity </label>
		  <div class="controls">
			<input type="text" class="span6 typeahead" name="product_quantity" placeholder="Product Quantity" id="product_quantity" required="">
		  </div>
		</div>
		<div class="control-group">
		  <label class="control-label" for="publication_status">Publication Status</label>
		  <div class="controls">
			<input type="checkbox" name="publication_status" id="publication_status" value="1">
		  </div>
		</div>
		<div class="form-actions">
		  <button type="submit" class="btn btn-primary"> Add Product </button>
		  <button type="reset" class="btn"> Cancel </button>
		</div>
	  </fieldset>
	</form>   

</div>
</div><!--/span-->

</div><!--/row-->

@endsection