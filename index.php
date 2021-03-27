<?php
    include("functions.php");
    include("Views/header.php");
    if($_GET["page"]=="about"){
        include("Views/about.php");
    }else if($_GET["page"]=="join"){
        include("Views/join.php");
    }else{
        include("Views/home.php");
    }
    include("Views/footer.php");
?>