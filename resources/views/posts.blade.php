@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col l8 s8">
            <div class="card">
              <div class="card-image">
                <img src="{{$post->photo->file}}" alt="">
                <span class="card-title">By: {{$post->user->name}} {{$post->created_at->diffForHumans()}}</span>
              </div>
              <div class="card-content">
                <h2>{{$post->title}}</h2>
                <hr>
                <p>{{$post->body}}</p>
                <hr>
                <h4>Comments</h4>
                @if (Session::has('comment_message'))
                  <p class="green-text">{{session('comment_message')}}</p>
                @endif
                    <form class="" action="{{action('PostsCommentsController@store')}}" method="post">
                      @csrf
                      <input type="hidden" name="post_id" value="{{$post->id}}">
                      <div class="input-field">
                        <label for="body">Comment</label>
                        <textarea class="materialize-textarea" name="body" rows="8" cols="80"></textarea>
                      </div>
                      <input class="btn brown" type="submit" name="" value="Comment">
                    </form>
              </div>
            </div>
        </div>
        <div class="col l4 s4">
          <div class="card">
            <div class="card-content">
              <h5>categories</h5>
              <ul>
                <li>Cat 1</li>
                <li>Cat 2</li>
                <li>Cat 3</li>
                <li>Cat $</li>
              </ul>
            </div>
          </div>
        </div>
    </div>
@endsection
