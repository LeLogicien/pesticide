<?php

    @mysql_connect('localhost',"root","");
        
    mysql_select_db("pesticide");
        
    $name=$_GET['type'];
    
     $results=mysql_query('select * from aliments ');
    
    while($aliment = mysql_fetch_array($results)) 
    {
        if (($aliment['name']==$name))
        echo $aliment['description'];
    }


