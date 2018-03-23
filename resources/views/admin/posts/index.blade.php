@extends('layouts.admin')

@section('content')
  <h4>Posts</h4>
<div class="card">
  <div class="card-content">
    @if (Session::has('deleted_post'))
      <div id="card-alert" class="card green">
        <div class="card-content white-text">
          <p><i class="mdi-navigation-check"></i> SUCCESS : {{session('deleted_post')}}</p>
        </div>
      </div>
    @endif

    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>User</th>
          <th>Category</th>
          <th>Title</th>
          <th>Body</th>
          <th>Created</th>
          <th>updated</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @if ($posts)
          @foreach ($posts as $post)
            <tr>
              <td>{{$post->id}}</td>
              <td>{{$post->user->name}}</td>
              <td>{{$post->category ? $post->category->name : 'uncategorized'}}</td>
              @if (!$post->photo)
                <td>
                  <div class="chip">
                      <img src="https://images.unsplash.com/photo-1496134732667-ae8d2853a045?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e4dd1c9106a69065ccfa21a36cfb53b1&auto=format&fit=crop&w=2850&q=80" alt="Contact Person">
                      {{$post->title}}
                  </div>
                </td>
              @else
                <td>
                  <div class="chip">
                      <img src="{{$post->photo->file}}" alt="Contact Person">
                      {{$post->title}}
                  </div>
                </td>
              @endif
              <td>{{$post->body}}</td>
              <td>{{$post->created_at->diffForHumans()}}</td>
              <td>{{$post->updated_at->diffForHumans()}}</td>
              <td><a href="{{route('posts.edit', $post->id)}}">Edit</a></td>
            </tr>
          @endforeach
        @endif
      </tbody>
    </table>
  </div>
</div>
@endsection
