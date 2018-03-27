@extends('layouts.admin')

@section('content')

  <h1>Medias</h1>

@if ($photos)
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Created</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($photos as $photo)
        <tr>
          <td>{{$photo->id}}</td>
          <td>
            <div class="chip">
              <img src="{{$photo->file}}" alt="Contact Person">
              {{$photo->file}}
            </div>
          </td>
          <td>{{$photo->created_at ? $photo->created_at->diffForHumans() : 'no date'}}</td>
          {{-- <td>{{$photo->user->email}}</td> --}}
        </tr>
      @endforeach
    </tbody>
  </table>
@endif

@endsection
