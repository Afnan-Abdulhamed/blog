<div class="blog-post">
<a href="/posts/{{$post->id}}">
    <h2 class="blog-post-title">{{$post->title}}</h2>
 </a>
            <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}}</p>

            <p> 
                
                    {{$post->body}}
                
            </p>
            <form method="POST" action="/delete/{{$post->id}}"> 
            
            {{ csrf_field() }}
        
                <div class="form-group">
                    <button type="submit" class="btn btn-danger">delete</button>
                </div>
        
        
                  <!-- form validation errors -->
        
                    @include('layouts.errors')
        </form>

        <form method="POST" action="/update/{{$post->id}}"> 
            
            {{ csrf_field() }}
        
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Edit</button>
                </div>
                <!-- form validation errors -->
                @include('layouts.errors')
        </form>
          
            
        </div><!-- /.blog-post -->