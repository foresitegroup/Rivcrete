<?php
$PageTitle = "Employment Application";
include "header.php";
include_once "inc/fintoozler.php";
?>

<div class="page-header noimage">
  <div class="site-width">
    <div class="text">
      <h1>Employment Application</h1>
    </div>

    <div class="image"></div>
  </div>
</div>

<form action="form-application.php" method="POST" id="application" novalidate>
  <div class="site-width">

    <h4>Personal Information</h4>
    <div class="four-col">
      <input type="text" name="firstname" placeholder="First Name" required>

      <input type="text" name="middlename" placeholder="Middle Name">

      <input type="text" name="maidenname" placeholder="Maiden Name (if any)">

      <input type="text" name="lastname" placeholder="Last Name" required>
    </div>

    <div class="two-col">
      <input type="text" name="address" placeholder="Address" required>

      <input type="text" name="city" placeholder="City" required>
    </div>

    <div class="three-col">
      <input type="text" name="state" placeholder="State" required>

      <input type="text" name="zip" placeholder="Zip Code" required>

      <input type="text" name="howlong" placeholder="How Long At This Address?">
    </div>

    <div class="two-col">
      <input type="text" name="dob" placeholder="Date of Birth">
      <input type="text" name="ssn" placeholder="Social Security Number">

      <input type="tel" name="phone" placeholder="Phone Number" required>
      <input type="email" name="email" placeholder="Email Address" required>
    </div>

    <h4>Previous Three Years Residency</h4>
    <div class="five-col">
      <input type="text" name="prev_address1" placeholder="Address">
      <input type="text" name="prev_city1" placeholder="City">
      <input type="text" name="prev_state1" placeholder="State">
      <input type="text" name="prev_zip1" placeholder="Zip Code">
      <input type="text" name="prev_years1" placeholder="# Years">

      <input type="text" name="prev_address2" placeholder="Address">
      <input type="text" name="prev_city2" placeholder="City">
      <input type="text" name="prev_state2" placeholder="State">
      <input type="text" name="prev_zip2" placeholder="Zip Code">
      <input type="text" name="prev_years2" placeholder="# Years">

      <input type="text" name="prev_address3" placeholder="Address">
      <input type="text" name="prev_city3" placeholder="City">
      <input type="text" name="prev_state3" placeholder="State">
      <input type="text" name="prev_zip3" placeholder="Zip Code">
      <input type="text" name="prev_years3" placeholder="# Years">
    </div>

    <textarea name="prev_residency_additional" placeholder="Additional space if needed"></textarea>

    <h4>License Information</h4>
    Section 383.21 FMCSR states "No person who operates a commercial motor vehicle shall at any time have more than one driver's license". I certify that I do not have more than one motor vehicle license, the information for which is listed below.
    <div class="four-col">
      <input type="text" name="lic_state" placeholder="State">

      <input type="text" name="lic_number" placeholder="License Number">

      <input type="text" name="lic_type" placeholder="Type">

      <input type="text" name="lic_expiration" placeholder="Expiration Date">
    </div>

    <h4>Driving Experience</h4>
    <div class="four-col">
      <div class="label">Straight Truck</div>
      <input type="text" name="driving_type_straight" placeholder="Type of Equipment">
      <input type="text" name="driving_dates_straight" placeholder="Dates From / To">
      <input type="text" name="driving_miles_straight" placeholder="Approx # Miles Total">

      <div class="label">Tractor and Semi-Trailer</div>
      <input type="text" name="driving_type_semi" placeholder="Type of Equipment">
      <input type="text" name="driving_dates_semi" placeholder="Dates From / To">
      <input type="text" name="driving_miles_semi" placeholder="Approx # Miles Total">

      <div class="label">Tractor - Two Trailers</div>
      <input type="text" name="driving_type_two" placeholder="Type of Equipment">
      <input type="text" name="driving_dates_two" placeholder="Dates From / To">
      <input type="text" name="driving_miles_two" placeholder="Approx # Miles Total">

      <div class="label">Other</div>
      <input type="text" name="driving_type_other" placeholder="Type of Equipment">
      <input type="text" name="driving_dates_other" placeholder="Dates From / To">
      <input type="text" name="driving_miles_other" placeholder="Approx # Miles Total">
    </div>

    <h4>Accident Record for Past 3 Years or More</h4>
    <div class="five-col">
      <input type="text" name="accident_dates1" placeholder="Dates">
      <input type="text" name="accident_nature1" placeholder="Nature of Accident">
      <input type="text" name="accident_fatalities1" placeholder="# Fatalities">
      <input type="text" name="accident_injuries1" placeholder="# Injuries">
      <div class="radio">
        <div>Chemical Spills</div>
        <input type="radio" name="accident_chemical1" value="Yes" id="ac1y">
        <label for="ac1y">Yes</label>
        <input type="radio" name="accident_chemical1" value="No" id="ac1n">
        <label for="ac1n">No</label>
      </div>

      <input type="text" name="accident_dates2" placeholder="Dates">
      <input type="text" name="accident_nature2" placeholder="Nature of Accident">
      <input type="text" name="accident_fatalities2" placeholder="# Fatalities">
      <input type="text" name="accident_injuries2" placeholder="# Injuries">
      <div class="radio">
        <div>Chemical Spills</div>
        <input type="radio" name="accident_chemical2" value="Yes" id="ac2y">
        <label for="ac2y">Yes</label>
        <input type="radio" name="accident_chemical2" value="No" id="ac2n">
        <label for="ac2n">No</label>
      </div>

      <input type="text" name="accident_dates3" placeholder="Dates">
      <input type="text" name="accident_nature3" placeholder="Nature of Accident">
      <input type="text" name="accident_fatalities3" placeholder="# Fatalities">
      <input type="text" name="accident_injuries3" placeholder="# Injuries">
      <div class="radio">
        <div>Chemical Spills</div>
        <input type="radio" name="accident_chemical3" value="Yes" id="ac3y">
        <label for="ac3y">Yes</label>
        <input type="radio" name="accident_chemical3" value="No" id="ac3n">
        <label for="ac3n">No</label>
      </div>
    </div>

    <textarea name="accident_additional" placeholder="Additional space if needed"></textarea>

    <h4>Traffic Convictions and Forfeitures for the Past 3 Years (Other Than Parking Violations)</h4>
    <div class="four-col">
      <input type="text" name="traffic_date1" placeholder="Date Convicted (MM/YY)">
      <input type="text" name="traffic_violation1" placeholder="Violation">
      <input type="text" name="traffic_state1" placeholder="Violation Location (State)">
      <input type="text" name="traffic_penalty1" placeholder="Penalty">

      <input type="text" name="traffic_date2" placeholder="Date Convicted (MM/YY)">
      <input type="text" name="traffic_violation2" placeholder="Violation">
      <input type="text" name="traffic_state2" placeholder="Violation Location (State)">
      <input type="text" name="traffic_penalty2" placeholder="Penalty">

      <input type="text" name="traffic_date3" placeholder="Date Convicted (MM/YY)">
      <input type="text" name="traffic_violation3" placeholder="Violation">
      <input type="text" name="traffic_state3" placeholder="Violation Location (State)">
      <input type="text" name="traffic_penalty3" placeholder="Penalty">
    </div>

    <textarea name="traffic_additional" placeholder="Additional space if needed"></textarea>

    <div class="radio radio-inline">
      Have you ever been denied a license, permit or privilege to operate a motor vehicle?
      <input type="radio" name="denied" value="Yes" id="denied_yes">
      <label for="denied_yes">Yes</label>
      <input type="radio" name="denied" value="No" id="denied_no">
      <label for="denied_no">No</label>
    </div>

    <textarea name="denied_explain" placeholder="If yes, explain"></textarea>

    <div class="radio radio-inline">
      Has any license, permit or privilege ever been suspended or revoked?
      <input type="radio" name="revoked" value="Yes" id="revoked_yes">
      <label for="revoked_yes">Yes</label>
      <input type="radio" name="revoked" value="No" id="revoked_no">
      <label for="revoked_no">No</label>
    </div>

    <textarea name="revoked_explain" placeholder="If yes, explain"></textarea>

    <h4>Employment Record</h4>
    Applicants that desire to drive in intrastate/interstate commerce must provide the following information on all employers during the previous three years. You must give the same information for all employers you have driven a commercial motor vehicle for the seven years prior to the initial three years (total of ten years employment record).<br>
    <br>

    <strong>Must list the complete mailing address: street number and name, city, state and zip code.</strong><br>
    <br>

    <div class="two-col">
      <input type="text" name="employer_name1" placeholder="Last Employer Name">

      <input type="tel" name="employer_phone1" placeholder="Phone">
    </div>

    <div class="four-col">
      <input type="text" name="employer_address1" placeholder="Address">
      <input type="text" name="employer_city1" placeholder="City">
      <input type="text" name="employer_state1" placeholder="State">
      <input type="text" name="employer_zip1" placeholder="Zip Code">

      <input type="text" name="employer_position1" placeholder="Position Held">
      <input type="text" name="employer_from1" placeholder="From">
      <input type="text" name="employer_top1" placeholder="To">
      <input type="text" name="employer_salary1" placeholder="Salary">
    </div>

    <input type="text" name="employer_leaving1" placeholder="Reasons for Leaving">

    <textarea name="employer_gaps1" placeholder="Any gaps in employment and/or unemployment must be explained. Include dates (month/year) and reason."></textarea>

    <div class="radio radio-inline">
      Were you subject to the Federal Motor Carrier Safety Regulations (FMCSRs) while employed by the previous employer?
      <input type="radio" name="employer_fmcsr1" value="Yes" id="employer_fmcsr_yes1">
      <label for="employer_fmcsr_yes1">Yes</label>
      <input type="radio" name="employer_fmcsr1" value="No" id="employer_fmcsr_no1">
      <label for="employer_fmcsr_no1">No</label>
    </div>
    <br>

    <div class="radio radio-inline">
      Was the previous job position designated as a safety sensitive function in any DOT regulated mode, subject to alcohol and controlled substances testing requirements as required by 49 CFR Part 40?
      <input type="radio" name="employer_cfr1" value="Yes" id="employer_cfr_yes1">
      <label for="employer_cfr_yes1">Yes</label>
      <input type="radio" name="employer_cfr1" value="No" id="employer_cfr_no1">
      <label for="employer_cfr_no1">No</label>
    </div>
    <br>

    <hr><br>
    <br>

    <div class="two-col">
      <input type="text" name="employer_name2" placeholder="Second Last Employer Name">

      <input type="tel" name="employer_phone2" placeholder="Phone">
    </div>

    <div class="four-col">
      <input type="text" name="employer_address2" placeholder="Address">
      <input type="text" name="employer_city2" placeholder="City">
      <input type="text" name="employer_state2" placeholder="State">
      <input type="text" name="employer_zip2" placeholder="Zip Code">

      <input type="text" name="employer_position2" placeholder="Position Held">
      <input type="text" name="employer_from2" placeholder="From">
      <input type="text" name="employer_top2" placeholder="To">
      <input type="text" name="employer_salary2" placeholder="Salary">
    </div>

    <input type="text" name="employer_leaving2" placeholder="Reasons for Leaving">

    <textarea name="employer_gaps2" placeholder="Any gaps in employment and/or unemployment must be explained. Include dates (month/year) and reason."></textarea>

    <div class="radio radio-inline">
      Were you subject to the Federal Motor Carrier Safety Regulations (FMCSRs) while employed by the previous employer?
      <input type="radio" name="employer_fmcsr2" value="Yes" id="employer_fmcsr_yes2">
      <label for="employer_fmcsr_yes2">Yes</label>
      <input type="radio" name="employer_fmcsr2" value="No" id="employer_fmcsr_no2">
      <label for="employer_fmcsr_no2">No</label>
    </div>
    <br>

    <div class="radio radio-inline">
      Was the previous job position designated as a safety sensitive function in any DOT regulated mode, subject to alcohol and controlled substances testing requirements as required by 49 CFR Part 40?
      <input type="radio" name="employer_cfr2" value="Yes" id="employer_cfr_yes2">
      <label for="employer_cfr_yes2">Yes</label>
      <input type="radio" name="employer_cfr2" value="No" id="employer_cfr_no2">
      <label for="employer_cfr_no2">No</label>
    </div>
    <br>

    <hr><br>
    <br>

    <div class="two-col">
      <input type="text" name="employer_name3" placeholder="Third Last Employer Name">

      <input type="tel" name="employer_phone3" placeholder="Phone">
    </div>

    <div class="four-col">
      <input type="text" name="employer_address3" placeholder="Address">
      <input type="text" name="employer_city3" placeholder="City">
      <input type="text" name="employer_state3" placeholder="State">
      <input type="text" name="employer_zip3" placeholder="Zip Code">

      <input type="text" name="employer_position3" placeholder="Position Held">
      <input type="text" name="employer_from3" placeholder="From">
      <input type="text" name="employer_top3" placeholder="To">
      <input type="text" name="employer_salary3" placeholder="Salary">
    </div>

    <input type="text" name="employer_leaving3" placeholder="Reasons for Leaving">

    <textarea name="employer_gaps3" placeholder="Any gaps in employment and/or unemployment must be explained. Include dates (month/year) and reason."></textarea>

    <div class="radio radio-inline">
      Were you subject to the Federal Motor Carrier Safety Regulations (FMCSRs) while employed by the previous employer?
      <input type="radio" name="employer_fmcsr3" value="Yes" id="employer_fmcsr_yes3">
      <label for="employer_fmcsr_yes3">Yes</label>
      <input type="radio" name="employer_fmcsr3" value="No" id="employer_fmcsr_no3">
      <label for="employer_fmcsr_no3">No</label>
    </div>
    <br>

    <div class="radio radio-inline">
      Was the previous job position designated as a safety sensitive function in any DOT regulated mode, subject to alcohol and controlled substances testing requirements as required by 49 CFR Part 40?
      <input type="radio" name="employer_cfr3" value="Yes" id="employer_cfr_yes3">
      <label for="employer_cfr_yes3">Yes</label>
      <input type="radio" name="employer_cfr3" value="No" id="employer_cfr_no3">
      <label for="employer_cfr_no3">No</label>
    </div>
    <br>

    <textarea name="employer_additional" placeholder="Additional space if needed"></textarea>

    <hr><br>
    <br>

    <strong>I authorize you to make sure investigations and inquiries to my personal, employment, financial or medical history and other related matters as may be necessary in arriving at an employment decision. (Generally, inquiries regarding medical history will be made only if and after a conditional offer of employment has been extended.) I hereby release employers, schools, health care providers and other persons from all liability in responding to inquiries and releasing information in connection with my application.</strong><br>
    <br>

    In the event of employment, I understand that false or misleading information given in my application or interview(s) may result in discharge. I understand, also, that I am required to abide by all rules and regulations of the Company.<br>
    <br>

    "I understand that information I provide regarding current and/or previous employers may be used, and those employer(s) will be contacted, for the purpose of investigating my safety performance history as required by 49 CFR 391.23(d) and (e). I understand that I have the right to:
    <ul>
      <li>Review information provided by current/previous employers;</li>
      <li>Have errors in the information corrected by previous employers and for those previous employers to re-send the corrected information to the prospective employer; and</li>
      <li>Have a rebuttal statement attached to the alleged erroneous information, if the previous employer(s) and I cannot agree on the accuracy of the information."</li>
    </ul>

    <input type="checkbox" name="authorization" value="I authorize you to make sure investigations and inquiries to my personal, employment, financial or medical history and other related matters as may be necessary in arriving at an employment decision. I hereby release employers, schools, health care providers and other persons from all liability in responding to inquiries and releasing information in connection with my application." id="authorization">
    <label for="authorization">I have read and agree to the above authorization.</label><br>
    <br>

    <input type="checkbox" name="certify" value="This certifies that I completed this application, and that all entries on it and information in it are true and complete to the best of my knowledge." id="certify">
    <label for="certify">This certifies that I completed this application, and that all entries on it and information in it are true and complete to the best of my knowledge.</label><br>
    <br>

    <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITE_KEY; ?>"></div><br>

    <div id="submit-nullifier">
      <input type="submit" name="submit" value="SUBMIT APPLICATION">
    </div>
  </div>
</form>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<link rel="stylesheet" href="inc/jquery.fancybox.css">
<script src="inc/jquery.fancybox.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    var form = $('#application');
    $(form).submit(function(event) {
      event.preventDefault();

      var form = '#'+$(this).attr('id');
      var formData = new FormData(this);

      function formValidation() {
        var missing = 'no';

        $(form+' [required]').each(function(){
          if ($(this).val() === "") {
            $(this).addClass('alert').attr("placeholder", $(this).attr("placeholder")+" REQUIRED");
            missing = 'yes';
          }
        });

        if (missing == 'yes') $('html,body').animate({scrollTop: $('.alert').offset().top - 104}, 300);

        return (missing == 'no') ? true : false;
      }

      if (formValidation()) {
        $.ajax({
          type: 'POST',
          url: $(form).attr('action'),
          data: formData,
          processData: false,
          contentType: false,
          success: function(data){
            if (data) $.fancybox.open('<div id="alert-modal">'+data+'</div>');
            $(form).find('input[type="text"], input[type="email"], input[type="tel"], textarea').val('');
            $(form).find('input[type="radio"], input[type="checkbox"]').prop('checked', false);
          }
        });
      }
    });
  });
</script>

<?php include "footer.php"; ?>