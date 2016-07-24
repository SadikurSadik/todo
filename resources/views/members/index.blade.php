@extends('layouts.app')

@section('title','Dashboard')

@section('pageTitle', 'Pending Task List')

@section('content')
	<table id="example" class="table table-bordered hscroll" cellspacing="0" >
        <thead>
            <tr>
                <th>Serial</th>
                <th>Task Name</th>
                <th>Description</th>
                <th>Est. Start Time</th>
                <th>Est. End Time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
              <th>Serial</th>
              <th>Task Name</th>
              <th>Description</th>
              <th>Est. Start Time</th>
              <th>Est. End Time</th>
              <th>Action</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>1</td>
                <td>{{ $task->name }}</td>
                <td>Description</td>
                <td>Start Time</td>
                <td>End Time</td>
                <td>
                  <button type="button" class="btn btn-primary btn-sm">Start</button>
                  <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                  <button type="button" class="btn btn-success btn-sm">Done</button>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
@endsection