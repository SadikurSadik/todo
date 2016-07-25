@extends('layouts.app')

@section('title','New Client')

@section('content')

  <div class="container">
  <div class="row task">
    <div class="createtask col-sm-6 col-sm-offset-3">
      <h2 class="heading">Update Profile</h2>
      @if(Session::has('action_message'))
          <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ Session::get('action_message') }}
          </div>
      @endif
      <form class="" action="{{ route('update-profile') }}" enctype="multipart/form-data" method="post" >

        {{ csrf_field() }}
        <div class="form-group">
          <label for="name" class="control-label">Name</label>
          <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" readonly="">
        </div>
        <div class="form-group">
          <label for="eamil" class="control-label">Email</label>
          <input type="text" name="email" class="form-control" value="{{ Auth::user()->email }}" readonly="">
        </div>

        <div class="form-group">
          <label for="contact" class="control-label">Contact</label>
          <input type="text" name="contact" id="contact" class="form-control" value="{{ Auth::user()->contact }}">
        </div>
        <div class="form-group">
          <label for="designation" class="control-label">Current Designation</label>
          <input type="text" name="designation" id="designation" class="form-control" value="{{ Auth::user()->current_designation }}">
        </div>

        <div class="form-group">
            <label for="photo" class="control-label">Photo</label>
            <div class="input-group">
                <input type="file" name="photo" id="photo" value="">
            </div>
        </div>

        <div class="form-group">
            <button type="submit" name="updateBtn" value="Update Member" class="btn btn-primary btn-block">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection