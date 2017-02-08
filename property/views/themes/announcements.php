<!DOCTYPE html>
<html lang="en-US">

  <body class="size-1140">

    <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section-top-padding background-dark">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-20 text-size-30 text-line-height-1">Announcement</h1>

          </div>  
        </header>
        <section class="section-small-padding background-white">

          <div class="line">
            <div class="margin">

        <?php
          if(count($announcement)){
            
            $i = 0;
            
            foreach($announcement as $announcements){
            
            $user_id = $this->Shows->getThisValue("id = '$announcements->authorID'", 'users',$limit = '', $order = 'id ASC');

            $icons = array('shield', 'umbrella', 'home','drop','screen-smartphone','heart','chart','globe-alt');
        ?>

            <div class="s-12 margin-m-bottom">
              <div class="padding-2x block-bordered">
                <!-- <i class="center margin-bottom-30 icon-sli-<?php // echo $icons[$i]; ?> icon3x text-dark"></i> -->
                <h4 class="text-thin"><?php echo $announcements->title;?> by: <?php if(count($user_id)): foreach($user_id as $users): echo ucwords($users->full_name); endforeach; endif; ?> <br /> <?php echo $announcements->dateCreated;?></h4>
                <p class="margin-bottom-5"><?php echo $announcements->description;?></p>
              </div>
            </div>

        <?php
          $i++;         
          } } else { ?>

            <h2 class="text-size-25 margin-bottom-5 text-dark">No announcement yet</h2>

      <?php
          }
      ?>

            </div>
          </div>
          
        </section> 
      </article>
    </main>
    
    <hr>

  </body>
</html>