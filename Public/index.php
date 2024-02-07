<?php

if(isset($_GET['p'])){
    
    switch($_GET['p']){
       
        case 'idnewsvr':
            $title = "indexnewsvr";
            include('../Template/indexnewsvr.php');
            break;
        case 'artvr':
            $title = "articlenewsvr";
            include('../Template/articlenewsvr.php');
            break;
        case 'idtestsvr':
            $title="indextestsvr";
            include('../Template/indextestsvr.php');
            break;
        case 'prevtestvr':
            $title = "testpreviewvr";
            include('../Template/testpreviewvr.php');
            break;
        case 'idnewsflat':
            $title="indexnewsflat";
            include('../Template/indexnewsflat.php');
            break;
        case 'artflat':
            $title = "articleflat";
            include('../Template/articleflat.php');
            break;
        case 'idtestsflat':
            $title="indextestsflat";
            include('../Template/indextestsflat.php');
            break;
        case 'prevtestflat':
            $title = "testpreviewflat";
            include('../Template/testpreviewflat.php');
            break;
        case 'compte':
             $title="compte";
            include('../Template/compte.php');
            break;
        case 'contact':
             $title="contact";
             include('../Template/contacts.php');
             break;
        case 'copyright':
             $title="copyright";
             include('../Template/copyright.php');
             break;
               
       
        default:
            $title="page404";
            include('../Template/page-404.php');
    }

}else{
    
    $title = "accueil"; 
    include('../Template/accueil.php');

}