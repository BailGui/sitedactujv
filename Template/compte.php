<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="../Public/CSS/style.css">
</head>
<body id='bodycompte'>
<header><?php include('../Template/inc/bannière.php'); ?></header>
<fieldset class="form1">
        <form action="" id ="myForm">

            <div><label class="pseudo"for="user_pseudo">Pseudo</label>                        
            <input type="text" id="lepseudo" name="user_pseudo" required /></div> 

            <div><label class="mail"for="user_mail">Adresse mail</label>                        
            <input type="text" id="lemail" name="user_mail" required /></div> 
       
            <div><label class="nom"for="user_name">Nom</label>                        
            <input type="text" id="lenom" name="user_name" required /></div>    
         
            <div><label class="prenom" for="user_prenom">Prénom</label>
            <input type="text" id="leprenom" name="user_prenom" required /></div>
 
            <div><label class="date" for="user_ddn">Date de naissance</label>
                <input type="date" id="ddn" name="user_ddn" required /></div>
 
            <div><label class="mdp" for="user_mdp">Mot de passe</label>
                <input type="text" id="password" name="user_mdp" required /></div>
                <p id="mdpErreur"> </p>
   
          <input type="submit" value="S'inscrire" id="subButton">
        </br>
 
    </form>
 
</fieldset>
<script>
    const myForm = document.getElementById("myForm");
    const subButton = document.getElementById("subButton");
    const mdp = document.getElementById("mdpErreur");  
             
    myForm.addEventListener('submit', function(event) {                    
        event.preventDefault();
        validPassword();
       });
   function validPassword(){
       var password = document.getElementById("password").value;      
 
                  var password = document.getElementById("password").value;      
                if (password.length < 8) {      
                    mdp.textContent = "Trop Court";
 
                }else if(/[A-Z]/.test(password) === false){
                    mdp.textContent = "Il manque une Majuscule";
                   
                }else if(/\d/.test(password) === false){
                    mdp.textContent = "Il manque un chiffre entre 0 et 9";
               
                }else if ((/[!@#$%^,&;*()_+]/.test(password)) === false){
                    mdp.textContent = "Il manque un symbole";
                                                       
                }else if (password.length >= 8 && /[A-Z]/.test(password) && /\d/.test(password) && ((/[!@#$%^,&;*()_+]/.test(password)))) {
               setTimeout(function () {
                   window.location.href = "";
               }, 1000);
 
   }
   }    
   
             
   </script>
   
   
    
<footer><?php include('../Template/inc/footer.php'); ?></footer>
</body>
</html>