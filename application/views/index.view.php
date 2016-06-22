
<section id="home" class="page">
    <div class="container">
        <div class="content cover text-center">
          	<div class="banner-content">
			<div class="heroText">
                <h2><span> Car Rental </span><br>
                <strong>Rent a car of your dreams!</strong></h2>
              </div>
			</div>
        </div>
    </div>
</section>

<section id="services" class="page space">
	<div class="container text-center"> 
		<div class="heading">
			<h2>Our Services</h2>		
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, alias enim placeat earum quos ab.</p>
		</div>
		<div class="row services-list">
			<div class="col-sm-6 col-md-3 text-center service animated fadeInUp visible" data-animation="fadeInUp">
				<div class="service-icon"> 
					<img src="assets/img/car-wash.jpg" alt=""/> 
				</div>
				<h4 class="color-white">Car Wash</h4>
				<p>Lorem ipsum massa sed turpis ipsum dolor lorem luctus scelerisque gravida aliquet.</p>
			</div><!-- END COLUMN 3 -->
			<div class="col-sm-6 col-md-3 text-center service animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="200">
				<div class="service-icon">
					<img src="assets/img/car-service.jpg" alt=""/> 
				</div>
				<h4 class="color-white">Car Servicing</h4>
				<p>Lorem ipsum massa sed turpis ipsum dolor lorem luctus scelerisque gravida aliquet.</p>
			</div><!-- END COLUMN 3 -->
			<div class="col-sm-6 col-md-3 text-center service animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="400">
				<div class="service-icon">
					<img src="assets/img/Car-painting.jpg" alt=""/> 
				</div>
				<h4 class="color-white">Car Painting</h4>
				<p>Lorem ipsum massa sed turpis ipsum dolor lorem luctus scelerisque gravida aliquet.</p>
			</div><!-- END COLUMN 3 -->
			<div class="col-sm-6 col-md-3 text-center service animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="600">
				<div class="service-icon">
					<img src="assets/img/car-modi.jpg" alt=""/> 
				</div>
				<h4 class="color-white">Car Modifying</h4>
				<p>Lorem ipsum massa sed turpis ipsum dolor lorem luctus scelerisque gravida aliquet.</p>
			</div><!-- END COLUMN 3 -->
		</div>       
	</div>
</section>
<a name="contact"></a>
<?if($error): ?>
  <div class="alert alert-danger" role="alert">
    <?php echo validation_errors(); ?>  
  </div>
 <?php endif; ?>
 <?if($sent): ?>
  <div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Success</strong> Your message was sent. 
  </div>
 <?php endif; ?>

<section id="contact" class="content-section form contact light space">
    	<div class="container">
        	  <div class="content cover text-center">
              <div class="heading">
                <h2>Getting in touch</h2><br/>
              </div>
               <div class="row">
            <span id="message"></span><!-- remove #message to stop floating jQuery messages -->
            
            <form id="contact_form" name="contact" method="post" action="http://<?php echo base_url(); ?>#contact">
                <div class="col-lg-5 anim fadeInLeft animated" style="visibility: visible;">
                
                    <span class="input-group">
                        <i class="fa fa-user"></i>
                        <input type="text" name="contactName" value="<?php echo $contactName;?>" id="contactName" class="lg" placeholder="Name">
                    </span><!-- .input-group -->
                    
                    <span class="input-group">
                        <i class="fa fa-envelope"></i>
                        <input type="text" name="contactEmail" value="<?php echo $contactEmail;?>" id="contactAddress" class="lg" placeholder="Email Address">
                    </span><!-- .input-group -->
                    
                   	<span class="input-group">
                        <i class="fa fa-book"></i>
                        <input type="text" name="contactSubject" value="<?php echo $contactSubject;?>" id="contactSubject" class="lg" placeholder="Subject">
                    </span><!-- .input-group -->
                    
                </div><!-- .col-5 -->
                
                <div class="col-lg-7 anim fadeInRight animated" style="visibility: visible;">
                
                 	<span class="input-group">
                        <textarea name="contactMessage" id="contactMessage" class="lg" placeholder="What's on your mind?"><?php echo $contactMessage;?></textarea>
                    </span><!-- .input-group -->
                    <input type="hidden" name="action" value="send">
                    <span class="input-group">
                    	<button class="submit" type="submit" onclick="$('#contact_form').submit();" data-loading-text="SENDING...">SEND</button>
                    </span><!-- .input-group -->
                </div>
            </form>
            </div>
            
    	</div><!-- .container -->
    	
        <span id="message_sent"><i class="fa-check fa"></i></span><!-- jQuery display of giant checkmark -->	
        
</section>
