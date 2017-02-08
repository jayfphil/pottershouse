<!DOCTYPE html>
<html lang="en-US">

  <body class="size-1140">

    <!-- MAIN -->
    <main role="main">    
      <!-- Main Header -->
      <header>
        <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-dark text-center full-width">
          <div class="item">
            <div class="s-12">
				  <!-- Slider -->    
					<div>
					  <div class="carousel-default owl-carousel carousel-wide-arrows">

						<div class="item">
						  <div class="s-12">
							<img style="height:100%" src="<?php echo base_url();?>public/images/banners/img1.jpg" alt="">
						  </div>
						</div>
				
						<div class="item">
						  <div class="s-12 m-12 l-12">
							<img style="height:100%" src="<?php echo base_url();?>public/images/banners/img2.jpg" alt="">
						  </div>
						</div>

						<div class="item">
						  <div class="s-12">
							<img style="height:100%" src="<?php echo base_url();?>public/images/banners/img3.jpg" alt="">
						  </div>
						</div>
						<div class="item">
						  <div class="s-12">
							<img style="height:100%" src="<?php echo base_url();?>public/images/banners/img4.jpg" alt="">
						  </div>
						</div>
					  </div>
					</div>
              <div class="carousel-content">
                <div class="content-center-vertical line">
                  <div class="margin-top-bottom-80">
                    <!-- Title -->
<!--                     <h1 class="text-white margin-bottom-30 text-size-60 text-m-size-30 text-line-height-1">Eleganter is the Most Elegant<br> HTML5 Template</h1>
                    <div class="s-12 m-10 l-8 center"><p class="text-white text-size-14 margin-bottom-40">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Iriure dolor in hendrerit duis autem vel eum in vulputate velit esse molestie consequat.</p></div> -->
<!--                     <div class="line">
                      <div class="s-12 m-12 l-3 center">
                        <a class="button button-white-stroke s-12" href="<?php // echo base_url();?>">Get Started Now</a>
                      </div>       
                    </div>   -->
                  </div>
                </div>
              </div>
            </div>
          </div>              
        </div>               
      </header>

      <!-- Section 0 -->
      <section class="section-small-padding background-white text-center"> 
        <div class="line">
          <h2 class="text-size-50 text-center">Testimonies</h2>
          <hr class="break-small background-primary break-center">
        </div>
        <div class="line">
          <div class="margin">


        <?php
        if(count($testimonial)){
          $i = 1;
          foreach($testimonial as $testimonials){
            if($i<=4){
            
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
                  <!-- <p class="margin-bottom-30"><?php // echo character_limiters($testimonials->body,12);?></p> -->
                  <a class="button button-dark-stroke text-size-12" href="<?php echo base_url(); ?>testimonials">GET MORE INFO</a>
                </div>
              </div>

      <?php
            $i++;
            }  
          } 
        }
      ?>

          </div>
        </div>
      </section>
      
      <!-- Image Seperator -->
<!--       <section class="full-width">  
        <div>

          <div class="bgimg-2" style="background-image: url('<?php // echo base_url();?>public/images/img-12.jpg');
            min-height: 400px;  position: relative;
            opacity: 0.65;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;">
          </div>

        </div>
      </section> -->

      <!-- Section 1 -->
      <section class="section-small-padding background-white text-center"> 
        <div class="line">
          <h2 class="text-size-50 text-center">Events</h2>
          <hr class="break-small background-primary break-center">
        </div>
        <div class="line">
          <div class="margin">


        <?php
        if(count($events)){
          $n=1;
          foreach($events as $event){
            if($n<=3) {
            $icons = array('shield', 'umbrella', 'home');
        ?>

            <div class="s-12 m-12 l-4 margin-m-bottom">
              <div class="padding-2x block-bordered">
                <img class="text-dark center margin-bottom-30" src="<?php echo base_url();?>public/photos/events/<?php echo $event->image;?>" alt="<?php echo $event->title;?>'s Images" />
                <h4 class="text-thin"><?php echo character_limiters($event->title,5);?> <br /> <?php echo date("F d, Y",strtotime($event->date));?></h4>
                <!-- <p class="margin-bottom-30"><?php // echo character_limiters($event->body,12);?></p> -->
                <a class="button button-dark-stroke text-size-12" href="<?php echo base_url(); ?>events">GET MORE INFO</a>
              </div>
            </div>

      <?php
          } $n++; } }
      ?>


          </div>
        </div>
      </section>
      
      <!-- Image Seperator -->
