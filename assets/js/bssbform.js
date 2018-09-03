//$(window).load(function(){//})
$(document).ready(function(){
	$('#oucd').hide();
	$('#country').hide();
	$('#university').hide();
	$('#local_university').hide();
	
	$('#scholarship_type').change(function(){
		$('#std').html( $('#scholarship_type option:selected').text() );	
	});

	$('#university').change(function(){
		$('#und').html( $('#university option:selected').text() );
		if( $('#university option:selected').text() == "Other"){
			$('#oucd').show();
		}else{
			$('#oucd').hide();
		}

	});
	$('#local_university').change(function(){
		$('#und').html( $('#local_university option:selected').text() );	
	});
	$('#other_university').change(function(){
		$('#und').html( $('#other_university').val() );	
	});

	$('#course_of_study').change(function(){
		$('#csd').html( $('#course_of_study').val() );	
	});

	$('#country').change(function(){
		if( $('#country option:selected').text() == "Other" ){
			$('#university').val("Other");$('#university').trigger("change");
		}else{
			$('#university').val("Select University");
			$('#ctd').html( $('#country option:selected').text() );	$('#university').trigger("change");
		}

	});
	$('#other_university_country').change(function(){
		$('#ctd').html( $('#other_university_country').val() );	
	});

	$('#total_tuition').change(function(){
		$('#ttd').html( $('#total_tuition').val() );
	});

	$('#total_paid').change(function(){
		$('#apd').html( $('#total_paid').val() );
	});

	$('#stipend_paid').change(function(){
		$('#spd').html( $('#stipend_paid').val() );	
	});

	$('#scholarship_type').change(function(){
		if($('#scholarship_type').val() == "Local"){
			$('#country').hide();
			$('#university').hide();
			$('#oucd').hide();
			$('#local_university').show();
		}else if($('#scholarship_type').val() == "International"){
			$('#country').show();
			$('#university').show();
			$('#local_university').hide();
		}
	});
	$('#scholarship_award_letter').change(function(){
		if( $('#scholarship_award_letter').val()=="" && jdata.scholarship_award_letter !=null){
			$('#hidden_scholarship_award_letter').val('1');
		}else if( $('#scholarship_award_letter').val()!="" && jdata.scholarship_award_letter !=null ){
			$('#hidden_scholarship_award_letter').val('0');
		}else{
			$('#hidden_scholarship_award_letter').val('0');
		}
	});
	$('#university_admission_letter').change(function(){
		if( $('#university_admission_letter').val()=="" && jdata.university_admission_letter !=null){
			$('#hidden_university_admission_letter').val('1');
		}else if( $('#scholarship_award_letter').val()!="" && jdata.university_admission_letter !=null ){
			$('#hidden_university_admission_letter').val('0');
		}else{
			$('#hidden_university_admission_letter').val('0');
		}
	});
	$('#evidence_of_payment').change(function(){
		if( $('#evidence_of_payment').val()=="" && jdata.evidence_of_payment !=null){
			$('#hidden_evidence_of_payment').val('1');
		}else if( $('#evidence_of_payment').val()!="" && jdata.evidence_of_payment !=null ){
			$('#hidden_evidence_of_payment').val('0');
		}else{
			$('#hidden_evidence_of_payment').val('0');
		}
	});

	$('#total_tuition').keyup(function(){
		$('#total_due2').val( $('#total_tuition').val() - $('#total_paid').val() );
		$('#total_due').val( $('#total_due2').val() );
		$('#amd').html( $('#total_due2').val() );	
	});

	$('#total_paid').keyup(function(){
		$('#total_due2').val( $('#total_tuition').val() - $('#total_paid').val() );
		$('#total_due').val( $('#total_due2').val() );
		$('#amd').html( $('#total_due2').val() );	
	});
	
	var jdata = null;
	$.ajax({
		url: $('#ajaxurl').val(),//'bssbform/populateForm',
		//type: 'POST',
		//data: form_data,
		async: false,
		dataType: 'JSON',
		success: function(data) {jdata = data; 
			//alert(jdata.email);
			if(data.scholarship_type != null){
				$('[name="scholarship_type"]').val(data.scholarship_type);
				$('[name="scholarship_type"]').trigger("change");
				if(data.scholarship_type == "International" ){
					$('#country').show();$('#university').show();
					$('[name="country"]').val(data.country);
					$('[name="country"]').trigger("change");
				}else{
					$('#ctd').html( "Nigeria" );
				}
			}
			
			if(data.university != null){$('[name="university"]').val(data.university);$('[name="university"]').trigger("change");}
			$('[name="local_university"]').val(data.local_university);$('[name="local_university"]').trigger("change");
			$('[name="other_university"]').val(data.other_university);$('[name="other_university"]').trigger("change");
			$('[name="other_university_country"]').val(data.other_university_country);$('[name="other_university_country"]').trigger("change");
			$('[name="student_id"]').val(data.student_id);
			$('[name="course_of_study"]').val(data.course_of_study);$('[name="course_of_study"]').trigger("change");
			$("input[name=expected_degree][value=" + data.expected_degree + "]").attr('checked', 'checked');
			$('[name="university_address"]').val(data.university_address);$('[name="university_address"]').trigger("change");
			if(data.scholarship_award_letter != "" && data.scholarship_award_letter != null){
				$('#hidden_scholarship_award_letter').val('1');
				$('[name="scholarship_award_letter"]').after("<div class='alert-success'> <i class='fa fa-check'></i> Award Letter Uploaded.</div>");
			}
			
			if(data.university_admission_letter != "" && data.university_admission_letter != null){
				$('#hidden_university_admission_letter').val('1');
				$('[name="university_admission_letter"]').after("<div class='alert-success'> <i class='fa fa-check'></i> Admission Letter Uploaded.</div>");
			}
			$('[name="start_date"]').val(data.start_date);
			$('[name="end_date"]').val(data.end_date);
			$('[name="university_contact_name"]').val(data.university_contact_name);
			$('[name="university_contact_position"]').val(data.university_contact_position);
			$('[name="university_contact_phone"]').val(data.university_contact_phone);
			$('[name="university_contact_email"]').val(data.university_contact_email);
			$('[name="currency_type"]').val(data.currency_type);
			$('[name="total_tuition"]').val(data.total_tuition);$('[name="total_tuition"]').trigger("change");
			$('[name="total_paid"]').val(data.total_paid);$('[name="total_paid"]').trigger("change");
			$('[name="total_due"]').val(data.total_due);
			$('[name="total_due2"]').val(data.total_due);$('#amd').html( $('#total_due2').val() );
			if(data.evidence_of_payment != "" && data.evidence_of_payment != null){
				$('#hidden_evidence_of_payment').val('1');
				var str = (data.evidence_of_payment.split(',')).length;
				$('[id="evidence_of_payment"]').after("<div class='alert-success'> <i class='fa fa-check'></i> "+str+" Evidence of Payment Uploaded.</div>");
			}
			$('[name="stipend_paid"]').val(data.stipend_paid);$('[name="stipend_paid"]').trigger("change");
			$('[name="university_bank_name"]').val(data.university_bank_name);
			$('[name="university_account_name"]').val(data.university_account_name);
			$('[name="university_account_number"]').val(data.university_account_number);
			$('[name="swift_code"]').val(data.swift_code);
			$('[name="iban_number"]').val(data.iban_number);
			$('[name="personal_bank_name"]').val(data.personal_bank_name);
			$('[name="personal_account_name"]').val(data.personal_account_name);
			$('[name="personal_account_number"]').val(data.personal_account_number);
			if(data.attestation == "Attested"){ $('[name="attestation"]').prop("checked", true);}
		},
		error: function(xhr,st,er){
			alert(xhr+" failed "+er);
		}
	});
	



});
//});