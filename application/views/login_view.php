  <!-- Page -->
  <div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
  data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle">
      <div class="brand">
        <img class="brand-img" src="<?php echo base_url(); ?>assets/logo.png" alt="...">
      </div>
			<?php $attributes = array('autocomplete' => 'off'); ?>
      <?php echo form_open(base_url().'login',$attributes); ?><!--<form method="post" action="" autocomplete="off">-->
        
        <div class="form-group form-material floating">
          <input type="email" class="form-control empty" id="inputEmail" name="username" autocomplete="off">
          <label class="floating-label" for="inputEmail">Email</label>
		  <span class="text-danger"><?php echo form_error('username'); ?></span>
        </div>
        <div class="form-group form-material floating">
          <input type="password" class="form-control empty" id="inputPassword" name="password" autocomplete="off">
          <label class="floating-label" for="inputPassword">Password</label>
		  <span class="text-danger"><?php echo form_error('password'); ?></span>
        </div>
        <div class="form-group clearfix">
          <div class="checkbox-custom checkbox-inline checkbox-primary pull-left">
            <input type="checkbox" id="inputCheckbox" name="remember">
            <label for="inputCheckbox">Remember me</label>
          </div>
          <a class="pull-right" href="forgot_password">Forgot password?</a>
        </div>
        <button type="submit" class="btn btn-primary btn-block" name="login_btn" value="Sign in">Sign in</button>
		
      </form>
      <p>Still no account? Please go to <a href="register">Register</a></p>

      <footer class="page-copyright page-copyright-inverse">
        <p>WEBSITE BY o3interactive Technologies</p>
        <p>© 2017. All RIGHT RESERVED.</p>
        
      </footer>
    </div>
  </div>
  <!-- End Page -->