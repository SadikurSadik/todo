@extends('layouts.app')

@section('title','New Client')

@section('content')

	<div class="container">
	  <div class="row task">
	    <div class="createtask col-sm-6 col-sm-offset-3">
	      <h2 class="heading">Save New Client</h2>

	      <form method="post" action="{{ route('save-client') }}" enctype="multipart/form-data">
	        
	        @if(Session::has('action_message'))
	            <div class="alert alert-success">
	              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	              {{ Session::get('action_message') }}
	            </div>
	        @endif

			{{ csrf_field() }}
	        <div class="form-group">
	          <label for="name" class="control-label">Client Name</label>
	          <input type="text" name="name" class="form-control" >
	          <label class="error-label">{{ $errors->first('name') }}</label>
	        </div>

	        <div class="form-group">
	          <label for="contact" class="control-label">Contact</label>
	          <input type="text" name="contact" id="contact" class="form-control"  >
	        </div>

	        <div class="form-group">
	        		<button type="submit" name="saveBtn" value="Save Client" class="btn btn-primary btn-block">Save</button>
	        </div>
	      </form>
	    </div>
	  </div>

@endsection