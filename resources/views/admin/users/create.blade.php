@extends('layouts.admin')

@section('content')

@include('includes.errors')

  <h4>Create User</h4>
  <hr>
  <br>
  {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>true])!!}
  <div class="row">
     <div class="input-field col s4">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['placeholder'=>'User Name']) !!}
      </div>
      <div class="input-field col s4">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email', null, ['placeholder'=>'User Email']) !!}
      </div>
      <div class="input-field col s4">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', ['placeholder'=>'User Password']) !!}
      </div>
  </div>
  <div class="row">
     <div class="input-field col s4">
        {!! Form::select('is_active', [1 => 'Active', 0 => 'Not Active' ], 0) !!}
        {!! Form::label('is_active', 'Status:') !!}
      </div>
      <div class="input-field col s4">
        {!! Form::select('role_id', [''=>'---Select---'] + $roles, null) !!}
        {!! Form::label('role_id', 'Role:') !!}
      </div>
      <div class="input-field col s4">
        {!! Form::file('photo_id',null) !!}
      </div>
  </div>
  {!! Form::submit('Create User', ['class'=>'waves-effect waves-light btn']) !!}
  {!! Form::close() !!}

@endsection
