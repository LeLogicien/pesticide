<?php

    @mysql_connect("localhost","root","");

    mysql_select_db("pesticide");

    $email=$_GET['email'];
    $password=$_GET['password'];
        
  //  echo $email;
//    echo $password;


    $results=mysql_query('select * from users ');
    
    while($user = mysql_fetch_array($results)) 
    {
        if (($user['email']==$email) && ($user['password']==$password))
        echo header('location:dashboard.php');
    }
 
   echo 'hehehe tu as le droit';

    
?>

