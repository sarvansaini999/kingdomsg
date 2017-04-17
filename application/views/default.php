
			<?php if(isset($header)){ echo $header; } ?>
		  
			<?php if(isset($main)){  echo $main; } ?>
		 
			<?php if(isset($footer)){  echo $footer; } ?>
		</main>
		<script src="<?php echo base_url();?>assets/js/jquery-1.9.1.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/wow.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
		<script src="<?php echo base_url();?>assets/js/owl.carousel.js"></script>
		<script>
      $(document).ready(function(){
	  
		$('#nws_btn').click(function(){
			var email = $('#email').val();
			
			$.ajax({
				url: "<?php echo base_url('home/newsletter'); ?>", 
				type: 'post',
				data: {'email':email},
				success: function(data){
					if(data == 1){
						$('#email').val('');
						$('#msg').show().html('Subscription is completed.').css('color','#fff');
					}else{
						$('#msg').show().html(data).css('color','red');
					}
				}
			});
		});
	
        $(window).scroll(function(){
                if( $(window).scrollTop() > 0 ) {
                        $('header').addClass('fixed');
                     
                } else {
                        $('header').removeClass('fixed');
                }
        
  });
    })  ;
  </script>
   <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>
	</body>
</html>