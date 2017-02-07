<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Crud System</title>
<meta name="keywords" content="Rashedul Hasan" />
<meta name="description" content="Crud system created by rashedul hasan rashed.0123@gmail.com" />
<link href="<?php echo base_url();?>public/themes/templatemo_style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
<body>
<div id="templatemo_header_wrapper">
<!--  Free Web Templates by TemplateMo.com  -->
  <div id="templatemo_header">
    
   	<div id="site_logo"></div>
        
		<div id="templatemo_menu">
      		<div id="templatemo_menu_left"></div>
            <ul>
                  <li><a href="<?php echo base_url();?>" class="current">Home</a></li>
				  <!--
                  <li><a href="http://www.templatemo.com">Services</a></li>
                  <li><a href="http://www.templatemo.com/page/2">Gallery</a></li>
                  <li><a href="#">Company</a></li>
                  <li><a href="#" class="last">Contact</a></li>-->
            </ul>    	
		</div> <!-- end of menu -->
    
    </div>  <!-- end of header -->
</div> <!-- end of header wrapper -->

<div id="templatemo_banner_wrapper">
	<div id="templatemo_banner">
    
    	<div id="templatemo_banner_image">
        	<div id="templatemo_banner_image_wrapper">
            	<img src="<?php echo base_url();?>public/themes/images/templatemo_image_01.jpg" alt="image 1" />
            </div>
        </div>
        
        <div id="templatemo_banner_content">
        	<div class="header_01">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
            <p>Aliquam dignissim elementum est sit amet iaculis. Integer pretium ultricies risus, condimentum molestie odio euismod vitae. </p>
            <div class="button_01"><a href="#">Read more</a></div>
        </div>	
    
    	<div class="cleaner"></div>
    </div> <!-- end of banner -->
</div> <!-- end of banner wrapper -->

