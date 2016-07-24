@extends('layouts.app')

@section('title','New Project')

@section('content')

  <div class="container">
    <div class="row task">
      <div class="createtask col-sm-6 col-sm-offset-3">
        <h2 class="heading">Create New Project</h2>
          
        <form method="post" action="{{ route('save-project') }}" enctype="multipart/form-data">

          @if(Session::has('action_message'))
              <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ Session::get('action_message') }}
              </div>
          @endif

          {{ csrf_field() }}
          <div class="form-group">
            <label for="clientId" class="control-label">Select Client</label>
            <select name="clientId" class="form-control">
                <option value="0"><--  Select One Option --></option>
                @foreach ($clients as $key => $client)
                  <option value="{{ $client->id }}" @if(Request::old('clientId')==$client->id) {{ 'selected' }} @endif > {{ $client->name }} </option>
                @endforeach
            </select>
            <label class="error-label">{{ $errors->first('clientId') }}</label>
          </div>
          <div class="form-group">
            <label for="projectName" class="control-label">Project Name</label>
            <input type="text" name="projectName" id="projectName" class="form-control" value="{{ Request::old('projectName') }}" >
            <label class="error-label">{{ $errors->first('projectName') }}</label>
          </div>
          <div class="form-group">
            <label for="startTime" class="control-label">Start Time</label>
            <input type="text" name="startTime" id="startTime" class="form-control" value="{{ Request::old('startTime') }}">
            <label class="error-label">{{ $errors->first('startTime') }}</label>
          </div>
          <div class="form-group">
            <label for="EstEndTime" class="control-label">Estimated End Time</label>
            <input type="text" name="EstEndTime" id="EstEndTime" class="form-control" value="{{ Request::old('EstEndTime') }}" >
          </div>
          <div class="form-group">
          		<button type="submit" name="saveBtn" value="Save Project" class="btn btn-primary btn-block">Save Project</button>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection
