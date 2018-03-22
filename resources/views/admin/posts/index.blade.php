@extends('layouts.admin')

@section('content')
  <h4>Posts</h4>
<div class="card">
  <div class="card-content">
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>User</th>
          <th>Category</th>
          <th>Photo</th>
          <th>Title</th>
          <th>Body</th>
          <th>Created</th>
          <th>updated</th>
        </tr>
      </thead>
      <tbody>
        @if ($posts)
          @foreach ($posts as $post)
            <tr>
              <td>{{$post->id}}</td>
              <td>{{$post->user->name}}</td>
              <td>{{$post->category_id}}</td>
              <td>{{$post->photo_id}}</td>
              <td>{{$post->title}}</td>
              <td>{{$post->body}}</td>
              <td>{{$post->created_at->diffForHumans()}}</td>
              <td>{{$post->updated}}</td>
            </tr>
          @endforeach
        @endif
      </tbody>
    </table>
  </div>
</div>
@endsection
