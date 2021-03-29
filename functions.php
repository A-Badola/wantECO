<?php
  session_start();
  error_reporting(E_ALL ^ E_WARNING); 

  include("hash.php");
  $link=mysqli_connect($host,$userName,$password,$dbName);
  if(mysqli_connect_error()){
    print_r(mysqli_connect_error());
    exit();
  }else{
    //  echo "Database successfully Connected .";
  }
  if(isset($_GET['process'])){
    if($_GET['process']=="logout"){
      session_unset();
    }
  }

  function time_since($since) {
    $chunks = array(
        array(60 * 60 * 24 * 365 , 'year'),
        array(60 * 60 * 24 * 30 , 'month'),
        array(60 * 60 * 24 * 7, 'week'),
        array(60 * 60 * 24 , 'day'),
        array(60 * 60 , 'hour'),
        array(60 , 'min'),
        array(1 , 'sec')
    );

    for ($i = 0, $j = count($chunks); $i < $j; $i++) {
        $seconds = $chunks[$i][0];
        $name = $chunks[$i][1];
        if (($count = floor($since / $seconds)) != 0) {
            break;
        }
    }

    $print = ($count == 1) ? '1 '.$name : "$count {$name}s";
    return $print;
}
  // displaying Post mechanism
  function displayPosts($type){
    global $link;
    if($type=="public"){
        $whereClause="";
        // $whereClause="";
    // }else if($type=="isFollowing"){
    //     $whereClause="";
    //     $query="SELECT * FROM `isFollowing` WHERE `follower` = ".mysqli_real_escape_string($link,$_SESSION['id']);
    //     if($result=mysqli_query($link,$query)){
    //         if(mysqli_num_rows($result)>0){
    //             while($row=mysqli_fetch_assoc($result)){
    //                 if($whereClause==""){
    //                     $whereClause="WHERE";
    //                 }else{
    //                     $whereClause.=" OR";
    //                 }
    //                 $whereClause.=" userid=".$row['isFollowing'];
    //             }
    //         }
    //     }
    }else if($type=="yourPosts"){
        $whereClause="WHERE userid=".mysqli_real_escape_string($link,$_SESSION['id']);
    // }else if($type=="search"){
    //     echo "<p style='font-size:200%;color:white;'>Showing Results For <b>'".mysqli_real_escape_string($link,$_GET['query'])."'</b> :</p>";
    //     $whereClause="WHERE `post` LIKE '%".mysqli_real_escape_string($link,$_GET['query'])."%'";
    }else if(is_numeric($type)){
        $userQuery="SELECT * FROM `users` WHERE id=".mysqli_real_escape_string($link,$type)." LIMIT 1";
        $userQueryResult=mysqli_query($link,$userQuery);
        $user=mysqli_fetch_assoc($userQueryResult);
        // print_r($user['id']);
        echo "<h2 style='color:#a9a9a9;'>".mysqli_real_escape_string($link,$user['username'])."'s Posts</h2>";
        $whereClause="WHERE userid=".mysqli_real_escape_string($link,$type);
    }
    $query="SELECT * FROM `posts` ".$whereClause." ORDER BY `datetime` DESC LIMIT 10 ";
    if($result=mysqli_query($link,$query)){
        if(mysqli_num_rows($result)==0){
            echo '<div class="container post">
                           There are no posts to display !
                        </div>
                    ';
        }else{
            while($row=mysqli_fetch_assoc($result)){
                // User Info 
                $userQuery="SELECT * FROM `users` WHERE id=".mysqli_real_escape_string($link,$row['userid'])." LIMIT 1";
                $userQueryResult=mysqli_query($link,$userQuery);
                $user=mysqli_fetch_assoc($userQueryResult);
                if ($user['id'] == $_SESSION['id'] && $type!="yourPosts") {
                    continue;
                }
                
                if($type=="yourPosts"){
                    echo "<div class='media-body'>
                    <div class='media-heading'>
                        <small class='float-right text-muted'>".time_since(time()-strtotime($row['datetime'])+19800)." ago</small>
                    </div>
                    <p class='brown'>".$row['post']."</p> ";
                    echo "</div>";
                    continue;
                }
                echo "<li class='media list-group-item p-4'>
                    <img class='media-object d-flex align-self-start mr-3' width='80px' height='80px' style='border-radius:50%; float:left;' src='img/profile.png'>
                    <div class='media-body'>
                        <div class='media-heading'>
                            <small class='float-right text-muted'>".time_since(time()-strtotime($row['datetime'])+19800)." ago</small>
                            <h6 style='color:blueviolet;'><a href='http://localhost/wantECO/?page=contribute&userid=".$user['id']."'>".$user['username']."</a></h6>
                        </div>  
                        <p class='brown'>".$row['post']."</p> 
                    </div>
                    </li> ";
                        
                
            }
        }
    }
}

?>