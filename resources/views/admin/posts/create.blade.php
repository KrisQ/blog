@extends('layouts.admin')

@section('content')
  <h4>Create</h4>
  <div class='card'>
    <div class='card-content'>
      @include('includes.errors')

      {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files'=>true])!!}
      <div class='row'>

        <div class='input-field col s6'>
          {!! Form::label('title', 'Title:') !!}
          {!! Form::text('title', null, ['placeholder'=>'Title']) !!}
        </div>

        <div class='input-field col s6'>
          {!! Form::select('category_id', $categories, null) !!}
          {!! Form::label('category_id', 'Category:') !!}
        </div>
      </div>


      <div class='input-field'>
        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body', null, ['class'=> 'materialize-textarea']) !!}
      </div>

        {!! Form::label('photo_id', 'Photo:') !!}
        <br>
        <div class='file-field input-field'>
          <div class='btn orange darken-4'>
            <span>File</span>
            {!! Form::file('photo_id', null) !!}
          </div>
          <div class='file-path-wrapper'>
            <input class='file-path validate' type='text'>
          </div>
        </div>

        <br><br>

        {!! Form::submit('Value', ['class'=>'waves-effect waves-light btn  orange darken-4']) !!}

      {!! Form::close() !!}
    </div>
  </div>
@endsection
