<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
      

<!-- 
<ul>

    @foreach($tasks as $task)

        <li> {{ $task }} </li>

    @endforeach


</ul> -->


  <?php  foreach($tasks as $task){echo $task->body ;} ?>




    </body>


</html>