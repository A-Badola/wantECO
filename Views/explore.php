<?php
  $sql="SELECT * from `posts`";
  $result=$link->query($sql);
?>

<!-- Just to put some introduction , aaa, and bcoz still dont know what to add-->
<section class="hero">
    <div class="container" >
      <div class="hero__text container--pall">
       <h1>
          Ways to Live More Sustainably
       </h1>
       <p>
          Avail the sustainable services for daily activities offered by our community members.<br>
          Check out some great and easy to implement ideas for daily chores that are way more sustainable than usual methods.<br>
          Make Habit of wise choices that affect the environment.<br>
          Don't forget to check your carbon footprint monthly and search for ways to reduce it.
       </p>
       <h2>
        Check Out Services by Our Members and Ways to a better environment 
       </h2>

       <a href="#searchTags" class="button hero__cta"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
      </div>
  </section>
  <!--- Adding section for Tags and Tales(Kill me for this)-->
  <section class="tagsTale">
    <div id="searchTags" class="container">
      <div class="rl-btns">
        <button class="slide-d-btn-l" onclick="sideScroll(this.parentElement.parentElement,'left',25,200,20)">
          <i class="fas fa-chevron-left"></i>
        </button>
        <button class="slide-d-btn-r" onclick="sideScroll(this.parentElement.parentElement,'right',25,200,20)">
          <i class="fas fa-chevron-right"></i>
        </button>
      </div>
      <button href="#serviceList" 
              class="active-btn" 
              onclick="{
                        $('#serviceList a').show(); 
                        $(this).addClass('active-btn').siblings().removeClass('active-btn');
                        window.location.href='#serviceList';
                        }">
      Show All
      </button>


    </div>
        <div class="tagsTale__tagnames" id="serviceList">
        <!-- <a href="" class="serviceDesc" data-tags="waste-management,recycle,popular"><h3>DumpIn</h3><p>We are leading firm in Recycling Sector prooviding different services to our clients...</p></a> -->

          <?php while($row=$result->fetch_assoc()){ ?>
            <a href="" class="container my-2" data-tags="<?php echo $row['category']; ?>">
              <li class='media list-group-item p-4'>
              <img class='media-object d-flex align-self-start mr-3' width='80px' height='80px' style='border-radius:50%; float:left;' src='img/profile.png'>
              <div class='media-body'>
                <div class='media-heading'>
                  <h6 style='color:blueviolet;'><b><?php echo $row['title']; ?></b></h6>
                </div>  
                <p class='brown'><?php echo $row['post']; ?></p> 
                <p class='green'><i>#<?php echo str_replace(',', ' #', str_replace(' ', '', $row['category'])) ?></i>
                <button class='py-2 button header__cta float-right' value="<?php echo $row['id'] ?>" id='pledge'>Pledge</button></p>
                <p><small class='float-left text-muted'><?php echo time_since(time()-strtotime($row['datetime'])+12600) ?> ago</small></p>
              </div>
              </li>
            </a>
          <?php } ?>
        </div>
  </section>