<?php
require("./conf/utility.php");	
require("./conf/database.php");
require("./conf/sendMail.php");

session_start();
$csrf_token = $_SESSION['csrf_token'];

if($_SERVER['REQUEST_METHOD']!='POST'){
	echo json_encode(array('status'=>'fail', 'message'=>'invalid request!')); die();
}

$data = json_decode(file_get_contents('php://input'), true);
$data = array_map('xss_clean', $data);

if($csrf_token=='' || $data['_token']!=$csrf_token){
	echo json_encode(array('status'=>'fail', 'csrf_error'=>'form expired or invalid access')); die();
}


if($data['sfname'] == '' || isValidateStringWithSpaces($data['sfname'])){
	echo json_encode(array('status' => 'fail', 'sfname_error'=>'Student First Name is required and only alphabet and space allowed'));
	die();
}
/*
if($data['slname'] == '' || isValidateStringWithSpaces($data['slname'])){
	echo json_encode(array('status' => 'fail', 'slname_error'=>'Student Last Name is required and only alphabet and space allowed'));
	die();
}
*/

if (empty($data['sought']) || isValidateStringWithSpaces($data['sought'])) {
	echo json_encode(array('status' => 'fail', 'sought_error' => 'This field is required'));
	die();
}

/*
if ($data['cschool'] == '') {
	echo json_encode(array('status' => 'fail', 'cschool_error' => 'This field is required'));
	die();
}

if ($data['cclass'] == '') {
	echo json_encode(array('status' => 'fail', 'cclass_error' => 'This field is required'));
	die();
}

if ($data['caddress'] == '') {
	echo json_encode(array('status' => 'fail', 'caddress_error' => 'This field is required'));
	die();
}
*/

if ($data['dob'] == '' || isValidateDate($data['dob'])) {
	echo json_encode(array('status' => 'fail', 'dob_error' => 'This field is required'));
	die();
}

if ($data['gender'] == '' || isValidateStringWithSpaces($data['gender'])) {
	echo json_encode(array('status' => 'fail', 'gender_error' => 'This field is required'));
	die();
}


if ($data['category'] == '' || isValidateStringWithSpaces($data['category'])) {
	echo json_encode(array('status' => 'fail', 'category_error' => 'This field is required'));
	die();
}

if ($data['sanumber'] != '' && isValidAadhar($data['sanumber'])) {
	echo json_encode(array('status' => 'fail', 'sanumber_error' => 'This field is required'));
	die();
}

/*
if ($data['bgroup'] == '') {
	echo json_encode(array('status' => 'fail', 'bgroup_error' => 'This field is required'));
	die();
}
*/

if ($data['dachild'] == '') {
	echo json_encode(array('status' => 'fail', 'dachild_error' => 'This field is required'));
	die();
}

if ($data['amhistory'] == '') {
	echo json_encode(array('status' => 'fail', 'amhistory_error' => 'This field is required'));
	die();
}

if ($data['email'] == '' || isEmail($data['email'])) {
		echo json_encode(array('status' => 'fail', 'email_error' => 'Email is required and only valid email address accepted'));
		die();
}

if ($data['phoneno'] == '' || isDigits($data['phoneno'], 10, 10)) {
	echo json_encode(array('status' => 'fail', 'phoneno_error' => 'Mobile number is required and only valid 10 digits mobile number accepted'));
	die();
}

if ($data['whatsappno'] == '' || isDigits($data['whatsappno'], 10, 10)) {
	echo json_encode(array('status' => 'fail', 'whatsappno_error' => 'Mobile number is required and only valid 10 digits mobile number accepted'));
	die();
}


if ($data['address'] == '') {
	echo json_encode(array('status' => 'fail', 'address_error' => 'This field is required'));
	die();
}

if ($data['villageCity'] == '' || isValidateStringWithSpaces($data['villageCity'])) {
	echo json_encode(array('status' => 'fail', 'villageCity_error' => 'This field is required'));
	die();
}

if ($data['pincode'] == '' || isDigits($data['pincode'], 6, 6)) {
	echo json_encode(array('status' => 'fail', 'pincode_error' => 'Pincode is required and only valid 6 digits mobile number accepted'));
	die();
}

if ($data['state'] == '' || isValidateStringWithSpaces($data['state'])) {
	echo json_encode(array('status' => 'fail', 'state_error' => 'This field is required'));
	die();
}

