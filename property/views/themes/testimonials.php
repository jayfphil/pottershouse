<!DOCTYPE html>
<html lang="en-US">

<style>
#testimonyDialog{
  overflow: hidden;
}
</style>

  <body class="size-1140">

    <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section-top-padding background-dark">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-20 text-size-30 text-line-height-1">Testimonials</h1>
          </div>  
        </header>
        <section class="section-small-padding background-white">

          <div class="line text-center">
            <div class="margin">

        <?php
        if(count($testimonial)){
          $i = 1;
          foreach($testimonial as $testimonials){

            if($i%2==0){
              $even_color = 'column_w300_section_01 even_color';
            }else{
              $even_color = 'column_w300_section_01';
            }

            $icons = array('shield', 'umbrella', 'home');
        ?>

            <div class="s-12 m-12 l-3 margin-m-bottom">
              <div class="padding-2x block-bordered">
                <img class="text-dark center margin-bottom-30" src="<?php echo base_url();?>public/photos/testimonials/<?php echo $testimonials->image;?>" alt="" />
                <h4 class="text-thin"><?php echo $testimonials->title;?> <br /> <?php echo date("F d, Y",strtotime($testimonials->date));?></h4>
                <!-- <p class="margin-bottom-5"><?php // echo character_limiters($testimonials->body,12);?></p> -->
                <a class="button button-dark-stroke text-size-12 getTestimony" href="#">View</a>
                <input type="hidden" class="testimonyVideo" value="<?php echo $testimonials->videolinked; ?>">
                <input type="hidden" class="testimonyCongregation" value="<?php echo $testimonials->congregationName; ?>">
                <input type="hidden" class="testimonyBody" value="<?php echo $testimonials->body; ?>">
                <input type="hidden" class="testimonyTitle" value="<?php echo $testimonials->title; ?>">
                <input type="hidden" class="testimonyDate" value="<?php echo $testimonials->date; ?>">
                <input type="hidden" class="testimonyImage" value="<?php echo base_url();?>public/photos/testimonials/<?php echo $testimonials->image;?>">
              </div>
            </div>

      <?php
          $i++;  
          } } else { ?>

            <h2 class="text-size-25 margin-bottom-5 text-dark">No testimonials yet</h2>

      <?php
          }
      ?>

            </div>
          </div>
        </section> 
      </article>
    </main>
    
  </body>
</html>

<div id="testimonyDialog" title="View">
  <div class="line">
    <div class="margin">

      <div class="s-12 m-12 l-2">
        <img id="imagePreview" />
      </div>
      <div class="s-12 m-12 l-10">
        <h5></h5>
        <h6></h6>
      </div>

        <p>
          <iframe id="youtube-player" type="text/html" style="float: right" scrolling="no" width="70%" height="390" src="" frameborder="0" allowFullScreen></iframe>
        </p>

    </div>
  </div>
</div>

<script>
$("#testimonyDialog").dialog({
    width: "80%",
    modal: true,
    autoOpen: false,
    position: { 
        my: "center",
        at: "center",
        of: $("#jsgrid")
    },
    close: function() {
          $("#testimonyDialog h5").text("");
          $("#testimonyDialog h6").text("");
          $("#testimonyDialog p").html('<iframe id="youtube-player" type="text/html" style="float: right" scrolling="no" width="70%" height="390" src="" frameborder="0" allowFullScreen></iframe>');
          $("#imagePreview").attr("src", "");
        }
});

$(document).ready(function() {
 
$('.getTestimony').click(function(){

  $("#testimonyDialog h5").text($(this).parent().find( ".testimonyCongregation" ).val());
  // $("#testimonyDialog h5").text($(this).parent().find( ".testimonyCongregation" ).val());
  $("#testimonyDialog h6").text($(this).parent().find( ".testimonyDate" ).val());
  $("#testimonyDialog p").append($(this).parent().find( ".testimonyBody" ).val());
  $("#imagePreview").attr("src", $(this).parent().find( ".testimonyImage" ).val());
  $("#youtube-player").attr("src", $(this).parent().find( ".testimonyVideo" ).val());
  $("#testimonyDialog").dialog('option', 'title', $(this).parent().find( ".testimonyTitle" ).val());;
  $("#testimonyDialog").dialog("open");

});

});
</script>