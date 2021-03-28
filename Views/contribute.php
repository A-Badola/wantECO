<?php
    $query="SELECT `username` FROM `users` WHERE `id`=".$_SESSION['id']." LIMIT 1";
    if($resultcheck=mysqli_query($link,$query)){
        $rowcheck=mysqli_fetch_assoc($resultcheck);
        $username=$rowcheck['username'];
        // echo $username;
    }
    
    $queri="SELECT * FROM `details` WHERE `userid`=".$_SESSION['id']." LIMIT 1";
    if($risultcheck=mysqli_query($link,$queri)){
        $roucheck=mysqli_fetch_assoc($risultcheck);
        // $username=$roucheck['username'];
        $went=$roucheck['went'];
        $worked=$roucheck['worked'];
        $lives=$roucheck['lives'];
        $belong=$roucheck['belong'];
    }
?>
   


<div class="container pt-4">
    <div class="row">
      <div class="col-md-3 container-outer">
        <div class="card card-profile mb-4">
          <div class="card-header profile"></div>
          <div class="card-block text-center">
            <img class="card-profile-img" width="80px" height="80px" style="border-radius:50%;" src="img/profile.png">

            <h6 class="card-title black;" style="font-size:30px;">
                <?php echo $username; ?>
            </h6>

            <p class="mb-4 brown">Smart Life for Smarter Future !</p>

            <!-- <ul class="card-menu">
              <li class="card-menu-item">
                <a href="#userModal" class="text-inherit black" data-toggle="modal">
                  Following
                  <h6 class="my-0 brown"></h6>
                </a>
              </li>

              <li class="card-menu-item">
                <a href="#userModal" class="text-inherit black" data-toggle="modal">
                  Followers
                  <h6 class="my-0 brown"></h6>
                </a>
              </li>
            </ul> -->
          </div>
        </div>

        <!-- Make an input field with background same as parent div so that it appears like it's not there -->
        <div class="card visible-md-block visible-lg-block mb-4">
          <div class="card-block">
            <h6 class="mb-3 black">About <small>· <span id="edit" style="color:blue; cursor:pointer">Edit</span></small></h6>
            <ul class="list-unstyled list-spaced">
              <li class="edit"><span class="text-muted icon icon-calendar mr-3 "></span><span style="font-weight:400;">Went to </span><input type="text" id="first" class="black" size="12" value="<?php 
                                        if($went==""){
                                            echo "Eco Academy"; 
                                        } else { 
                                            echo $went; 
                                        } ?>" disabled >
                </li>
              <!-- <li class="edit"><span class="text-muted icon icon-users mr-3 "></span>Became friends with -->
              <li class="edit"><span class="text-muted icon icon-briefcase mr-3 "></span><span style="font-weight:400;">Worked at </span><input type="text" id="worked" class="black" value="<?php if($worked==""){ echo "Eco Academy"; } else { echo $worked; } ?>" size="12" disabled ></li>
              <li class="edit"><span class="text-muted icon icon-home mr-3 "></span><span style="font-weight:400;">Lives in </span><input type="text" id="lives" class="black" value="<?php if($lives==""){ echo "Eco Academy"; } else { echo $lives; } ?>" size="12" disabled ></li>
              <li class="edit"><span class="text-muted icon icon-location-pin mr-3 "></span><span style="font-weight:400;">From </span><input type="text" id="belong" class="black" value="<?php if($belong==""){ echo "Eco Academy"; } else { echo $belong; } ?>" size="12" disabled ></li>
            </ul>
            <span id="submited" style="color:blue;cursor:pointer;">Submit</span>
          </div>
          <div class="card visible-md-block visible-lg-block">
          <div class="card-block">
            <h6 class="mb-3 black">Your Posts</h6>
            <!-- <div data-grid="images" data-target-height="150"> -->
                <?php displayPosts("yourPosts"); ?>
            
          </div>
        </div>

        </div>
      </div>
      <div class="col-md-6 container-outer">
        <ul class="list-group media-list media-list-stream mb-4">   
          <li class="media list-group-item p-4">
          <form>
            <div class="input-group">
              <input type="hidden" name="page" value="post">
              <input type="text" name="category" class="form-control" id="category" size="100px" placeholder="Category">  
            </div>
            <div id="postSuccess " class="alert alert-success alerts">
              Your Post was Posted Successfully
            </div>
            <div id="postFail" class="alert alert-danger alerts">
            </div>
            <textarea class="form-control mt-3" id="postContent"></textarea>
            <div class="input-group-btn">
              <button class="btn btn-primary mt-3" id="postButton">Post</button>
            </div>
          </form>
          </li>
          
          
            <?php if(isset($_GET['userid'])){ ?>
                    <hr style="color:#BC36B2;">
                <?php
                    displayPosts($_GET['userid']); 
                }
            ?>
                    <hr style="color:#BC36B2;">
            <h2 style="color:#a9a9a9;">Recent Posts</h2>
            <!-- <hr style="color:#BC36B2;"> -->
            <?php displayPosts("public"); ?> 

          </li>
        </ul>
      </div> 
        
      <div class="col-md-3 container-outer">
        <div class="card mb-4 hidden-md-down">
          <div class="card-block">
            <h6 class="mb-3">Sponsored</h6>
            <div data-grid="images" data-target-height="150">
                <img class="media-object" data-width="640" data-height="640" data-action="zoom"
                src="assets/img/sponsor.jpg">
            </div>
            <p><strong>It might be time to visit Iceland.</strong> Iceland is so chill, and everything looks cool here.
              Also, we heard the people are pretty nice. What are you waiting for?</p>
            <a href="https://www.skyscanner.co.in/flights-to/is/cheap-flights-to-iceland.html" target="_blank"><button class="btn btn-outline-primary btn-sm">Buy a ticket</button></a>
          </div>
        </div>
      </div>

    </div>
  </div>