if ($data['country'] == '' || isValidateStringWithSpaces($data['country'])) {
	echo json_encode(array('status' => 'fail', 'country_error' => 'This field is required'));
	die();
}

if ($data['ecperson1'] == '' || isValidateStringWithSpaces($data['ecperson1'])) {
	echo json_encode(array('status' => 'fail', 'ecperson1_error' => 'This field is required'));
	die();
}

if ($data['ecrelation1'] == '' || isValidateStringWithSpaces($data['ecrelation1'])) {
	echo json_encode(array('status' => 'fail', 'ecrelation1_error' => 'This field is required'));
	die();
}
if ($data['ecmobile1'] == '' || isDigits($data['ecmobile1'], 10, 10)) {
	echo json_encode(array('status' => 'fail', 'cpmobile1_error' => 'This field is required'));
	die();
}
if ($data['ecperson2'] == '' || isValidateStringWithSpaces($data['ecperson2'])) {
	echo json_encode(array('status' => 'fail', 'ecperson2_error' => 'This field is required'));
	die();
}

if ($data['ecrelation2'] == '' || isValidateStringWithSpaces($data['ecrelation2'])) {
	echo json_encode(array('status' => 'fail', 'ecrelation2_error' => 'This field is required'));
	die();
}
if ($data['ecmobile2'] == '' || isDigits($data['ecmobile2'], 10, 10)) {
	echo json_encode(array('status' => 'fail', 'cpmobile1_error' => 'This field is required'));
	die();
}

if ($data['transport_mode'] == '' || isValidateStringWithSpaces($data['transport_mode'])) {
	echo json_encode(array('status' => 'fail', 'transport_mode_error' => 'This field is required'));
	die();
}


if ($data['goption'] == '' || isValidateStringWithSpaces($data['goption'])) {
	echo json_encode(array('status' => 'fail', 'goption_error' => 'This field is required'));
	die();
}

