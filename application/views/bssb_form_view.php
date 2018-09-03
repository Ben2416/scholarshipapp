<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?=$page_title;?></title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets2/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets2/css/form-elements.css">
        <link rel="stylesheet" href="assets2/css/style.css">
		<link rel="stylesheet" href="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets2/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets2/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets2/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets2/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets2/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

		<!-- Top menu -->
		

        <!-- Top content -->
        <div class="top-content">
            <div class="container">
                
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2 text">
						<?php $pre = 'alert alert'; ?>
						<?php if($this->session->flashdata('success_msg')): ?>
							<p><div class="<?=$pre?>-success text-center" role="alert"><?php echo $this->session->flashdata('success_msg'); ?></div></p>
						<?php endif; ?>
						<?php if($this->session->flashdata('error_msg')): ?>
							<p><div class="<?=$pre?>-danger text-center" role="alert"><?php echo $this->session->flashdata('error_msg'); ?></div></p>
						<?php endif; ?>
						<?php if($this->session->flashdata('info_msg')): ?>
							<p><div class="<?=$pre?>-info text-center" role="alert"><?php echo $this->session->flashdata('info_msg'); ?></div></p>
						<?php endif; ?>
						<?php if($this->session->flashdata('warning_msg')): ?>
							<p><div class="<?=$pre?>-warning text-center" role="alert"><?php echo $this->session->flashdata('warning_msg'); ?></div></p>
						<?php endif; ?>
						<?php if($this->session->flashdata('news_msg')): ?>
							<p><div class="<?=$pre?>-primary text-center" role="alert"><?php echo $this->session->flashdata('news_msg'); ?></div></p>
						<?php endif; ?>
						<input type="hidden" id="ajaxurl" style="display:none;" value="<?php echo base_url().'bssbform/populateForm'; ?>" />
					</div>
				</div>
				
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <div class="description">
                       	    <img src="assets2/logo.png"/>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                    	<?php echo form_open_multipart(base_url().'bssbform',array('class'=>'f1')); ?><!--<form role="form" action="" method="post" class="f1">-->

                    		<h3>Update Scholarship Details</h3>
							<p>Welcome <em><?php echo $username; ?></em><strong style="padding-left:30px; color:red;"><a href="logout">Logout</a></strong></p>
                    		
                    		<div class="f1-steps">
                    			<div class="f1-progress">
                    			    <div class="f1-progress-line" data-now-value="12.5" data-number-of-steps="4" style="width: 12.5%;"></div>
                    			</div>
                    			<div class="f1-step active">
                    				<div class="f1-step-icon"><i class="fa fa-graduation-cap"></i></div>
                    				<p>Scholarship Info</p>
                    			</div>
                    			<div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-money"></i></div>
                    				<p>Tuition Info</p>
                    			</div>
                    			<div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-bank"></i></div>
                    				<p>Bank Info</p>
                    			</div>
                    		    <div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-check"></i></div>
                    				<p>Done</p>
                    			</div>
                    		</div>
                    		
                    		<fieldset>
                    		    <h4>Scholarship Details:</h4>
								<div class="form-group">
                                    
									 <select class="form-control" name="scholarship_type" id="scholarship_type">
										<option selected>Scholarship Type</option>
										<option value="Local">Local</option>
										<option value="International">International</option>
									 </select>

                                </div>
								<div class="form-group">
                                    
									 <select class="form-control" id="local_university" name ="local_university"  value="<?php echo set_value('local_university')?>"></select>

                                </div>
								<div class="form-group">
                                    
									 <select class="form-control" id="country" name ="country"  value="<?php echo set_value('country')?>"></select>

                                </div>
								
								<div class="form-group">
                                    
									 <select class="form-control" name="university" id="university" value="<?php echo set_value('university')?>">
										<option selected>Select University</option>
										<option value="Local">Middlesex University</option>
										<option value="International">Essex University</option>
										<option value="Other">Other</option>
									 </select>

                                </div>
								<div id="oucd" class="form-group"><hr>
									<h4>Other:</h4>
									<label>If your University of Study is not int he above list, please provide it below</label>
									<div class="form-group">
										<label class="sr-only" for="other_university">Course of Study</label>
										<input type="text" name="other_university" placeholder="University of study" class="form-control" id="other_university" value="<?php echo set_value('other_university')?>">
									</div>
									<div class="form-group">
										<label class="sr-only" for="other_university_country">Course of Study</label>
										<input type="text" name="other_university_country" placeholder="Country of study" class="form-control" id="other_university_country" value="<?php echo set_value('other_university_country')?>">
									</div><hr>
								</div>
								
								<div class="form-group">
                    			    <label class="sr-only" for="student_id">Student ID</label>
                                    <input type="text" name="student_id" placeholder="Student ID" class="form-control" id="student_id" value="<?php echo set_value('student_id')?>">
                                </div>
								
								<div class="form-group">
                    			    <label class="sr-only" for="course_of_study">Course of Study</label>
                                    <input type="text" name="course_of_study" placeholder="Course of Study" class="form-control" id="course_of_study" value="<?php echo set_value('course_of_study')?>">
                                </div>
								<div class="form-group">
                    			    <label class="" for="expected_degree">Expected Degree</label>
                                    <label class="radio-inline"><input type="radio" name="expected_degree" value="BSc">Undergraduate</label>
									<label class="radio-inline"><input type="radio" name="expected_degree" value="MSc">Masters</label>
									<label class="radio-inline"><input type="radio" name="expected_degree" value="PhD">Postgraduate</label>
                                </div>
								
								<div class="form-group">
                                    <label class="sr-only" for="university_address">University Address</label>
                                    <textarea name="university_address" placeholder="University Address" 
									 class=" form-control" id="university_address"><?php echo set_value('university_address')?></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="" for="scholarship_award_letter">Upload Bayelsa State Scholarship Award Letter</label>
                                    <input type="file" name="scholarship_award_letter" class="form-control" id="scholarship_award_letter">
									<input type="hidden" name="hidden_scholarship_award_letter" id="hidden_scholarship_award_letter" value="0">
                                </div>
								
								<div class="form-group">
                                    <label class="" for="university_admission_letter">Upload University Admission Letter</label>
                                    <input type="file" name="university_admission_letter" class="form-control" id="university_admission_letter">
									<input type="hidden" name="hidden_university_admission_letter" id="hidden_university_admission_letter" value="0">
                                </div>
								
								<div class="form-group">
                    			    <label class="" for="start_date">Programme Start Date</label>
                                    <input type="date" name="start_date" placeholder="DD/MM/YYYY e.g 10/01/2012" class="form-control" id="start_date" value="<?php echo set_value('start_date')?>">
                                </div>
								<div class="form-group">
                    			    <label class="" for="end_date">Programme End Date</label>
                                    <input type="date" name="end_date" placeholder="DD/MM/YYYY e.g 10/01/2019" class="form-control" id="end_date" value="<?php echo set_value('end_date')?>">
                                </div>
								
								<hr>
								<p>University Contact Person</p>
								
								<div class="form-group">
                    			    <label class="sr-only" for="university_contact_name">Contact Person</label>
                                    <input type="text" name="university_contact_name" placeholder="Contact Person" class="form-control" id="university_contact_name"  value="<?php echo set_value('university_contact_name')?>">
                                </div>
								<div class="form-group">
                    			    <label class="sr-only" for="university_contact_position">Position Held</label>
                                    <input type="text" name="university_contact_position" placeholder="Position held" class="form-control" id="university_contact_position" value="<?php echo set_value('university_contact_position')?>">
                                </div>
								<div class="form-group">
                    			    <label class="sr-only" for="university_contact_phone">Contact Phone</label>
                                    <input type="text" name="university_contact_phone" placeholder="e.g (+99)883 938 9388" class="form-control" id="university_contact_phone" value="<?php echo set_value('university_contact_phone')?>">
                                </div>
								<div class="form-group">
                    			    <label class="sr-only" for="university_contact_email">Contact e-mail</label>
                                    <input type="text" name="university_contact_email" placeholder="University Contact Email" class="form-control" id="university_contact_email" value="<?php echo set_value('university_contact_email')?>">
                                </div>
								
                                
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>
							

                            <fieldset>
                                <h4>Tuition / Stipend Details:</h4>
								<div class="form-group">
									<label class="" for="currency_type">Country Currency</label>
                                    <select class="input-medium bfh-currencies form-control" data-currency="NGN" name="currency_type"></select>
                                </div>
                                <div class="form-group">
                                    <label class="" for="total_tuition">Total Tuition</label>
                                    <input type="text" name="total_tuition" placeholder="Total Tuition" class="form-control" id="total_tuition" value="<?php echo set_value('total_tuition')?>">
                                </div>
								<div class="form-group">
                                    <label class="" for="total_paid">Total Paid</label>
                                    <input type="text" name="total_paid" placeholder="Total Paid" class="form-control" id="total_paid" value="<?php echo set_value('total_paid')?>">
                                </div>
								<div class="form-group">
                                    <label class="" for="total_due">Total Due</label>
                                    <input type="text" name="total_due2" placeholder="Auto calculate" class="form-control" id="total_due2" disabled="disabled"  value="<?php echo set_value('total_due')?>">
									<input type="hidden" name="total_due" placeholder="Auto calculate" class="form-control" id="total_due" value="<?php echo set_value('total_due')?>">
                                </div>
								<div class="form-group">
									<label class="" for="evidence_of_payment">Please attach evidence of payment</label>
									<input type="file" name="evidence_of_payment[]" class="form-control" id="evidence_of_payment" multiple>
									<input type="hidden" name="hidden_evidence_of_payment" id="hidden_evidence_of_payment" value="0">
								</div>
								<div class="form-group">
                                    <label class="" for="stipend_paid">Stipend Paid</label>
									<select name="stipend_paid" class="form-control" id="stipend_paid" value="<?php echo set_value('stipend_paid')?>">
										<?php
											echo "<option>1 month</option>";
											for($i=2;$i<49;$i++){
												echo "<option>".$i." months</option>";
											}
										?>
									</select>
                                    <!--<input type="text" name="stipend_paid" placeholder="(Number of Months)" class="form-control" id="stipend_paid"  value="<?php echo set_value('stipend_paid')?>">-->
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>
							
                            
                            <fieldset>
                                <h4>University Bank Account Information</h4>
                                <div class="form-group">
                                    <label class="sr-only" for="university_bank_name">University Bank Name</label>
                                    <input type="text" name="university_bank_name" placeholder="University Bank Name" class="form-control" id="university_bank_name" value="<?php echo set_value('university_bank_name')?>">
                                </div>
								<div class="form-group">
                                    <label class="sr-only" for="university_account_name">University Account Name</label>
                                    <input type="text" name="university_account_name" placeholder="University Account Name" class="form-control" id="university_account_name" value="<?php echo set_value('university_account_name')?>">
                                </div>
								<div class="form-group">
                                    <label class="sr-only" for="university_account_number">University Account Number</label>
                                    <input type="text" name="university_account_number" placeholder="University Account Number" class="form-control" id="university_account_number" value="<?php echo set_value('university_account_number')?>">
                                </div>
								<div class="form-group">
                                    <label class="sr-only" for="swift_code">Swift Code</label>
                                    <input type="text" name="swift_code" placeholder="Swift Code" class="form-control" id="swift_code" value="<?php echo set_value('swift_code')?>">
                                </div>
								<div class="form-group">
                                    <label class="sr-only" for="iban_number">IBAN Number</label>
                                    <input type="text" name="iban_number" placeholder="IBAN Number" class="form-control" id="iban_number" value="<?php echo set_value('iban_number')?>">
                                </div>
								<hr>
								<h4>Personal Bank Details</h4>
								<div class="form-group">
                                    <label class="sr-only" for="personal_bank_name">Bank Name</label>
                                    <input type="text" name="personal_bank_name" placeholder="Bank Name" class="form-control" id="personal_bank_name" value="<?php echo set_value('personal_bank_name')?>">
                                </div>
								<div class="form-group">
                                    <label class="sr-only" for="personal_account_name">Account Name</label>
                                    <input type="text" name="personal_account_name" placeholder="Account Name" class="form-control" id="personal_account_name" value="<?php echo set_value('personal_account_name')?>">
                                </div>
								<div class="form-group">
                                    <label class="sr-only" for="personal_account_number">Account Number</label>
                                    <input type="text" name="personal_account_number" placeholder="Account Number" class="form-control" id="personal_account_number" value="<?php echo set_value('personal_account_number')?>">
                                </div>
								<hr>
								<div class="form-group">
									<h4>Attestation:</h4>
									<div class="checkbox "><label class="" for="attestation">
										<input type="checkbox" name="attestation" id="attestation" class="" value="Attested" <?php echo set_checkbox('attestation')?> >
										I, do hereby attest that to the best of my knowledge, the information given is true and correct.
									</label></div>
									<?php echo form_error('attestation') ?>
								</div><hr>
                               
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>

                            <fieldset>
                                <h4>User Profile</h4>
                                <div class="form-group">
                                    <div class="well well-sm">
											<div class="row">
												<!--<div class="col-sm-6 col-md-4">
													<img src="assets/passports/<?=$passport;?>" alt="" class="img-rounded img-responsive">
												</div>-->
												<div class="col-sm-12 col-md-12">
													<img src="assets/passports/<?=$passport;?>" alt="" width="150px" height="150px" class="img-rounded img-responsive center">
													<h2><strong><?php echo ucfirst($firstname).' '.ucfirst($lastname); ?></strong></h2>
													<hr>
														 <i class="glyphicon glyphicon-chevron-right col-md-6"></i>Scholarship Type: <div id="std" class="col-md-6" style="display: inline-block;"></div>
														<br>
														<i class="glyphicon glyphicon-chevron-right col-md-6"></i>University Name: <div id="und" class="col-md-6" style="display: inline-block;"></div>
														<br>
														<i class="glyphicon glyphicon-chevron-right col-md-6"></i>course of study: <div id="csd" class="col-md-6" style="display: inline-block;"></div>
														<br>
														<i class="glyphicon glyphicon-chevron-right col-md-6"></i>country: <div id="ctd" class="col-md-6" style="display: inline-block;"></div>
														<br>
														<i class="glyphicon glyphicon-chevron-right col-md-6"></i>Total Tuition: <div id="ttd" class="col-md-6" style="display: inline-block;"></div>
														<br>
														<i class="glyphicon glyphicon-chevron-right col-md-6"></i>Amount Paid: <div id="apd" class="col-md-6" style="display: inline-block;"></div>
														<br>
														<i class="glyphicon glyphicon-chevron-right col-md-6"></i>Amount Due: <div id="amd" class="col-md-6" style="display: inline-block;"></div>
														<br>
														<i class="glyphicon glyphicon-chevron-right col-md-6"></i>Stipend paid: <div id="spd" class="col-md-6" style="display: inline-block;"></div>
												</div>
											</div>

                                </div>
                                
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="submit" class="btn btn-submit">Submit</button>
                                </div>
                            </fieldset>
                    	
                    	</form>
                    </div>
                </div>
                    
            </div>
        </div>


        <!-- Javascript -->
		
        <script src="assets2/js/jquery-1.11.1.min.js"></script>
        <script src="assets2/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets2/js/jquery.backstretch.min.js"></script>
        <script src="assets2/js/retina-1.1.0.min.js"></script>
        <script src="assets2/js/scripts.js"></script>
		<script type= "text/javascript" src = "assets/js/universities.js"></script>
		<!-- Recently Added -->
		<script type= "text/javascript" src = "assets2/js/uni-nigeria.js"></script>
		<script type= "text/javascript" src = "assets2/js/bootstrap-formhelpers-currencies.en_US.js"></script>
		<script type= "text/javascript" src = "assets2/js/bootstrap-formhelpers-currencies.js"></script>
		<script type= "text/javascript" src = "assets2/js/bootstrap-formhelpers-selectbox.js"></script>
		<script language="javascript">
			//populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
			//populateCountries("country2");
			populateLocalUniversities("local_university");//localUniversity");
		</script>
		<!-- Recently Added -->
		
		<script language="javascript">
			//populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
			//populateCountries("country");
			populateCountries("country", "university");
		</script>
		

		<!--new javascript added for loading currency -->
		<script language="javascript" src="assets/js/bssbform.js"></script>
		
        
        <!--[if lt IE 10]>
            <script src="assets2/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>