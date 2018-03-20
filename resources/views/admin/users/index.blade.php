@extends('layouts.admin')

@section('content')
  <h4>Users</h4>
  <hr>
  <table class="responsive-table highlight bordered">
  <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Created</th>
        <th>Updated</th>
        <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @if ($users)
      @foreach ($users as $user)
        <tr>
          <td>{{$user->id}}</td>
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
          <td>{{$user->email}}</td>
          @if ($user->role == '')
            <td>No role</td>
          @else
            <td>{{$user->role->name}}</td>
          @endif
          <td>{{$user->is_active == 1 ? 'Active' : 'Innactive'}}</td>
          <td>{{$user->created_at->diffForHumans()}}</td>
          <td>{{$user->updated_at->diffForHumans()}}</td>
          <td><a href="{{route('users.edit', $user->id)}}">Edit</a></td>
        </tr>
      @endforeach
    @endif
  </tbody>
</table>
@endsection