<div id="templatemo_content_wrapper">
	<div id="templatemo_content">
    
    	<div id="column_w530">
        	
            <div class="header_02">Welcome to our WEBSITE!</div>
            
            <p class="em_text">Simple Gray is a professional XHTML/CSS layout provided by <a href="http://www.templatemo.com" target="_parent">templatemo.com</a> for free of charge. You can use this template for any purpose. Credit goes to Free Photos for photos.</p>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a justo dolor. Duis in tincidunt lorem. Nunc et tellus nisi. Nulla non velit lectus. Morbi luctus ullamcorper felis, non gravida neque congue sit amet.</p>
            
            <div class="margin_bottom_20"></div>
            
            <ul class="content_list_01">
                <li>Integer tempor, libero quis laoreet dapibus, quam mauris hendrerit  urna, vel feugiat dolor lectus non velit. Fusce at nisl libero, ac  fringilla risus.</li>
                <li>Proin non velit nec enim volutpat euismod. Phasellus lorem velit, porttitor non iaculis in, euismod a metus. Nullam orci odio, dignissim a egestas ac, sollicitudin in quam.</li>
            </ul>
            
            <div class="margin_bottom_20"></div>           
            
            <div class="content_section_01">
            	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a justo dolor. Duis in tincidunt lorem. Nunc et tellus nisi. Nulla non velit lectus. Morbi luctus ullamcorper felis, non gravida neque congue sit amet. Nam nec mi metus, ac elementum velit. Etiam vel arcu velit, eget consequat risus. 
            </div>
            
            <div class="cleaner"></div>
        </div>
        
        <div id="column_w300">
        
        	<div class="header_03">Calendar of Events</div>
			<div class="column_w300_section_01">
            <?php
				if(count($events)){
				
					foreach($events as $event){
				?>
					
						<div class="news_image_wrapper">
							<img src="<?php echo base_url();?>public/photos/uploads/<?php echo $event->image;?>" alt="<?php echo $event->title;?>'s Images" />
						</div>
						
						<div class="news_content">
							<div class="news_date"><?php echo date("F d, Y",strtotime($event->date));?></div>
							<div class="header_04"><a href="#"><?php echo character_limiters($event->title,5);?></a></div>
							<p><?php echo character_limiters($event->body,12);?><a href="#">Read More</a></p>
						</div>
										
						<div class="cleaner"></div>
					

			<?php
					}
			?>
</div>
			<?php
				}else{
			?>
				<div class="column_w300_section_01">
					<div class="news_image_wrapper">
						
					</div>
					
					<div class="news_content">
						Not Found Any Events
					</div>
									
					<div class="cleaner"></div>
				</div>
			<?php
				}
			?>
            
            
            
            
           
            
            <div class="cleaner"></div>
        </div>
		<div class="cleaner"></div>
		
		<div id="column_w300">
        
        	<div class="header_03">Testimonial</div>
				
            <?php
				if(count($testimonial)){
				$i = 1;
					foreach($testimonial as $testimonials){
					
					if($i%2==0){
						$even_color = 'column_w300_section_01 even_color';
					}else{
						$even_color = 'column_w300_section_01';
					}
				?>
					<div class="<?php echo $even_color;?>">
						<div class="news_image_wrapper">
							<img src="<?php echo base_url();?>public/photos/testimonials/<?php echo $testimonials->image;?>" alt="<?php echo $testimonials->title;?>'s Images" />
						</div>
						
						<div class="news_content">
							<div class="news_date"><?php echo date("F d, Y",strtotime($testimonials->date));?></div>
							<div class="header_04"><a href="#"><?php echo character_limiters($testimonials->title,5);?></a></div>
							<p><?php echo character_limiters($testimonials->body,12);?><a href="#">Read More</a></p>
						</div>
										
						<div class="cleaner"></div>
					</div>

			<?php
					
					$i++;
					}
			?>

			<?php
				}else{
			?>
				<div class="column_w300_section_01">
					<div class="news_image_wrapper">
						
					</div>
					
					<div class="news_content">
						Not Found Any Testimonial
					</div>
									
					<div class="cleaner"></div>
				</div>
			<?php
				}
			?>
            
            
            
            
           
            
            <div class="cleaner"></div>
        </div>
		<div class="cleaner"></div>
		 
		<div id="column_w300">
        
        	<div class="header_03">Announcement</div>
				
			<?php
				if(count($announcement)){
					
					$i = 1;
					
					foreach($announcement as $announcements){
					
					
					$user_id = $this->Shows->getThisValue("id = '$announcements->authorID'", 'users',$limit = '', $order = 'id ASC');
					if($i%2==0){
						$even_color = 'column_w300_section_01 even_color';
					}else{
						$even_color = 'column_w300_section_01';
					}
				?>
					<div class="<?php echo $even_color;?>">
						
						
					<div class="news_content" style="float: none; width:260px;">
						
							<div class="header_04"><a href="#" style="color: #105AAD;"><?php echo character_limiters($announcements->title,10);?></a></div>
							<p><span style="float: left;width:120px;text-align: left;">by: <?php if(count($user_id)): foreach($user_id as $users): echo ucwords($users->full_name); endforeach; endif; ?></span>
							<span style="float: right;width:110px;text-align: right;"><?php echo $announcements->dateCreated;?></span>
							</p>
							<p style="clear: both;"></p>
							<p><?php echo character_limiters($announcements->description,30);?><a href="#">Read More</a></p>
						</div>
										
						<div class="cleaner"></div>
					
				</div>	
			<?php
$i++;					
}
			?>
					
			<?php
				}else{
			?>
				<div class="column_w300_section_01">
					<div class="news_image_wrapper">
						
					</div>
					
					<div class="news_content">
						Not Found Any Announcements.
					</div>
									
					<div class="cleaner"></div>
				</div>
			<?php
				}
			?>
           
            <div class="cleaner"></div>
        </div>
		<div class="cleaner"></div>
		<div id="column_w300">
        
        	<div class="header_03">Quick Links</div>
				<div class="column_w300_section_01">
				<div class="news_content" style="float: none; width:260px;">
				<ul>
					<?php
						if(count($quicklinks)){
						
							foreach($quicklinks as $quicklink){
							
						?>
							<li><a href="<?php echo $quicklink->url;?>"><?php echo $quicklink->title;?></a></li>
							

					<?php
							}
					?>
				</ul>
			</div>
										
						<div class="cleaner"></div>
			</div>
			<?php
				}else{
			?>
				<div class="column_w300_section_01">
					<div class="news_image_wrapper">
						
					</div>
					
					<div class="news_content">
						Not Found Any Quicklinks.
					</div>
									
					<div class="cleaner"></div>
				</div>
			<?php
				}
			?>
           
            <div class="cleaner"></div>
        </div>
    
    	<div class="cleaner"></div>
    </div> <!-- end of content wrapper -->
