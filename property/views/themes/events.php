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

          </div>  
        </header>
        <section class="section-small-padding background-white">

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