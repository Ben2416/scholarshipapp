<!-- Page -->
  <div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
  data-animsition-out="fade-out">
    <div class="page-content vertical-align-middle">
		<div class="brand">
			<img class="brand-img" src="<?php echo base_url(); ?>assets/logo.png" alt="...">
		</div>
      <p>Input your registered email to reset your password</p>

      <?php echo form_open(base_url().'login/forgot_password'); ?><!--<form method="post" role="form">-->
        <div class="form-group form-material floating">
          <input type="email" class="form-control empty" id="inputEmail" name="email" autocomplete="off">
          <label class="floating-label" for="inputEmail">Your Email</label>
		  <span class="text-danger"><?php echo form_error('email'); ?></span>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block" name="forgot_btn" value="Reset Your Password">Reset Your Password</button>
        </div>
      </form>
	  <p>To <a href="<?php echo base_url();?>login">Login</a> | To <a href="<?php echo base_url();?>register">Register</a></p>

      <footer class="page-copyright page-copyright-inverse">
        <p>WEBSITE BY o3interactive Technologies</p>
        <p>© 2017. All RIGHT RESERVED.</p>
        
      </footer>
    </div>
  </div>
<!-- End Page -->