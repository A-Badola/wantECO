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
    <div id="searchTags"></div>
        <div class="tagsTale__tagnames" id="serviceList">
        <!-- <a href="" class="serviceDesc" data-tags="waste-management,recycle,popular"><h3>DumpIn</h3><p>We are leading firm in Recycling Sector prooviding different services to our clients...</p></a> -->

          <?php while($row=$result->fetch_assoc()){ ?>
            <a href="" class="serviceDesc" data-tags="<?php echo $row['category']; ?>"><h3><?php echo $row['category']; ?></h3><p><?php echo $row['post']; ?></p></a>
          <?php } ?>
        </div>
    </div>
  </section>