if ($data['goption'] == 'parents') {

	// father's data validation
	if ($data['ffname'] == '' || isValidateStringWithSpaces($data['ffname'])) {
		echo json_encode(array('status' => 'fail', 'ffname_error' => 'Father First Name is required and only alphabet and space allowed'));
		die();
	}
	if ($data['flname'] == '' || isValidateStringWithSpaces($data['flname'])) {
		echo json_encode(array('status' => 'fail', 'flname_error' => 'Father Last Name is required and only alphabet and space allowed'));
		die();
	}

	if ($data['foccupation'] != '' && isValidateStringWithSpaces($data['foccupation'])) {
		echo json_encode(array('status' => 'fail', 'foccupation_error' => 'Occuation is required and only alphabet and space allowed'));
		die();
	}

	// if ($data['fincome'] == '' ) {
	// 	echo json_encode(array('status' => 'fail', 'fincome_error' => 'Income is required and only alphabet and space allowed'));
	// 	die();
	// }

	if ($data['femail'] == '' || isEmail($data['femail'])) {
		echo json_encode(array('status' => 'fail', 'femail_error' => 'Email is required and only valid email address accepted'));
		die();
	}
	if ($data['fmobile'] == '' || isDigits($data['fmobile'], 10, 10)) {
		echo json_encode(array('status' => 'fail', 'fmobile_error' => 'Mobile is required and only valid 10 digits mobile number accepted'));
		die();
	}

	if ($data['fanumber'] != '' && isValidAadhar($data['fanumber'])) {
		echo json_encode(array('status' => 'fail', 'fanumber_error' => 'This field is required'));
		die();
	}

	if ($data['fpnumber'] != '' && isValidPan($data['fpnumber'])) {
		echo json_encode(array('status' => 'fail', 'fpnumber_error' => 'This field is required'));
		die();
	}

	// mother's data validation
	if ($data['mfname'] == '' || isValidateStringWithSpaces($data['mfname'])) {
		echo json_encode(array('status' => 'fail', 'mfname_error' => 'Mother First Name is required and only alphabet and space allowed'));
		die();
	}
	if ($data['mlname'] == '' || isValidateStringWithSpaces($data['mlname'])) {
		echo json_encode(array('status' => 'fail', 'mlname_error' => 'Mother Last Name is required and only alphabet and space allowed'));
		die();
	}

	if ($data['moccupation'] != '' && isValidateStringWithSpaces($data['moccupation'])) {
		echo json_encode(array('status' => 'fail', 'moccupation_error' => 'Occuation is required and only alphabet and space allowed'));
		die();
	}

	if ($data['manumber'] != '' && isValidAadhar($data['manumber'])) {
		echo json_encode(array('status' => 'fail', 'manumber_error' => 'This field is required'));
		die();
	}
	if ($data['mpnumber'] != '' && isValidPan($data['mpnumber'])) {
		echo json_encode(array('status' => 'fail', 'mpnumber_error' => 'This field is required'));
		die();
	}

	// if ($data['mincome'] == '' ) {
	// 	echo json_encode(array('status' => 'fail', 'mincome_error' => 'Income is required and only alphabet and space allowed'));
	// 	die();
	// }

	/*
	if ($data['memail'] == '' || isEmail($data['memail'])) {
		echo json_encode(array('status' => 'fail', 'memail_error' => 'Email is required and only valid email address accepted'));
		die();
	}
	if ($data['mmobile'] == '' || isDigits($data['mmobile'], 10, 10)) {
		echo json_encode(array('status' => 'fail', 'mmobile_error' => 'Mobile is required and only valid 10 digits mobile number accepted'));
		die();
	}
	*/
}else{

	if ($data['gfname'] == '' || isValidateStringWithSpaces($data['gfname'])) {
		echo json_encode(array('status' => 'fail', 'gfname_error' => 'Guardian First Name is required and only alphabet and space allowed'));
		die();
	}

	if ($data['glname'] == '' || isValidateStringWithSpaces($data['glname'])) {
		echo json_encode(array('status' => 'fail', 'glname_error' => 'Guardian Last Name is required and only alphabet and space allowed'));
		die();
	}

	if ($data['grelation'] != '' && isValidateStringWithSpaces($data['grelation'])) {
		echo json_encode(array('status' => 'fail', 'grelation_error' => 'Relation is required and only alphabet and space allowed'));
		die();
	}

	if ($data['goccupation'] != '' && isValidateStringWithSpaces($data['goccupation'])) {
		echo json_encode(array('status' => 'fail', 'goccupation_error' => 'Occuation is required and only alphabet and space allowed'));
		die();
	}

	// if ($data['gincome'] == '' ) {
	// 	echo json_encode(array('status' => 'fail', 'gincome_error' => 'Income is required and only alphabet and space allowed'));
	// 	die();
	// }

	if ($data['gemail'] == '' || isEmail($data['gemail'])) {
		echo json_encode(array('status' => 'fail', 'gemail_error' => 'Email is required and only valid email address accepted'));
		die();
	}
	if ($data['gmobile'] == '' || isDigits($data['gmobile'], 10, 10)) {
		echo json_encode(array('status' => 'fail', 'gmobile_error' => 'Mobile is required and only valid 10 digits mobile number accepted'));
		die();
	}
}

if ($data['siblingoption'] == '' || isValidateStringWithSpaces($data['siblingoption'])) {
	echo json_encode(array('status' => 'fail', 'siblingoption_error' => 'This field is required'));
	die();
}


if (empty($_SESSION['captcha_code']) || strcasecmp($_SESSION['captcha_code'], $data['captcha']) != 0) {
	//invalid capcha
	echo json_encode(array('status' => 'fail', 'captchacode_error' => 'Proper matched Captcha is required'));
	die();
}

//==================================================
$sql_query = "SELECT * FROM admission WHERE sfname='" . $data['sfname'] . "' AND admission_sought='" . $data['sought'] . "'  AND dob='" . $data['dob'] . "'";
$result = mysqli_query($conn, $sql_query);

