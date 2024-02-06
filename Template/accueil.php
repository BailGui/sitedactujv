<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="../Public/CSS/style.css">
</head>
<body>

<header><?php include('../Template/inc/bannière.php'); ?></header>

  <div class="accueil">
   <a class="img1" href="indexnewsvr.php"><img class="section" src="../Public/CSS/images/sectionvr.png" alt="section vr" id="imgHere"></a>
   <a class="img2" href="indexnwsflat.php"><img class="section" src="../Public/CSS/images/sectionflat.png" alt="section flat" id="imgHere2"></a>
  </div>
  
  <script>
        function displayScreenWidth() {
        let theWidth = window.innerWidth;

        if (theWidth > 683) {
            document.getElementById("imgHere").src = "../Public/CSS/images/sectionvr.png";
        }else{
            document.getElementById("imgHere").src = "../Public/CSS/images/vrsmart.png";
        }
    }
        displayScreenWidth();    
    window.addEventListener('resize', displayScreenWidth);
    </script>

    <script>
        function displayScreenWidth() {
        let theWidth = window.innerWidth;
        if (theWidth > 683) {
            document.getElementById("imgHere2").src = "../Public/CSS/images/sectionflat.png";
        }else{
            document.getElementById("imgHere2").src = "../Public/CSS/images/flatsmart.png";
        }
    }
        displayScreenWidth();    
    window.addEventListener('resize', displayScreenWidth);
    </script>

<footer><?php include('../Template/inc/footer.php'); ?></footer>

</body>
</html>

