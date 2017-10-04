@extends ('layouts.master')

@section('content') 
    <div class="col-md-8 main-blog">
     <h1 class="blog-post-title">{{$post->title}}</h1><hr>
     <p>{{$post->body}}</p>

    </div>
    
@endsection