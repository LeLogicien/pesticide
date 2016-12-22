<?php

    @mysql_connect('localhost',"root","");
        
    mysql_select_db("pesticide");
        
    $keyword=$_GET['keyword'];
    
     $results=mysql_query("select * from aliments WHERE description LIKE '%$keyword%' ");
    
    if(mysql_num_rows($results)==0)
    {
        echo "nothing";
    }

$aliments = mysql_fetch_array($results) ;
  

    return $aliments;



