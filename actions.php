<?php
    include("functions.php");
    $error="";
    if($_GET["process"]=="login"){

        if(!$_POST["email"]){
            $error="An Email Or Username is required. ";
        }else if(!$_POST["password"]){
            $error="A Password is required. ";
        //    $error= "Please enter a Valid email address";
        }
        if($error!=""){
            echo $error;
            exit();
        }
            $query="SELECT * FROM `users` WHERE `email` = '".mysqli_real_escape_string($link,$_POST['email'])."' OR `username`='".mysqli_real_escape_string($link,$_POST['email'])."' LIMIT 1";
            $result=mysqli_query($link,$query);
            $row=mysqli_fetch_assoc($result);
            if($row['password']==md5(md5($row['id']).$_POST['password'])){
                $_SESSION['id']=$row['id'];
                echo 1;
            }else{
                $error="Could not find that Username-Password Combination ! Please try Again !";
            }

        if($error!=""){
            echo $error;
            exit();
        }
    }


    if($_GET["process"]=="signup"){

        if(!$_POST["email"]){
            $error="An Email is required. ";
        }else if(!$_POST["username"]){
            $error="A Username is required. ";
        }else if(!$_POST["password"]){
            $error="A Password is required. ";
        }else if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)===false){
            $error= "Please enter a Valid email address";
        }
        if($error!=""){
            echo $error;
            exit();
        }

            $query="SELECT * FROM `users` WHERE `email` = '".mysqli_real_escape_string($link,$_POST['email'])."' LIMIT 1";
            $result=mysqli_query($link,$query);
            if(mysqli_num_rows($result)>0){
                $error="This Email id is already taken !";
            }else{
                $query="INSERT INTO `users` (`username`,`email`,`password`) VALUES ('".mysqli_real_escape_string($link,$_POST['username'])."','".mysqli_real_escape_string($link,$_POST['email'])."','".mysqli_real_escape_string($link,$_POST['password'])."')";
                if(mysqli_query($link,$query)){
                    $_SESSION['id']=mysqli_insert_id($link);
                    // Password Hashing
                    $query="UPDATE `users` SET `password` = '".md5(md5($_SESSION['id']).$_POST['password'])."' WHERE `id`=".$_SESSION['id']." LIMIT 1";
                    mysqli_query($link,$query);
                    echo 1;
                }else{
                    $error="Couldn't Create User - Please try again later ";
                }
            }
            if($error!=""){
                echo $error;
                exit();
            }
    }

    if($_GET["process"]=="namecheck"){
            $query="SELECT * FROM `users` WHERE `username` = '".mysqli_real_escape_string($link,$_POST['username'])."' LIMIT 1";
            $result=mysqli_query($link,$query);
            if(mysqli_num_rows($result)>0){
                echo 0;
            }else{               
                echo 1;
            }
    }
?>