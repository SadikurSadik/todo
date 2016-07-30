@extends('layouts.app')

@section('title','New Client')

@section('content')

	<div class="container">
	  <div class="row task">
	    <div class="createtask col-sm-6 col-sm-offset-3">
	      <h2 class="heading">Create a New Task</h2>
	      @if(Session::has('action_message'))
	          <div class="alert alert-success">
	            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	            {{ Session::get('action_message') }}
	          </div>
	      @endif
	      <form method="post" action="{{ route('save-task') }}" enctype="multipart/form-data">

	      	{{ csrf_field() }}
	        <div class="form-group">
	          <label for="name" class="control-label">*Name</label>
	          <input type="text" name="name" class="form-control" value="{{ Request::old('name') }}">
	            @if ($errors->has('name'))
	                <span class="error-label">
	                    <strong>{{ $errors->first('name') }}</strong>
	                </span>
	            @endif
	        </div>

			<div class="form-group">
	          <label for="project_id" class="control-label">*Select Project</label>
	          <select name="project_id" class="form-control">
	              <option value="0"><--  Select One Option --></option>
	              @foreach($projects as $project)
					<option value="{{ $project->id }}">{{ $project->name }}</option>
	              @endforeach
	          </select>
	          @if ($errors->has('project_id'))
	                <span class="error-label">
	                    <strong>{{ $errors->first('project_id') }}</strong>
	                </span>
	            @endif
	        </div>

	        <div class="form-group">
	          <label for="taskDescription" class="control-label">Description</label>
	          <textarea name="description" rows="5" class="form-control" cols="40">{{ Request::old('description') }}</textarea>
	        </div>
	        
	        <div class="form-group">
	          <label for="est_start_time" class="control-label">*Estimated Start Time</label>
	          <input type="text" name="est_start_time" id="est_start_time" class="form-control" value="{{ Request::old('est_start_time') }}">
	          @if ($errors->has('est_start_time'))
	                <span class="error-label">
	                    <strong>{{ $errors->first('est_start_time') }}</strong>
	                </span>
	            @endif
	        </div>

	        <div class="form-group">
	          <label for="est_end_time" class="control-label">Estimated End Time</label>
	          <input type="text" name="est_end_time" id="est_end_time" class="form-control" value="{{ Request::old('est_end_time') }}">
	          @if ($errors->has('est_start_time'))
	               <span class="error-label">
	                   <strong>{{ $errors->first('est_end_time') }}</strong>
	               </span>
	          @endif
	        </div>

	        <div class="form-group">
	        	<?php if (isset($editableTask)): ?>
	        		<input type="hidden" name="editableTaskId" value="<?php echo $editableTask->task_id; ?>">
	        		<button type="submit" name="createBtn" value="Update Task" class="btn btn-primary btn-block">Update Task</button>
	        	<?php else: ?>
	        		<button type="submit" name="createBtn" value="Create Task" class="btn btn-primary btn-block">Create Task</button>
	        	<?php endif ?>
	        </div>
	      </form>
	      
	    </div>
	  </div>
	</div>

@endsection