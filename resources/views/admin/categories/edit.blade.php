@extends('layouts.admin')

@section('content')
  <h4>Categories</h4>
  <br>
  @include('includes.errors')




  <div class="card">
    <div class="card-content">
      <form class="" action="{{action('AdminCategoryController@update',$category->id )}}" method="POST">
         @method('PATCH')
         @csrf
          <div class="input-field">
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{$category->name}}">
          </div>
          <input class="btn purple" type="submit" name="submit" value="Edit">
      </form>
      <form class="" method="POST" action="{{action('AdminCategoryController@destroy',$category->id )}}" >
        @method('DELETE')
        @csrf
        <input type="submit" name="" value="Delete" class="btn red darken-2 right">
      </form>
    </div>
  </div>



@endsection
