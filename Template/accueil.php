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
   <a class="img1" href="?p=idnewsvr"><img class="section" src="../Public/CSS/images/sectionvr.png" alt="section vr" id="imgHere"></a>
   <a class="img2" href="indexnwsflat.php"><img class="section" src="../Public/CSS/images/sectionflat.png" alt="section flat" id="imgHere2"></a>
  </div>
  
<footer class='footacc'><?php include('../Template/inc/footer.php'); ?></footer>
<script src="CSS/js/responsive.js"></script>
</body>
</html>

