// js

 $( "#searchform" ).submit(function( event ) {
      alert("nada");
     $.ajax({
                url: "recherche.php?keyword=tomate", // Le nom du fichier indiqué dans le formulaire
                type: GET, // La méthode indiquée dans le formulaire (get ou post)
               //  data: $this.serialize(), // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
                success: function(data) { // Je récupère la réponse du fichier PHP
                    alert(data); // J'affiche cette réponse
                }
            });
 });