<!--       <section class="full-width">  
        <div>

          <div class="bgimg-2" style="background-image: url('<?php // echo base_url();?>public/images/img-12.jpg');
            min-height: 400px;  position: relative;
            opacity: 0.65;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;">
          </div>

        </div>
      </section> -->

      <!-- Section 2 -->
      <section class="section">
        <div class="line">
          <h2 class="text-size-50 text-center">Announcements</h2>
          <hr class="break-small background-primary break-center">
        </div>  

        <div class="line">
          <div class="margin">


        <?php
        if(count($announcement)){
            
            $x = 1;
            
            foreach($announcement as $announcements){

              if($x<=3) {

                $user_id = $this->Shows->getThisValue("id = '$announcements->authorID'", 'users',$limit = '', $order = 'id ASC');

                $icons = array('shield', 'umbrella', 'home','drop','screen-smartphone','heart','chart','globe-alt');
        ?>

                <div class="s-12 m-12 l-4 margin-m-bottom">
                  <div class="padding-2x block-bordered">
                    <!-- <i class="icon-sli-<?php // echo $icons[$i]; ?> icon3x text-dark"></i> -->
                    <h4 class="text-size-10 margin-bottom-0"><?php echo character_limiters($announcements->title,5);?> by: <?php if(count($user_id)): foreach($user_id as $users): echo ucwords($users->full_name); endforeach; endif; ?> <br /> <?php echo $announcements->dateCreated;?></h4>
                    <p class="text-dark"><?php echo character_limiters($announcements->description,15);?></p> 
                    <a class="button button-dark-stroke text-size-12" href="<?php echo base_url(); ?>announcements">GET MORE INFO</a>
                  </div>
                </div>

      <?php
              }
          $x++; 
          } }
      ?>


          </div>
        </div>

      </section>
            
      <!-- Image Seperator -->
      <section class="full-width">  
        <div>

          <div class="bgimg-2" style="background-image: url('<?php echo base_url();?>public/images/img-12.jpg');
            min-height: 400px;  position: relative;
            opacity: 0.65;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;">
          </div>

        </div>
      </section>
      
      <hr class="break margin-top-bottom-0">
      
      <!-- Section 5 -->
      <section id="thumbnails" class="section-top-padding full-width">
        <h2 class="text-size-50 text-center">Ministries</h2>
        <hr class="break-small background-primary break-center"> 
        <div class="tabs background-primary-hightlight">
            <div class="tab-item tab-active">
              <a class="tab-label active-btn">Outreach</a>
              <div class="tab-content lightbox-gallery">

              <?php
              $outreachs = glob('public/images/gallery/childrensoutreach/*.*');
              shuffle($outreachs);
              $o=0;
              foreach($outreachs as $outreach) {
                  $ext_out = pathinfo($outreach);
                  if($o<8)
                  {
                    if(strtolower($ext_out['extension'])=='jpg' || strtolower($ext_out['extension'])=='png' || strtolower($ext_out['extension'])=='tif' || strtolower($ext_out['extension'])=='gif')
                    {
              ?>
                      <div class="s-12 m-6 l-3">
                        <a class="image-with-hover-overlay image-hover-zoom" href="<?php echo base_url().$outreach;?>">
                          <div class="image-hover-overlay background-primary"> 
                            <div class="image-hover-overlay-content text-center padding-2x">
                              <!-- <h2 class="text-thin">Lorem Ipsum Dolor</h2>  -->
                              <p><?php echo $ext_out['basename']; ?></p> 
                            </div> 
                          </div> 
                          <img src="<?php echo base_url().$outreach;?>" alt="" title="<?php echo $outreach; ?>" />
                        </a>  
                      </div>
              <?php
                      $o++;
                    }
                  }
              }
              ?>

              </div>  
            </div>
            <div class="tab-item">
              <a class="tab-label">Music Scene</a>
              <div class="tab-content lightbox-gallery">

              <?php
              $jamconcerts = glob('public/images/gallery/180jam/*.*');
              shuffle($jamconcerts);
              $j=0;
              foreach($jamconcerts as $jamconcert) {
                  $ext_conc = pathinfo($jamconcert);
                  if($j<8)
                  {
                    if(strtolower($ext_conc['extension'])=='jpg' || strtolower($ext_conc['extension'])=='png' || strtolower($ext_conc['extension'])=='tif' || strtolower($ext_conc['extension'])=='gif')
                    {
              ?>
                      <div class="s-12 m-6 l-3">
                        <a class="image-with-hover-overlay image-hover-zoom" href="<?php echo base_url().$jamconcert; ?>">
                          <div class="image-hover-overlay background-primary"> 
                            <div class="image-hover-overlay-content text-center padding-2x">
                              <!-- <h2 class="text-thin">Lorem Ipsum Dolor</h2>  -->
                              <p><?php echo $ext_conc['basename']; ?></p> 
                            </div> 
                          </div> 
                          <img src="<?php echo base_url().$jamconcert; ?>" alt="" title="<?php echo $jamconcert; ?>" />
                        </a>  
                      </div>
              <?php
                      $j++;
                    }
                  }
              }
              ?>

              </div>  
            </div>
            <div class="tab-item">
              <a class="tab-label">Conferences</a>
              <div class="tab-content lightbox-gallery">

              <?php
              $conferences = glob('public/images/gallery/conferences/*.*');
              shuffle($conferences);
              $c=0;
              foreach($conferences as $conference) {
                  $ext_conf = pathinfo($conference);

                  if($c<8)
                  {
                    if(strtolower($ext_conf['extension'])=='jpg' || strtolower($ext_conf['extension'])=='png' || strtolower($ext_conf['extension'])=='tif' || strtolower($ext_conf['extension'])=='gif')
                    {
              ?>
                      <div class="s-12 m-6 l-3">
                        <a class="image-with-hover-overlay image-hover-zoom" href="<?php echo base_url().$conference; ?>">
                          <div class="image-hover-overlay background-primary"> 
                            <div class="image-hover-overlay-content text-center padding-2x">
                              <!-- <h2 class="text-thin">Lorem Ipsum Dolor</h2>  -->
                              <p><?php echo $ext_conf['basename']; ?></p>  
                            </div> 
                          </div> 
                          <img src="<?php echo base_url().$conference; ?>" alt="" title="<?php echo $conference; ?>" />
                        </a>  
                      </div>
              <?php
                      $c++;
                    } 
                  }
              }
              ?>

              </div>  
            </div>
         </div>
      </section>
      
    </main>
  
    <hr>

  </body>

</html>