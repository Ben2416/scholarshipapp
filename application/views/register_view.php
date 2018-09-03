  <!-- Page -->
  <div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
  data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle">
      <div class="brand">
        <img class="brand-img" src="<?php echo base_url(); ?>assets/logo.png" alt="...">
      </div>
	  <?php $attributes = array('class' => 'email', 'id' => 'myform', 'autocomplete' => 'off'); ?>
      <?php echo form_open_multipart(base_url().'register'); ?><!--<form method="post" action="" autocomplete="off">-->
        
        <div class="form-group form-material floating">
          <input type="text" class="form-control empty" id="inputFirstName" name="firstname" value="<?php echo set_value('firstname')?>" autocomplete="off">
          <label class="floating-label" for="inputFirstName">First Name</label>
					<span class="text-danger"><?php echo form_error('firstname'); ?></span>
        </div>
				<div class="form-group form-material floating">
          <input type="text" class="form-control empty" id="inputLastName" name="lastname" value="<?php echo set_value('lastname')?>" autocomplete="off">
          <label class="floating-label" for="inputLastName">Last Name</label>
					<span class="text-danger"><?php echo form_error('lastname'); ?></span>
        </div>
        <div class="form-group form-material floating">
          <input type="email" class="form-control empty" id="inputEmail" name="email" value="<?php echo set_value('email')?>" autocomplete="off">
          <label class="floating-label" for="inputEmail">Email</label>
					<span class="text-danger"><?php echo form_error('email'); ?></span>
        </div>
				<div class="row">
					<div class="form-group form-material floating col-md-6">
					 <input type="text" class="form-control empty" id="inputPhone" name="phone" value="<?php echo set_value('phone');?>" autocomplete="off">
						<label class="floating-label" for="inputPhone" style="margin-left: 15px;">Phone Number</label>
						<span class="text-danger"><?php echo form_error('phone'); ?></span>
					</div>
					<div class="form-group form-material floating col-md-6" style="margin-top: 20px;">
						<select class="form-control" name="sex">
							<option value="">&nbsp;</option>
							<option value="Male" <?php echo  set_select('sex', 'Male'); ?>>Male</option>
							<option value="Female" <?php echo  set_select('sex', 'Female'); ?>>Female</option>
						</select>
						<label class="floating-label" for="inputSex" style="margin-left: 15px;">Sex</label>
						<span class="text-danger"><?php echo form_error('sex'); ?></span>
					</div>
				</div>
				<div class="form-group form-material floating">
					<textarea class="form-control empty" id="inputAddress" rows="3" name="address"><?php echo set_value('address');?></textarea>
					<label class="floating-label" for="inputAddress">Contact Address</label>
				</div>
				<div class="form-group form-material floating">
					<input type="text" class="form-control" placeholder="" readonly="" />
					<input type="file" id="inputFile" name="userfile" value="<?php echo set_value('userfile')?>"	>
					<label class="floating-label" for="inputFile">Upload Passport</label>
					<span class="text-danger"><?php echo form_error('userfile'); ?></span>
				</div>
        <button type="submit" class="btn btn-primary btn-block">Register</button>
			</form>
      <p>Back to <a href="login">Login</a></p>

      <footer class="page-copyright page-copyright-inverse">
        <p>WEBSITE BY o3interactive Technologies</p>
        <p>© 2017. All RIGHT RESERVED.</p>
        
      </footer>
    </div>
  </div>
  <!-- End Page -->