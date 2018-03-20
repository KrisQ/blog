@extends('layouts.admin')

@section('content')

@include('includes.errors')

<div class="row ">
  <h4>Edit User</h4>
  @if ($user->photo_id == '')
    <td>
      <div class="chip">
          <img src="https://images.unsplash.com/photo-1496134732667-ae8d2853a045?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e4dd1c9106a69065ccfa21a36cfb53b1&auto=format&fit=crop&w=2850&q=80" alt="Contact Person">
          {{$user->name}}
      </div>
    </td>
  @else
    <td>
      <div class="chip">
          <img src="{{$user->photo->file}}" alt="Contact Person">
          {{$user->name}}
      </div>
    </td>
  @endif
</div>

  <hr>
  <br>
  {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true])!!}
  <div class="row">
     <div class="input-field col s6">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['placeholder'=>'User Name']) !!}
      </div>
      <div class="input-field col s6">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email', null, ['placeholder'=>'User Email']) !!}
      </div>
  </div>
  <div class="row">
     <div class="input-field col s4">
        {!! Form::select('is_active', [1 => 'Active', 0 => 'Not Active' ]) !!}
        {!! Form::label('is_active', 'Status:') !!}
      </div>
      <div class="input-field col s4">
        {!! Form::select('role_id', $roles, null) !!}
        {!! Form::label('role_id', 'Role:') !!}
      </div>
      <div class="input-field col s4">
        {!! Form::file('photo_id',null) !!}
      </div>
  </div>
  {!! Form::submit('Create User', ['class'=>'waves-effect waves-light btn']) !!}
  {!! Form::close() !!}

@endsection
