@extends('layouts.app')

@section('title','Dashboard')

@section('content')

  @if(Session::has('action_message'))
      <div class="alert {{ Session::has('class') ? Session::get('class') : 'alert-success' }}">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {!! Session::get('action_message') !!}
      </div>
  @endif

  <h3 class="heading">Pending Task List</h3>

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
        <?php $i = 0; ?>
            @foreach($tasks as $task)
            <tr class="{{ $i % 2 == 0 ? 'info' : 'active' }}">
              <td>{{ (isset($i))?++$i:($i = 1) }}</td>
              <td>{{ $task->name }}</td>
              <td>{{ $task->description }}</td>
              <td>{{ $task->est_start_time }}</td>
              <td>{{ $task->est_end_time }}</td>
              <td>
                <form action="{{ route('update-task-status') }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $task->id }}">
                    @if($task->task_status_id == 1 || $task->task_status_id == 4)
                     <button type="submit" class="btn btn-primary btn-sm" name="updated_id" value="2">{{ $task->task_status_id == 1 ? 'Start' : 'Restart' }}</button>
                    @elseif($task->task_status_id == 2)
                      <button type="submit" class="btn btn-warning btn-sm" name="updated_id" value="4">Pause</button>
                      <button type="submit" class="btn btn-success btn-sm" name="updated_id" value="3">Done</button>
                    @endif
                    <button type="submit" class="btn btn-danger btn-sm" name="updated_id" value="5">Cancel</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
@endsection