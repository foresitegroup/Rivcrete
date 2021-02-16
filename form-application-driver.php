<?php
include_once "inc/fintoozler.php";

$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".RECAPTCHA_SECRET_KEY."&response=".$_POST['g-recaptcha-response']);
$responsekeys = json_decode($response);

if ($responsekeys->success) {
  if (
    $_POST['firstname'] != "" && $_POST['lastname'] != "" && $_POST['address'] != "" && $_POST['city'] != ""
    && $_POST['state'] != "" && $_POST['zip'] != "" && $_POST['phone'] != "" && $_POST['email'] != ""
  ) {
    $Subject = "Employment Application (Driver)";
    $SendTo = "contactus@rivcrete.com";
    $Headers = "From: Employment Application Form <donotreply@rivcrete.com>\r\n";
    $Headers .= "Reply-To: " . $_POST['email'] . "\r\n";
    $Headers .= "Bcc: foresitegroupllc@gmail.com\r\n";

    $Message = $_POST['firstname'];
    if ($_POST['middlename'] != "") $Message .= " ".$_POST['middlename'];
    $Message .= " ".$_POST['lastname']."\n";
    if ($_POST['maidenname'] != "") $Message .= "Maiden Name: ".$_POST['maidenname']."\n";
    $Message .= "\n";

    $Message .= $_POST['address']."\n";
    $Message .= $_POST['city'].", ".$_POST['state']." ".$_POST['zip']."\n";
    if ($_POST['howlong'] != "") $Message .= "How Long At This Address? ".$_POST['howlong']."\n";
    $Message .= "\n";
    
    $Message .= $_POST['phone'] . "\n";
    $Message .= $_POST['email'] . "\n";
    if ($_POST['dob'] != "") $Message .= "Date of Birth: ".$_POST['dob']."\n";
    $Message .= "\n";
    
    // BEGIN Residency section
    $res = "no";
    foreach($_POST as $key => $value) if (strpos($key, "prev_") === 0) if ($_POST[$key] != "") $res = "yes";
    if ($res == "yes") $Message .= "PREVIOUS THREE YEARS RESIDENCY\n";
    
    if ($_POST['prev_address1'] != "") $Message .= $_POST['prev_address1']."\n";
    if ($_POST['prev_city1'] != "") $Message .= $_POST['prev_city1'];
    if ($_POST['prev_city1'] != "" && $_POST['prev_state1'] != "") $Message .= ", ";
    if ($_POST['prev_state1'] != "") $Message .= $_POST['prev_state1'];
    if (($_POST['prev_city1'] != "" || $_POST['prev_state1'] != "") && $_POST['prev_zip1']) $Message .= " ";
    if ($_POST['prev_zip1'] != "") $Message .= $_POST['prev_zip1'];
    if ($_POST['prev_city1'] != "" || $_POST['prev_state1'] != "" || $_POST['prev_zip1']) $Message .= "\n";
    if ($_POST['prev_years1'] != "") $Message .= "# Years: ".$_POST['prev_years1']."\n";
    if ($_POST['prev_address1'] != "" || $_POST['prev_city1'] != "" || $_POST['prev_state1'] != "" || $_POST['prev_zip1'] || $_POST['prev_years1'] != "") $Message .= "\n";

    if ($_POST['prev_address2'] != "") $Message .= $_POST['prev_address2']."\n";
    if ($_POST['prev_city2'] != "") $Message .= $_POST['prev_city2'];
    if ($_POST['prev_city2'] != "" && $_POST['prev_state2'] != "") $Message .= ", ";
    if ($_POST['prev_state2'] != "") $Message .= $_POST['prev_state2'];
    if (($_POST['prev_city2'] != "" || $_POST['prev_state2'] != "") && $_POST['prev_zip2']) $Message .= " ";
    if ($_POST['prev_zip2'] != "") $Message .= $_POST['prev_zip2'];
    if ($_POST['prev_city2'] != "" || $_POST['prev_state2'] != "" || $_POST['prev_zip2']) $Message .= "\n";
    if ($_POST['prev_years2'] != "") $Message .= "# Years: ".$_POST['prev_years2']."\n";
    if ($_POST['prev_address2'] != "" || $_POST['prev_city2'] != "" || $_POST['prev_state2'] != "" || $_POST['prev_zip2'] || $_POST['prev_years2'] != "") $Message .= "\n";

    if ($_POST['prev_address3'] != "") $Message .= $_POST['prev_address3']."\n";
    if ($_POST['prev_city3'] != "") $Message .= $_POST['prev_city3'];
    if ($_POST['prev_city3'] != "" && $_POST['prev_state3'] != "") $Message .= ", ";
    if ($_POST['prev_state3'] != "") $Message .= $_POST['prev_state3'];
    if (($_POST['prev_city3'] != "" || $_POST['prev_state3'] != "") && $_POST['prev_zip3']) $Message .= " ";
    if ($_POST['prev_zip3'] != "") $Message .= $_POST['prev_zip3'];
    if ($_POST['prev_city3'] != "" || $_POST['prev_state3'] != "" || $_POST['prev_zip3']) $Message .= "\n";
    if ($_POST['prev_years3'] != "") $Message .= "# Years: ".$_POST['prev_years3']."\n";
    if ($_POST['prev_address3'] != "" || $_POST['prev_city3'] != "" || $_POST['prev_state3'] != "" || $_POST['prev_zip3'] || $_POST['prev_years3'] != "") $Message .= "\n";

    if ($_POST['prev_residency_additional'] != "") $Message .= "Additional space if needed\n".$_POST['prev_residency_additional']."\n";

    if ($res == "yes") $Message .= "\n";
    // END Residency section

    // BEGIN License section
    $lic = "no";
    foreach($_POST as $key => $value) if (strpos($key, "lic_") === 0) if ($_POST[$key] != "") $lic = "yes";
    if ($lic == "yes") $Message .= "LICENSE INFORMATION\n";
    if ($_POST['lic_state'] != "") $Message .= "State: ".$_POST['lic_state']."\n";
    if ($_POST['lic_number'] != "") $Message .= "License Number: ".$_POST['lic_number']."\n";
    if ($_POST['lic_type'] != "") $Message .= "Type: ".$_POST['lic_type']."\n";
    if ($_POST['lic_expiration'] != "") $Message .= "Expiration Date: ".$_POST['lic_expiration']."\n";
    if ($lic == "yes") $Message .= "\n\n";
    // END License section

    // BEGIN Driving Experience section
    $driving = "no";
    foreach($_POST as $key => $value) if (strpos($key, "driving_") === 0) if ($_POST[$key] != "") $driving = "yes";
    if ($driving == "yes") $Message .= "DRIVING EXPERIENCE\n";

    if ($_POST['driving_type_straight'] != "" || $_POST['driving_dates_straight'] != "" || $_POST['driving_miles_straight']) $Message .= "Straight Truck\n";
    if ($_POST['driving_type_straight'] != "") $Message .= "Type of Equipment: ".$_POST['driving_type_straight']."\n";
    if ($_POST['driving_dates_straight'] != "") $Message .= "Dates From / To: ".$_POST['driving_dates_straight']."\n";
    if ($_POST['driving_miles_straight'] != "") $Message .= "Approx # Miles Total: ".$_POST['driving_miles_straight']."\n";
    if ($_POST['driving_type_straight'] != "" || $_POST['driving_dates_straight'] != "" || $_POST['driving_miles_straight']) $Message .= "\n";

    if ($_POST['driving_type_semi'] != "" || $_POST['driving_dates_semi'] != "" || $_POST['driving_miles_semi']) $Message .= "Tractor and Semi-Trailer\n";
    if ($_POST['driving_type_semi'] != "") $Message .= "Type of Equipment: ".$_POST['driving_type_semi']."\n";
    if ($_POST['driving_dates_semi'] != "") $Message .= "Dates From / To: ".$_POST['driving_dates_semi']."\n";
    if ($_POST['driving_miles_semi'] != "") $Message .= "Approx # Miles Total: ".$_POST['driving_miles_semi']."\n";
    if ($_POST['driving_type_semi'] != "" || $_POST['driving_dates_semi'] != "" || $_POST['driving_miles_semi']) $Message .= "\n";

    if ($_POST['driving_type_two'] != "" || $_POST['driving_dates_two'] != "" || $_POST['driving_miles_two']) $Message .= "Tractor - Two Trailers\n";
    if ($_POST['driving_type_two'] != "") $Message .= "Type of Equipment: ".$_POST['driving_type_two']."\n";
    if ($_POST['driving_dates_two'] != "") $Message .= "Dates From / To: ".$_POST['driving_dates_two']."\n";
    if ($_POST['driving_miles_two'] != "") $Message .= "Approx # Miles Total: ".$_POST['driving_miles_two']."\n";
    if ($_POST['driving_type_two'] != "" || $_POST['driving_dates_two'] != "" || $_POST['driving_miles_two']) $Message .= "\n";

    if ($_POST['driving_type_other'] != "" || $_POST['driving_dates_other'] != "" || $_POST['driving_miles_other']) $Message .= "Other\n";
    if ($_POST['driving_type_other'] != "") $Message .= "Type of Equipment: ".$_POST['driving_type_other']."\n";
    if ($_POST['driving_dates_other'] != "") $Message .= "Dates From / To: ".$_POST['driving_dates_other']."\n";
    if ($_POST['driving_miles_other'] != "") $Message .= "Approx # Miles Total: ".$_POST['driving_miles_other']."\n";
    if ($_POST['driving_type_other'] != "" || $_POST['driving_dates_other'] != "" || $_POST['driving_miles_other']) $Message .= "\n";

    if ($driving == "yes") $Message .= "\n";
    // END Driving Experience section

    // BEGIN Accident section
    $accident = "no";
    foreach($_POST as $key => $value) if (strpos($key, "accident_") === 0) if ($_POST[$key] != "") $accident = "yes";
    if ($accident == "yes") $Message .= "ACCIDENT RECORD FOR PAST 3 YEARS OR MORE\n";

    if ($_POST['accident_dates1'] != "") $Message .= "Dates: ".$_POST['accident_dates1']."\n";
    if ($_POST['accident_nature1'] != "") $Message .= "Nature of Accident: ".$_POST['accident_nature1']."\n";
    if ($_POST['accident_fatalities1'] != "") $Message .= "# Fatalities: ".$_POST['accident_fatalities1']."\n";
    if ($_POST['accident_injuries1'] != "") $Message .= "# Injuries: ".$_POST['accident_injuries1']."\n";
    if ($_POST['accident_chemical1'] != "") $Message .= "Chemical Spills: ".$_POST['accident_chemical1']."\n";
    if ($_POST['accident_dates1'] != "" || $_POST['accident_nature1'] != "" || $_POST['accident_fatalities1'] != "" || $_POST['accident_injuries1'] || $_POST['accident_chemical1'] != "") $Message .= "\n";

    if ($_POST['accident_dates2'] != "") $Message .= "Dates: ".$_POST['accident_dates2']."\n";
    if ($_POST['accident_nature2'] != "") $Message .= "Nature of Accident: ".$_POST['accident_nature2']."\n";
    if ($_POST['accident_fatalities2'] != "") $Message .= "# Fatalities: ".$_POST['accident_fatalities2']."\n";
    if ($_POST['accident_injuries2'] != "") $Message .= "# Injuries: ".$_POST['accident_injuries2']."\n";
    if ($_POST['accident_chemical2'] != "") $Message .= "Chemical Spills: ".$_POST['accident_chemical2']."\n";
    if ($_POST['accident_dates2'] != "" || $_POST['accident_nature2'] != "" || $_POST['accident_fatalities2'] != "" || $_POST['accident_injuries2'] || $_POST['accident_chemical2'] != "") $Message .= "\n";

    if ($_POST['accident_dates3'] != "") $Message .= "Dates: ".$_POST['accident_dates3']."\n";
    if ($_POST['accident_nature3'] != "") $Message .= "Nature of Accident: ".$_POST['accident_nature3']."\n";
    if ($_POST['accident_fatalities3'] != "") $Message .= "# Fatalities: ".$_POST['accident_fatalities3']."\n";
    if ($_POST['accident_injuries3'] != "") $Message .= "# Injuries: ".$_POST['accident_injuries3']."\n";
    if ($_POST['accident_chemical3'] != "") $Message .= "Chemical Spills: ".$_POST['accident_chemical3']."\n";
    if ($_POST['accident_dates3'] != "" || $_POST['accident_nature3'] != "" || $_POST['accident_fatalities3'] != "" || $_POST['accident_injuries3'] || $_POST['accident_chemical3'] != "") $Message .= "\n";

    if ($_POST['accident_additional'] != "") $Message .= "Additional space if needed\n".$_POST['accident_additional']."\n";

    if ($accident == "yes") $Message .= "\n";
    // END Accident section

    // BEGIN Traffic Convictions section
    $traffic = "no";
    foreach($_POST as $key => $value) if (strpos($key, "traffic_") === 0) if ($_POST[$key] != "") $traffic = "yes";
    if ($traffic == "yes") $Message .= "TRAFFIC CONVICTIONS AND FORFEITURES FOR THE PAST 3 YEARS\n";

    if ($_POST['traffic_date1'] != "") $Message .= "Date Convicted: ".$_POST['traffic_date1']."\n";
    if ($_POST['traffic_violation1'] != "") $Message .= "Violation: ".$_POST['traffic_violation1']."\n";
    if ($_POST['traffic_state1'] != "") $Message .= "Violation Location: ".$_POST['traffic_state1']."\n";
    if ($_POST['traffic_penalty1'] != "") $Message .= "Penalty: ".$_POST['traffic_penalty1']."\n";
    if ($_POST['traffic_date1'] != "" || $_POST['traffic_violation1'] != "" || $_POST['traffic_state1'] != "" || $_POST['traffic_penalty1']) $Message .= "\n";

    if ($_POST['traffic_date2'] != "") $Message .= "Date Convicted: ".$_POST['traffic_date2']."\n";
    if ($_POST['traffic_violation2'] != "") $Message .= "Violation: ".$_POST['traffic_violation2']."\n";
    if ($_POST['traffic_state2'] != "") $Message .= "Violation Location: ".$_POST['traffic_state2']."\n";
    if ($_POST['traffic_penalty2'] != "") $Message .= "Penalty: ".$_POST['traffic_penalty2']."\n";
    if ($_POST['traffic_date2'] != "" || $_POST['traffic_violation2'] != "" || $_POST['traffic_state2'] != "" || $_POST['traffic_penalty2']) $Message .= "\n";

    if ($_POST['traffic_date3'] != "") $Message .= "Date Convicted: ".$_POST['traffic_date3']."\n";
    if ($_POST['traffic_violation3'] != "") $Message .= "Violation: ".$_POST['traffic_violation3']."\n";
    if ($_POST['traffic_state3'] != "") $Message .= "Violation Location: ".$_POST['traffic_state3']."\n";
    if ($_POST['traffic_penalty3'] != "") $Message .= "Penalty: ".$_POST['traffic_penalty3']."\n";
    if ($_POST['traffic_date3'] != "" || $_POST['traffic_violation3'] != "" || $_POST['traffic_state3'] != "" || $_POST['traffic_penalty3']) $Message .= "\n";

    if ($_POST['traffic_additional'] != "") $Message .= "Additional space if needed\n".$_POST['traffic_additional']."\n";

    if ($traffic == "yes") $Message .= "\n";
    // END Traffic Convictions section

    if ($_POST['denied'] != "") $Message .= "Have you ever been denied a license, permit or privilege to operate a motor vehicle? ".$_POST['denied']."\n";
    if ($_POST['denied_explain'] != "") $Message .= "If yes, explain: ".$_POST['denied_explain']."\n";
    if ($_POST['denied'] != "" || $_POST['denied_explain'] != "") $Message .= "\n";

    if ($_POST['revoked'] != "") $Message .= "Has any license, permit or privilege ever been suspended or revoked? ".$_POST['revoked']."\n";
    if ($_POST['revoked_explain'] != "") $Message .= "If yes, explain: ".$_POST['revoked_explain']."\n";
    if ($_POST['revoked'] != "" || $_POST['revoked_explain'] != "") $Message .= "\n";

    // BEGIN Employment Record section
    $employer = "no";
    foreach($_POST as $key => $value) if (strpos($key, "employer_") === 0) if ($_POST[$key] != "") $employer = "yes";
    if ($employer == "yes") $Message .= "EMPLOYMENT RECORD\n";

    if ($_POST['employer_name1'] != "") $Message .= "Last Employer Name: ".$_POST['employer_name1']."\n";
    if ($_POST['employer_phone1'] != "") $Message .= "Phone: ".$_POST['employer_phone1']."\n";
    if ($_POST['employer_address1'] != "") $Message .= $_POST['employer_address1']."\n";
    if ($_POST['employer_city1'] != "") $Message .= $_POST['employer_city1'];
    if ($_POST['employer_city1'] != "" && $_POST['employer_state1'] != "") $Message .= ", ";
    if ($_POST['employer_state1'] != "") $Message .= $_POST['employer_state1'];
    if (($_POST['employer_city1'] != "" || $_POST['employer_state1'] != "") && $_POST['employer_zip1']) $Message .= " ";
    if ($_POST['employer_zip1'] != "") $Message .= $_POST['employer_zip1'];
    if ($_POST['employer_city1'] != "" || $_POST['employer_state1'] != "" || $_POST['employer_zip1']) $Message .= "\n";
    if ($_POST['employer_leaving1'] != "") $Message .= "Reasons for Leaving: ".$_POST['employer_leaving1']."\n";
    if ($_POST['employer_gaps1'] != "") $Message .= "Any gaps in employment and/or unemployment must be explained.\n".$_POST['employer_gaps1']."\n";
    if ($_POST['employer_fmcsr1'] != "") $Message .= "Were you subject to the Federal Motor Carrier Safety Regulations (FMCSRs) while employed by the previous employer? ".$_POST['employer_fmcsr1']."\n";
    if ($_POST['employer_cfr1'] != "") $Message .= "Was the previous job position designated as a safety sensitive function in any DOT regulated mode, subject to alcohol and controlled substances testing requirements as required by 49 CFR Part 40? ".$_POST['employer_cfr1']."\n";
    $Message .= "\n";

    if ($_POST['employer_name2'] != "") $Message .= "Second Last Employer Name: ".$_POST['employer_name2']."\n";
    if ($_POST['employer_phone2'] != "") $Message .= "Phone: ".$_POST['employer_phone2']."\n";
    if ($_POST['employer_address2'] != "") $Message .= $_POST['employer_address2']."\n";
    if ($_POST['employer_city2'] != "") $Message .= $_POST['employer_city2'];
    if ($_POST['employer_city2'] != "" && $_POST['employer_state2'] != "") $Message .= ", ";
    if ($_POST['employer_state2'] != "") $Message .= $_POST['employer_state2'];
    if (($_POST['employer_city2'] != "" || $_POST['employer_state2'] != "") && $_POST['employer_zip2']) $Message .= " ";
    if ($_POST['employer_zip2'] != "") $Message .= $_POST['employer_zip2'];
    if ($_POST['employer_city2'] != "" || $_POST['employer_state2'] != "" || $_POST['employer_zip2']) $Message .= "\n";
    if ($_POST['employer_leaving2'] != "") $Message .= "Reasons for Leaving: ".$_POST['employer_leaving2']."\n";
    if ($_POST['employer_gaps2'] != "") $Message .= "Any gaps in employment and/or unemployment must be explained.\n".$_POST['employer_gaps2']."\n";
    if ($_POST['employer_fmcsr2'] != "") $Message .= "Were you subject to the Federal Motor Carrier Safety Regulations (FMCSRs) while employed by the previous employer? ".$_POST['employer_fmcsr2']."\n";
    if ($_POST['employer_cfr2'] != "") $Message .= "Was the previous job position designated as a safety sensitive function in any DOT regulated mode, subject to alcohol and controlled substances testing requirements as required by 49 CFR Part 40? ".$_POST['employer_cfr2']."\n";
    $Message .= "\n";

    if ($_POST['employer_name3'] != "") $Message .= "Third Last Employer Name: ".$_POST['employer_name3']."\n";
    if ($_POST['employer_phone3'] != "") $Message .= "Phone: ".$_POST['employer_phone3']."\n";
    if ($_POST['employer_address3'] != "") $Message .= $_POST['employer_address3']."\n";
    if ($_POST['employer_city3'] != "") $Message .= $_POST['employer_city3'];
    if ($_POST['employer_city3'] != "" && $_POST['employer_state3'] != "") $Message .= ", ";
    if ($_POST['employer_state3'] != "") $Message .= $_POST['employer_state3'];
    if (($_POST['employer_city3'] != "" || $_POST['employer_state3'] != "") && $_POST['employer_zip3']) $Message .= " ";
    if ($_POST['employer_zip3'] != "") $Message .= $_POST['employer_zip3'];
    if ($_POST['employer_city3'] != "" || $_POST['employer_state3'] != "" || $_POST['employer_zip3']) $Message .= "\n";
    if ($_POST['employer_leaving3'] != "") $Message .= "Reasons for Leaving: ".$_POST['employer_leaving3']."\n";
    if ($_POST['employer_gaps3'] != "") $Message .= "Any gaps in employment and/or unemployment must be explained.\n".$_POST['employer_gaps3']."\n";
    if ($_POST['employer_fmcsr3'] != "") $Message .= "Were you subject to the Federal Motor Carrier Safety Regulations (FMCSRs) while employed by the previous employer? ".$_POST['employer_fmcsr3']."\n";
    if ($_POST['employer_cfr3'] != "") $Message .= "Was the previous job position designated as a safety sensitive function in any DOT regulated mode, subject to alcohol and controlled substances testing requirements as required by 49 CFR Part 40? ".$_POST['employer_cfr3']."\n";
    $Message .= "\n";

    if ($_POST['employer_additional'] != "") $Message .= "Additional space if needed\n".$_POST['employer_additional']."\n";

    if ($employer == "yes") $Message .= "\n";
    // END Employment Record section

    if ($_POST['authorization'] != "") $Message .= $_POST['authorization']."\n\n";

    if ($_POST['certify'] != "") $Message .= $_POST['certify']."\n\n";

    $Message = stripslashes($Message);

    mail($SendTo, $Subject, $Message, $Headers);

    $feedback = "Thank you for your application. We will review it as soon as possible.";
  } else {
    $feedback = "Some required information is missing! Please go back and make sure all required fields are filled.";
  }

  echo $feedback;
}
?>