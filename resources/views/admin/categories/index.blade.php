@extends('layouts.admin')

@section('content')
  <h4>Categories</h4>
  <br>
  @include('includes.errors')


<div class="row">

<div class="col s4">

  <div class="card">
    <div class="card-content">
      <form class="" action="/admin/categories" method="POST">
          {{ csrf_field() }}
          <div class="input-field">
            <label for="name">Name:</label>
            <input type="text" name="name" value="">
          </div>
          <input class="btn purple" type="submit" name="submit" value="Create">
      </form>
    </div>
  </div>
</div>

<div class="col s8">

<div class="card">
  <div class="card-content">
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Created at</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <tbody>
              @foreach ($categories as $cat)
                <tr>
                  <td>{{$cat->id}}</td>
                  <td>{{$cat->name}}</td>
                  <td>{{$cat->created_at ? $cat->created_at->diffForHumans() : 'NULL'}}</td>
                  <td><a href="/admin/categories/{{$cat->id}}/edit">Edit</a></td>
                </tr>
              @endforeach
          </tbody>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>


@endsection
