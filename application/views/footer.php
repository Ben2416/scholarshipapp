<div class="waves-effect waves-light" id="exampleSuccessMessage" data-plugin="sweetalert" data-title="Congratulations!" data-text="Your account has been created successfully. Kindly check your email for login details." data-type="success"></div>
  <!-- Core  -->
  <script src="<?php echo base_url(); ?>global/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>global/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>global/vendor/animsition/animsition.min.js"></script>
  <script src="<?php echo base_url(); ?>global/vendor/asscroll/jquery-asScroll.min.js"></script>
  <script src="<?php echo base_url(); ?>global/vendor/mousewheel/jquery.mousewheel.min.js"></script>
  <script src="<?php echo base_url(); ?>global/vendor/asscrollable/jquery.asScrollable.all.min.js"></script>
  <script src="<?php echo base_url(); ?>global/vendor/ashoverscroll/jquery-asHoverScroll.min.js"></script>
  <script src="<?php echo base_url(); ?>global/vendor/waves/waves.min.js"></script>

  <!-- Plugins -->
  <script src="<?php echo base_url(); ?>global/vendor/switchery/switchery.min.js"></script>
  <script src="<?php echo base_url(); ?>global/vendor/intro-js/intro.min.js"></script>
  <script src="<?php echo base_url(); ?>global/vendor/screenfull/screenfull.min.js"></script>
  <script src="<?php echo base_url(); ?>global/vendor/slidepanel/jquery-slidePanel.min.js"></script>

  <!-- Plugins For This Page -->
  <script src="<?php echo base_url(); ?>global/vendor/jquery-placeholder/jquery.placeholder.min.js"></script>
  
  <!-- Plugins For This Page bssbform-->
  <script src="<?php echo base_url(); ?>global/vendor/formvalidation/formValidation.min.js"></script>
  <script src="<?php echo base_url(); ?>global/vendor/formvalidation/framework/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>global/vendor/matchheight/jquery.matchHeight-min.js"></script>
  <script src="<?php echo base_url(); ?>global/vendor/jquery-wizard/jquery-wizard.min.js"></script>
  
   <!-- Plugins For This Page -->
  <script src="<?php echo base_url(); ?>global/vendor/bootbox/bootbox.js"></script>
  <script src="<?php echo base_url(); ?>global/vendor/bootstrap-sweetalert/sweet-alert.min.js"></script>
  <script src="<?php echo base_url(); ?>global/vendor/toastr/toastr.min.js"></script>


  <!-- Scripts -->
  <script src="<?php echo base_url(); ?>global/js/core.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/site.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/js/sections/menu.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/sections/menubar.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/sections/sidebar.min.js"></script>

  <script src="<?php echo base_url(); ?>global/js/configs/config-colors.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/configs/config-tour.min.js"></script>

  <script src="<?php echo base_url(); ?>global/js/components/asscrollable.min.js"></script>
  <script src="<?php echo base_url(); ?>global/js/components/animsition.min.js"></script>
  <script src="<?php echo base_url(); ?>global/js/components/slidepanel.min.js"></script>
  <script src="<?php echo base_url(); ?>global/js/components/switchery.min.js"></script>
  <script src="<?php echo base_url(); ?>global/js/components/tabs.min.js"></script>
  <script src="<?php echo base_url(); ?>global/js/components/jquery-placeholder.min.js"></script>
  <script src="<?php echo base_url(); ?>global/js/components/material.min.js"></script>
  
  <script src="<?php echo base_url(); ?>global/js/components/bootbox.min.js"></script>
  <script src="<?php echo base_url(); ?>global/js/components/bootstrap-sweetalert.min.js"></script>
  <script src="<?php echo base_url(); ?>global/js/components/toastr.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/examples/js/advanced/bootbox-sweetalert.min.js"></script>
  
  <!--	for wizard forms	-->
  <script src="<?php echo base_url(); ?>global/js/components/jquery-wizard.min.js"></script>
  <script src="<?php echo base_url(); ?>global/js/components/matchheight.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/examples/js/forms/wizard.min.js"></script>

  
	<!--			DISPLAY SWEET ALERT			-->
	<?php if($this->session->flashdata('rsuccess_msg')): ?>
		<p><div class="alert alert-success text-center" role="alert"><?php echo $this->session->flashdata('rsuccess_msg'); ?></div></p>
		<script>
			$(document).ready(function(){
				$('#exampleSuccessMessage').attr('data-text','<?php echo $this->session->flashdata('rsuccess_msg')?>');
			});
			$(window).load(function(){
			  $(document).ready(function () {
			   jQuery('#exampleSuccessMessage').click();
			  });
			});
		</script>
	<?php endif; ?>
  
  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>
</body>

</html>