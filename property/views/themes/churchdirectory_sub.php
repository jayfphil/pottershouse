<!DOCTYPE html>
<html lang="en-US">

  <body class="size-1140">
    
    <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section-top-padding background-dark">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-20 text-size-30 text-line-height-1"><?php echo $thisChurch->church_Name; ?></h1>
          </div>  
        </header>
        
        <div class="padding background-white"> 
          <div class="line">  

            <blockquote>

                <div class="margin">
                  <div class="s-12 m-4 l-4">
                    <img src="<?php echo base_url();?>public/photos/pastor/<?php echo $thisChurch->PastorPhoto; ?>" alt="<?php echo $thisChurch->Pastor; ?>" title="<?php echo $thisChurch->Pastor; ?>" class="img-resp">
                  </div>
                  <div class="s-12 m-8 l-8">
                    <img src="<?php if($thisChurch->ChurchPhoto) { echo base_url();?>public/photos/church/<?php echo $thisChurch->ChurchPhoto; } else { echo base_url();?>public/photos/church/default.png <?php } ?>" alt="Church's Photo" title="Church's Photo" class="img-resp">
                  </div>
                </div>       

            </blockquote>

          </div>
        </div> 
      </article>
    </main>

<!-- Contact Us -->
      <div class="background-primary padding text-center">
        <p class="h1">Pastor <?php echo $thisChurch->Pastor; ?> <?php if($thisChurch->pastorswife) { echo "& ".$thisChurch->pastorswife; } ?></p>                                                                        
      </div>
      
      <!-- Main Footer -->
      <section class="background-dark full-width">

        <!-- Collumn 2 -->
        <div class="s-12 m-12 l-6 margin-m-bottom-2x">
          <div class="padding-2x">
            <div class="line">              
              <div class="float-left">
                  <i class="icon-sli-location-pin text-primary icon3x"></i>
                </div>
                <div class="margin-left-70 margin-bottom-30">
                  <h3 class="margin-bottom-0">Church Address</h3>
                  <p>
                    <?php echo $thisChurch->address."<br />"; ?>
                    <?php if($thisChurch->Region){ echo $thisChurch->Region; } ?>
                  </p>               
                </div>
                <div class="float-left">
                  <i class="icon-sli-calendar text-primary icon3x"></i>
                </div>
                <div class="margin-left-70 margin-bottom-30">
                  <h3 class="margin-bottom-0">Schedule</h3>
                  <p>
                    <?php echo $thisChurch->schedule; ?>
                  </p>              
                </div>
                <div class="float-left">
                  <i class="icon-sli-envelope text-primary icon3x"></i>
                </div>
                <div class="margin-left-70 margin-bottom-30">
                  <h3 class="margin-bottom-0">E-mail</h3>
                  <p>
                    <?php echo $thisChurch->emails; ?>
                  </p>              
                </div>
                <div class="float-left">
                  <i class="icon-sli-phone text-primary icon3x"></i>
                </div>
                <div class="margin-left-70">
                  <h3 class="margin-bottom-0">Phone Numbers</h3>
                  <p>
                    <?php echo $thisChurch->contacts; ?>
                  </p>             
                </div>
            </div>
          </div>
        </div>  

        <!-- Map -->
        <?php if ($thisChurch->googleMapLocation) { ?>
        <div class="s-12 m-12 l-6 margin-m-bottom-2x">
          <div class="s-12 grayscale center">     
            
              <iframe width="95%" height="450" frameborder="0" style="border:0" src="<?php echo $thisChurch->googleMapLocation; ?>" allowfullscreen></iframe>
            
          </div>
        </div>
        <?php } ?>

      </section>

      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">
            <!-- Bottom Footer -->
      <section class="padding background-dark full-width">
        <div class="s-12 l-6">
          &nbsp;
        </div>
        <div class="s-12 l-6">
          &nbsp;
        </div>
      </section>

  </body>
</html>