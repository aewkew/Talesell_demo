<?php 
   $connect = mysqli_connect('localhost:3000','root','','inksale');
   if(mysqli_connect_error($connect)){
    echo 'Fail to conect';
   }

?>