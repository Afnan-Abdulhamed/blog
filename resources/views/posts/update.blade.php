@extends('layouts.master')

@section('content')

<?php

// print_r($post);

?>

<div class="col-sm-8 blog-main">

    <h1> Update The Post </h1><hr>

    <form method="POST" action="/edit/{{$post->id}}"> 
    
    {{ csrf_field() }}

        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title"  value="{{$post->title}}">
        </div>

        <div class="form-group">
          <label for="body">Body</label>
          <textarea class="form-control" rows="3" id="body" name="body" value="{{$post->body}}">{{$post->body}}</textarea>
          </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>


          <!-- form validation errors -->

            @include('layouts.errors')

</form>




</div>
@endsection