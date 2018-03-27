@extends('layouts.admin')

@section('content')
  <h4>Comments</h4>
  <table>
  <thead>
    <tr>
        <th>Id</th>
        <th>Author</th>
        <th>Post</th>
        <th>Body</th>

    </tr>
  </thead>

  <tbody>
    @foreach ($comments as $comment)
      <tr>
        <td>{{$comment->id}}</td>
        <td>{{$comment->author}}</td>
        <td><a href="{{route('home.post', $comment->post_id)}}"></a></td>
        <td>{{$comment->body}}</td>
      </tr>
    @endforeach
  </tbody>
</table>


@endsection
