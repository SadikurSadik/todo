@extends('layouts.web')

@section('title')

@endsection

@section('content')

  <h3>Contact Us</h3>

  <form class="" action="{{ route('post-login') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <input type="text" name="name" value="" class="form-control" placeholder="Enter Your Full Name" value="{{ Request::old('name') }}">
    </div>
    <div class="form-group">
      <input type="email" name="email" value="" class="form-control" placeholder="Enter Your Email" value="{{ Request::old('email') }}">
    </div>
    <div class="form-group">
      <input type="text" name="subject" value="" class="form-control" placeholder="Enter Subject here..">
    </div>
    <div class="form-group">
      <textarea rows="7" type="text" name="message" value="" class="form-control" placeholder="Enter Your Message here.."></textarea>
    </div>
    <div class="form-group">
      <input type="submit" name="Send" value="Send" class="btn btn-primary">
    </div>
  </form>

  @if(count($errors)>0)
    <ul class="alert alert-danger">
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  @endif

@endsection

