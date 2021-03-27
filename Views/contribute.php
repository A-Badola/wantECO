<?php
    $query="SELECT `username` FROM `users` WHERE `id`=".$_SESSION['id']." LIMIT 1";
    if($resultcheck=mysqli_query($link,$query)){
      $rowcheck=mysqli_fetch_assoc($resultcheck);
      $username=$rowcheck['username'];
    //   echo $username;
    }

?>


<div class="container">
    <div class="row">
    <div class="col-md-3 container-outer">
        <div class="card card-profile mb-4">
          <div class="card-header profile"></div>
          <div class="card-block text-center">
            <img class="card-profile-img" src="assets/img/profile.jpg">

            <h6 class="card-title black;" style="font-size:30px;">
                <?php echo $username;  ?>
            </h6>

            <p class="mb-4 brown">Football for Life !</p>

            <ul class="card-menu">
              <li class="card-menu-item">
                <a href="#userModal" class="text-inherit black" data-toggle="modal">
                  Following
                  <h6 class="my-0 brown"><?php $count=mysqli_num_rows(mysqli_query($link,'SELECT `follower` FROM `isFollowing` WHERE `follower`='.$_SESSION['id'])); echo $count; ?> </h6>
                </a>
              </li>

              <li class="card-menu-item">
                <a href="#userModal" class="text-inherit black" data-toggle="modal">
                  Followers
                  <h6 class="my-0 brown"><?php $counti=mysqli_num_rows(mysqli_query($link,'SELECT `isFollowing` FROM `isFollowing` WHERE `isFollowing`='.$_SESSION['id'])); echo $counti; ?></h6>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Make an input field with background same as parent div so that it appears like it's not there -->
        <div class="card visible-md-block visible-lg-block mb-4">
          <div class="card-block">
            <h6 class="mb-3 black">About <small>· <span id="edit" style="color:blue; cursor:pointer">Edit</span></small></h6>
            <ul class="list-unstyled list-spaced">
              <li class="edit"><span class="text-muted icon icon-calendar mr-3 "></span><span style="font-weight:400;">Went to </span><input type="text" id="first" class="black" size="15" value="<?php 
                                        if($went==""){
                                            echo "Football Academy"; 
                                        } else { 
                                            echo $went; 
                                        } ?>" disabled >
                </li>
              <!-- <li class="edit"><span class="text-muted icon icon-users mr-3 "></span>Became friends with -->
              <li class="edit"><span class="text-muted icon icon-briefcase mr-3 "></span><span style="font-weight:400;">Worked at </span><input type="text" id="worked" class="black" value="<?php if($worked==""){ echo "Football Academy"; } else { echo $worked; } ?>" size="15" disabled ></li>
              <li class="edit"><span class="text-muted icon icon-home mr-3 "></span><span style="font-weight:400;">Lives in </span><input type="text" id="lives" class="black" value="<?php if($lives==""){ echo "Football Academy"; } else { echo $lives; } ?>" size="15" disabled ></li>
              <li class="edit"><span class="text-muted icon icon-location-pin mr-3 "></span><span style="font-weight:400;">From </span><input type="text" id="belong" class="black" value="<?php if($belong==""){ echo "Football Academy"; } else { echo $belong; } ?>" size="15" disabled ></li>
            </ul>
            <span id="submited" style="color:blue;cursor:pointer;">Submit</span>
          </div>
        </div>
        

        <!-- Hashtags HEre -->
        <div class="card visible-md-block visible-lg-block">
          <div class="card-block">
            <h6 class="mb-3 black">Your Posts</h6>
            <!-- <div data-grid="images" data-target-height="150"> -->
                <?php displayPosts("yourPosts"); ?>
            
          </div>
        </div>
      </div>
    </div>
</div>