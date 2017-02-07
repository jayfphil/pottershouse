            <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>/public/css/jsDatePick_ltr.min.css" />
            <script type="text/javascript" src="<?php echo base_url(); ?>/public/js/jsDatePick.min.1.3.js"></script>
            <script type="text/javascript">
                window.onload = function(){
                    new JsDatePick({
                        useMode:2,
                        target:"from_date",
                        dateFormat:"%d-%m-%Y"
                    });
                    
                    new JsDatePick({
                        useMode:2,
                        target:"to_date",
                        dateFormat:"%d-%m-%Y"
                    });
                };
            </script>   
            <?php
			$from_date = array(
				'name'	=> 'from_date',
				'id'	=> 'from_date',
				'class' => 'inputbox',
				'value' =>  set_value('from_date')
			);
			$to_date = array(
				'name'	=> 'to_date',
				'id'	=> 'to_date',
				'class' => 'inputbox',
				'value' =>  set_value('to_date')
			);
			
			
			?>
       
            	<!-- box begin -->
                  	<h3>Reservation:</h3>
                    <?php echo form_open('home/search', 'id="reservation-form"'); ?>
                     	<fieldset>
                         	<div class="field">
                           	<label>Location:</label>
                                 <?php echo form_dropdown('location', $OptionsLocation, set_value('location'), 'id= "location" class="select3"'); ?>
                                </div>   
                        	<div class="field">
                           	<label>Check In:</label>
                             <?php echo form_input($from_date);?>
                           </div>
                           <div class="field">
                           	<label>Check Out:</label>
                             <?php echo form_input($to_date);?>
                           </div>
                           <div class="field">
                           	Persons: &nbsp;<input name="person" id="person" type="text" value="1"/>&nbsp; &nbsp; &nbsp; &nbsp; Rooms:&nbsp; <input type="text" name="room_no" id="room_no" value="1"/>
                           </div>
                           <div class="button"><span><span><a href="#" onclick="document.getElementById('reservation-form').submit()">Check Availability</a></span></span></div>
                        </fieldset>
                 <?php echo form_close(); ?>
               <!-- box end -->