</div> <!-- end of content wrapper -->

<div id="templatemo_footer_wrapper">

	<div id="templatemo_footer">
    	
        <div class="section_w180">
        	<div class="header_05">Services</div>
            <div class="section_w180_content"> 
            	<ul class="footer_menu_list">
                    <li><a href="#">Lorem ipsum dolor</a></li>
                    <li><a href="#">Cum sociis</a></li>
                    <li><a href="#">Donec quam</a></li>
                    <li><a href="#">Nulla consequat</a></li>
                    <li><a href="#">In enim justo</a></li>              
                </ul>
			</div>
        </div>
        
        <div class="section_w180">
        	<div class="header_05">About</div>
            <div class="section_w180_content">
                <ul class="footer_menu_list">
                    <li><a href="#">Nullam quis</a></li>
                    <li><a href="#">Sed consequat</a></li>
                    <li><a href="#">Cras dapibus</a></li> 
                    <li><a href="#">Lorem ipsum dolor</a></li>
                    <li><a href="#">Cum sociis</a></li>                
                </ul>
            </div>
        </div>
                
        <div class="section_w180">
        	<div class="header_05">Cool links</div>
            <div class="section_w180_content"> 
                <ul class="footer_menu_list">
                    <li><a href="#">Aenean vulputate</a></li>
                    <li><a href="#">Etiam ultricies</a></li>
                    <li><a href="#">Nullam quis</a></li>
                    <li><a href="#">Sed consequat</a></li>
                    <li><a href="#">Cras dapibus</a></li>             
                </ul>
			</div>
        </div>
        
        <div class="section_w180">
	        <div class="header_05">Contact</div>
            
            <div class="section_w180_content">
            
                <ul class="footer_menu_list">
                    <li><a href="#">Donec quam</a></li>
                    <li><a href="#">Nulla consequat</a></li>
                    <li><a href="#">In enim justo</a></li>    
                    <li><a href="#">Aenean vulputate</a></li>
                    <li><a href="#">Etiam ultricies</a></li>           
                </ul>
			</div>
        </div>
        
        <div class="section_w180">
			<div class="header_05">Partners</div>  
            <div class="section_w180_content">      
                <!--<ul class="footer_menu_list">
                    <li><a href="http://www.templatemo.com" target="_parent">CSS Templates</a></li>
                    <li><a href="http://www.flashmo.com" target="_parent">Flash Websites</a></li>
                    <li><a href="http://www.templatemo.com/page/2" target="_parent">Website Templates</a></li>
                    <li><a href="http://www.webdesignmo.com" target="_parent">Web Design Tips</a></li>
                    <li>Free Stock Photos</li>
                </ul>-->
			</div>
        </div>
        
        <div class="margin_bottom_20"></div>
        Copyright © 2014 <a href="#">Rokeya IT Ltd</a> | <a href="http://www.rokeyit.com" target="_parent">Development</a> by <a href="http://www.rashedblog.com" target="_parent">Rashedul Hasan</a>
        <div class="cleaner"></div>
    </div> <!-- end of footer -->
    
</div> <!-- end of footer -->
</body>
</html>