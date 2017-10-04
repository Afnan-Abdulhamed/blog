<!DOCTYPE  html>
<html>
    <head>
    
     </head>
    <body>
    @foreach($task as $t)
        <li> {{$t->body}} </li>
@endforeach
     </body>
</html>