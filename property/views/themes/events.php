<!DOCTYPE html>
<html lang="en-US">

  <body class="size-1140">

    <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section-top-padding background-dark">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-20 text-size-30 text-line-height-1">Events</h1>
<!--             <p class="margin-bottom-0 text-size-16">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.<br>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p> -->
          </div>  
        </header>
        <section class="section-small-padding background-white">

<!--           <div class="line">
            <h2 class="text-size-40 margin-bottom-30"></h2>
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
          if(count($events)){
            foreach($events as $event){
              // $icons = array('shield', 'umbrella', 'home');
        ?>

            <div class="s-12 margin-m-bottom">
              <div class="padding-2x block-bordered">
                <img class="text-dark margin-bottom-30" src="<?php echo base_url();?>public/photos/events/<?php echo $event->image;?>" alt="<?php echo $event->title;?>'s Images" />
                <h4 class="text-thin"><?php echo $event->title; ?> <br /> <?php echo date("F d, Y",strtotime($event->date))." ".$event->time ;?></h4>
                <p class="margin-bottom-5"><?php echo $event->body; ?></p>
              </div>
            </div>

      <?php } } else { ?>

            <h2 class="text-size-25 margin-bottom-5 text-dark">No events yet</h2>

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