if (mysqli_num_rows($result) == 0) {


	$random_string= generateRandomString(10);
	$random_base64_string = base64_encode($random_string);


	// sql query for inserting data into database
	$sql_query = "INSERT INTO admission (`sfname`,`smname`,`slname`,`admission_sought`,`cur_school`,`cur_school_address`,`cur_class`,`dob`,`gender`,`category`,`mother_tongue`,`saadhar`,`blood_group`,`is_ph`,`ph_description`,`medical_history`,`medical_description`,`contact_email`,`contact_phone`,`contact_whatsapp`,`contact_address`,`contact_village_city`,`contact_pincode`,`contact_state`,`contact_country`,`emg_contact_name1`,`emg_contact_relation1`,`emg_contact_mobile1`,`emg_contact_name2`,`emg_contact_relation2`,`emg_contact_mobile2`,`pref_transport_mode`,`guardian_type`,`father_fname`,`father_mname`,`father_lname`,`father_quali`,`father_occu`,`father_organization`,`father_designation`,`father_income`,`father_email`,`father_mobile`,`father_aadhar`,`father_pan`,`mother_fname`,`mother_mname`,`mother_lname`,`mother_quali`,`mother_occu`,`mother_organization`,`mother_designation`,`mother_income`,`mother_email`,`mother_mobile`,`mother_aadhar`,`mother_pan`,`guardian_fname`,`guardian_mname`,`guardian_lname`,`guardian_relation`,`guardian_quali`,`guardian_occu`,`guardian_organization`,`guardian_designation`,`guardian_income`,`guardian_email`,`guardian_mobile`,`sibling`,`link_verify`,`photo`,`fee_status`)
		VALUES('" . $data['sfname'] . "','" . $data['smname'] . "','" . $data['slname'] . "','" . $data['sought'] . "','" . $data['cschool'] . "','" . $data['cschool'] . "','" . $data['cclass'] . "','" . $data['dob'] . "','" . $data['gender'] . "','" . $data['category'] . "','" . $data['smtongue'] . "','" . $data['sanumber'] . "','" . $data['bgroup'] . "','" . $data['dachild'] . "','" . $data['phandicap'] . "','" . $data['amhistory'] . "','" . $data['mhistory'] . "','" . $data['email'] . "','" . $data['phoneno'] . "','" . $data['whatsappno'] . "','" . $data['address'] . "','" . $data['villageCity'] . "','" . $data['pincode'] . "','" . $data['state'] . "','" . $data['country'] . "','" . $data['ecperson1'] . "','" . $data['ecrelation1'] . "','" . $data['ecmobile1'] . "','" . $data['ecperson2'] . "','" . $data['ecrelation2'] . "','" . $data['ecmobile2'] . "','" . $data['transport_mode'] . "','" . $data['goption'] . "','" . $data['ffname'] . "','" . $data['fmname'] . "','" . $data['flname'] . "','" . $data['fqualification'] . "','" . $data['foccupation'] . "','" . $data['forganisationname'] . "','" . $data['fdesignation'] . "','" . $data['fincome'] . "','" . $data['femail'] . "','" . $data['fmobile'] . "','" . $data['fanumber'] . "','" . $data['fpnumber'] . "','" . $data['mfname'] . "','" . $data['mmname'] . "','" . $data['mlname'] . "','" . $data['mqualification'] . "','" . $data['moccupation'] . "','" . $data['morganisationname'] . "','" . $data['mdesignation'] . "','" . $data['mincome'] . "','" . $data['memail'] . "','" . $data['mmobile'] . "','" . $data['manumber'] . "','" . $data['mpnumber'] . "','" . $data['gfname'] . "','" . $data['gmname'] . "','" . $data['glname'] . "','" . $data['grelation'] . "','" . $data['gqualification'] . "','" . $data['goccupation'] . "','" . $data['gorganisationname'] . "','" . $data['gdesignation'] . "','" . $data['gincome'] . "','" . $data['gemail'] . "','" . $data['gmobile'] . "','" . $data['siblingoption'] . "','". $random_string."','" . $data['filename'] . "','unpaid')";

	// sql query execution function
	$query_status = mysqli_query($conn, $sql_query);

	if ($query_status) {

		$insertId = mysqli_insert_id($conn);
		$reg_number = "2024-".str_pad($insertId, 5, '0', STR_PAD_LEFT);
		$sql = "UPDATE admission SET reg_no='".$reg_number."' WHERE id=".$insertId;
		$status = mysqli_query($conn, $sql);

		if(strtoupper($data['siblingoption'])=='YES'){

			$sql_query = "INSERT INTO admission_sibling (`application_id`,`sibling_type`,`name`,`school`,`class`,`age`) VALUES('" . $insertId . "','other','" . $data['sibling_other_name1'] . "','" . $data['sibling_other_school1'] . "','" . $data['sibling_other_class1'] . "','" . $data['sibling_other_age1'] . "')";

			if ($data['sibling_other_name2'] != '') {
				$sql_query = "INSERT INTO admission_sibling (`application_id`,`sibling_type`,`name`,`school`,`class`,`age`) VALUES('" . $insertId . "','other','" . $data['sibling_other_name1'] . "','" . $data['sibling_other_school1'] . "','" . $data['sibling_other_class1'] . "','" . $data['sibling_other_age1'] . "'),('" . $insertId . "','other','" . $data['sibling_other_name2'] . "','" . $data['sibling_other_school2'] . "','" . $data['sibling_other_class2'] . "','" . $data['sibling_other_age2'] . "')";
			}

			$query_status = mysqli_query($conn, $sql_query);
		}
		if($query_status){

			$pdf_form_link = "https://snsvm-malsisar.org/administration/admission_registration/download_form/$random_base64_string";
			$payment_link = "https://snsvm-malsisar.org/administration/admission_fee/payment_link/$random_base64_string";
			
			if ($data['goption'] == "parents") {
				//$applicant_email = $data['femail'];
				$parent_name = $data['ffname'];
			} else {
				//$applicant_email = $data['gemail'];
				$parent_name = $data['guardian'];
			}
			$applicant_email = $data['email'];
			$department_email = "admissions@snsvm-malsisar.org";

			//$department_email = "angshu@voyagerman.com";


			$applicant_mail_subject = "SNSVM, Malsisar Online Admission";
			$applicant_mail_body = "<p>
 				<span style='font-family:Tahoma,Geneva,sans-serif;font-size:12px;font-style:normal;line-height:14px;display:inline;'>
					Dear Sir/ Ma'am,<br><br>
					We are in receipt of the online registration form in respect of your 
					ward  " . $data['sfname'] ." for admission to " . $data['sought'] .".<br> 
					Please find below the links for Registration fee payment and downloading of your filled-out form.<br>
					Download form <a href='".$pdf_form_link."'>Link</a><br>
					Registration fee payment <a href='" . $payment_link . "'>Link</a><br><br>

					Please note that on approval of this online registration, you will receive a mail containing the
					admit card for a physical interview. You will get the scheduled date and time for the interview
					in that Admit Card.<br><br>
				</span>
 				</p>";
			
			$status = sendMail($applicant_email, $applicant_mail_subject, $applicant_mail_body);


			$department_email_subject = "A new online application received form SNSVM, Malsisar website";
			$department_email_body = "<p>
			<span style='font-family:Tahoma,Geneva,sans-serif;font-size:12px;font-style:normal;line-height:14px;display:inline;'>
 									A new application has been registered with following details:<br><br>
 									Applicants Name:&nbsp;&nbsp;&nbsp;" . $data['sfname'] . "<br>
									Email:&nbsp;&nbsp;&nbsp;" . $data['email'] . "<br>
									Mobile:&nbsp;&nbsp;&nbsp;" . $data['phoneno'] . "<br>
 									Admission Sought in:&nbsp;&nbsp;&nbsp;" . $data['sought'] . "<br>
									Download form <a href=" . $pdf_form_link . ">Link</a><br><br>
								<span>
 								</p>";
			
			$status = sendMail($department_email, $department_email_subject, $department_email_body);


			$message = "Thank you for showing your interest in SNSVM, Malsisar. We have sent an email with the payment link on your registered mail ID . You are requested to pay the registration amount using that link. After the successful transaction, a suitable date and time slot for the assessment of your ward will be scheduled. You are requested to check your mail ID regularly. For any queries, feel free to connect with us at (+91) 92578-48525.";

		}else{
			$message = "Error !, system error, please try some time later.";
		}
		
	} else {
		$message = "Error !, system error, please try some time later..";
	}
} else {
	$message = "Thank you, You are already registered with us. We have already sent an email with the payment link on your registered mail ID . You are requested to pay the registration amount using that link. After the successful transaction, a suitable date and time slot for the assessment of your ward will be scheduled. You are requested to check your mail ID regularly. For any queries, feel free to connect with us at (+91) 92578-48525.";
}
//===================================================

echo json_encode(array("status"=>"success","message"=> $message));



function xss_clean($data){
	$data = trim($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>