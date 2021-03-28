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

  function displayCategory(){
    echo '<form><div class="input-group">
        <input type="hidden" name="page" value="post">
        <input type="text" name="query" class="form-control" id="seaarch" size="100px" placeholder="Search Posts">  
   
       <div class="input-group-btn">
           <div>
               <button type="submit" class="btn">&#128269;</button>
           </div>      
       </div>
    </div>
   </form>';
  }

  function displayPostBox(){
    echo '         
          <div id="postSuccess" class="alert alert-success alerts">
            Your Post was Posted Successfully
          </div>
          <div id="postFail" class="alert alert-danger alerts">
          </div>
          <textarea class="form-control" id="postContent"></textarea>
          <div class="input-group-btn">
            <button class="btn btn-primary" id="postButton">Post</button>
          </div>
        ';
  }
?>