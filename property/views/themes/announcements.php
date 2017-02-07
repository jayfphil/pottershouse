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
<!--             <p class="margin-bottom-0 text-size-16">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.<br>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p> -->
          </div>  
        </header>
        <section class="section-small-padding background-white">
<!--           <div class="line">
            <h2 class="text-size-40 margin-bottom-30">Investigationes demonstraverunt lectores</h2>
            <hr class="break-small background-primary margin-bottom-30">
            <p class="margin-bottom-40">
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
              Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
              Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros 
              et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
            </p>
          </div>    -->
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

<!--               <div class="s-12 m-12 l-4 margin-m-bottom">
                <div class="padding-2x background-primary">
                  <i class="icon-sli-shield icon3x text-white margin-bottom-30"></i>
                  <h2 class="text-thin">Unlimited Color Variants</h2>
                  <p class="margin-bottom-30">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
                  <a class="button button-white-stroke text-size-12" href="/">GET MORE INFO</a>
                </div>
              </div>
              <div class="s-12 m-12 l-4 margin-m-bottom">
                <div class="padding-2x background-primary">
                  <i class="icon-sli-umbrella icon3x text-white margin-bottom-30"></i>
                  <h2 class="text-thin">Parallax Background</h2>
                  <p class="margin-bottom-30">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
                  <a class="button button-white-stroke text-size-12" href="/">GET MORE INFO</a>
                </div>
              </div>
              <div class="s-12 m-12 l-4 margin-m-bottom">
                <div class="padding-2x background-primary">
                  <i class="icon-sli-home icon3x text-white margin-bottom-30"></i>
                  <h2 class="text-thin">Clean Modern Code</h2>
                  <p class="margin-bottom-30">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
                  <a class="button button-white-stroke text-size-12" href="/">GET MORE INFO</a>
                </div>
              </div> -->



            </div>
          </div>
          
        </section> 
      </article>
    </main>
    
    <hr>

  </body>
</html>