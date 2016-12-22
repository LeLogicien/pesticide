<html>

    <head>
        <link rel="stylesheet" href="style.css">  
       <title>Que mangeons-bous ?</title>
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/script.js"></script>
    </head>
    
    <body>

       
            <div class=left>
                <div class=liens>
                    <ol>
                    
                    <li> les pesticides pouvant etre present si pas bio </li>
                    <li>les pesticides pouvant etre present si bio </li>
                    <ul> 
                            <li>- le cas souhaite</li>
                           <li> -le cas pouvant arriver</li>

                    </ul>
                    </ol>
                <br>Lien vers la base de donnée des pesticides utilisé dans le bio

                <br>Lien vers une explication sommaires des différentes catégories de pesticides et leur utilité

                <br>Lien vers la certificaiton AB et vers les autre certificaiton bio
        
        
                </div>
                
            </div>
        
            <div class=youpi>
                <h1> En quelques mot</h1>

                <p>Le but de ce site est pouvoir effectuer une recherche sur un fruit et pouvoir savoir quels sont les pesticides pouvant être présent sur celui-ci.
                    <br>En parallêle il est possible ensuite de découvrir à quoi servent chacun de ces pesticides
                    <br>De plus nous faisons une comparaison entre les pesticides pouvant être présent sur le fruit demandé en fontion des différentes certifications

                
                </p>
                
                <div class="search">
                <form id="searchform">
                    <label for="keyword">Tapez ici le nom de votre fruit: barre de recherche</label>
                    <input type="text" name="keyword">
                    <input type="submit" value="rechercher" id="search"/>
                </form>
                </div>  
                
                <div id="searchresult">
                    
                
                </div>
            </div>
  
            
            <div class=search2>
                <form action="admin/traitement.php">
                    <label for="email">email</label>
                    <input type="text" name="email">
                    <label for="password">password</label>
                    <input type="text" name="password" placeholder="password">
                    <input type="submit" name="valider" value="valider"/>
                </form>
            </div>
    
        
             <div class=message_droite>
                <p> Ce site est en construction, soyez indulgents
                </p>
                <img src="images/4cf381dac1b8230999fa4f0a80445c8c.jpg" alt=smiley height="35%" width="35%" class=displayed>
            </div>

        

        <div class=search>
                <ul>

                    les pesticides pouvant etre present si pas bio
                    les pesticides pouvant etre present si bio
                    - le cas souhaite
                    -le cas pouvant arriver

                </ul>
                    <br>Lien vers la base de donnée des pesticides utilisé dans le bio

                    <br>Lien vers une explication sommaires des différentes catégories de pesticides et leur utilité

                    <br>Lien vers la certificaiton AB et vers les autre certificaiton bio
        </div>
        
        <div>
            <ul>
                <?php

                    @mysql_connect("localhost","root","");

                    mysql_select_db("pesticide");


                    $results=mysql_query('select * from aliments ');
    
                    while($aliment = mysql_fetch_array($results)) 
                            {
                                echo '<li>';
                                echo "<a href=aliment.php?type=".$aliment['name'].">".$aliment['name']."</a>";
                                echo '</li>';
                            
                            }

    
            ?>

            
            </ul>    
        
        </div>
        
        

    </body>

</html>




