@extends('admin_layout')
@section('admin_content')
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Tables</a></li>
</ul>

<div class="row-fluid sortable">		
<div class="box span12">
	<div class="box-header" data-original-title>
		<h2><i class="halflings-icon user"></i><span class="break"></span>ALL Slider</h2>
		
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
		<table class="table table-striped table-bordered bootstrap-datatable datatable">
		  <thead>
			  <tr>
				  <th width="5%">ID</th>
				  <th width="10%">Slider Name</th>
				  <th width="30%">Slider Description</th>
				  <th width="20%">Slider Image</th>
				  <th width="10%">Status</th>
				  <th width="15%">Actions</th>
			  </tr>
		  </thead>  
		  @foreach($all_slider_in as $v_slider)
		  <tbody>
			<tr>
				<td>{{ $v_slider->slider_id }}</td>
				<td class="center">{{ $v_slider->slider_name }}</td>
				<td class="center">{{ $v_slider->slider_description }}</td>
				<td class="center"><img src="{{ $v_slider->slider_image }}" width="250px" height="200px"></td>
				<td class="center">
                    @if($v_slider->publication_status == 1)
                    <span class="label label-success">Available</span>
                    @else
                     <span class="label label-info">Unavailable</span>
                    @endif
				</td>
				<td class="center">
                  @if($v_slider->publication_status == 1)
					<a class="btn btn-danger" href="{{ URL::to('/unactive-slider/'.$v_slider->slider_id) }}">
						<i class="halflings-icon white thumbs-down"></i>
					</a>
                  @else
					<a class="btn btn-success" href="{{ URL::to('/active-slider/'.$v_slider->slider_id) }}">
						<i class="halflings-icon white thumbs-up"></i> 
					</a>
                   @endif
					<a class="btn btn-info" href="{{ URL::to('/edit-slider/'.$v_slider->slider_id) }}">
						<i class="halflings-icon white edit"></i>
					</a>
					<a class="btn btn-danger" id="delete" href="{{ URL::to('/delete-slider/'.$v_slider->slider_id) }}">
						<i class="halflings-icon white trash"></i> 
					</a>
				</td>
			</tr>
		  </tbody>
		  @endforeach
	  </table>            
	</div>
</div><!--/span-->

</div><!--/row-->

@endsection