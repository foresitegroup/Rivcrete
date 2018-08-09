<?php
$PageTitle = "Contact";
include "header.php";
?>

<div class="page-header">
  <div class="site-width">
    <div class="text">
      <h1>Place your Order with Riv/Crete</h1>

      Our professional dispatch team paired with state-of-the-art tracking equipment ensure Riv/Crete's reputation as the market leader in Milwaukee concrete delivery service. Our dispatch will work with you to place your order for the proper concrete mix and set up a time, date and location for your pour. Please make your call two to three days ahead of need so we can insure prompt service.

      <h2>ORDER CONCRETE</h2>
    </div>

    <div class="image" style="background-image: url(images/header-contact.jpg);"></div>
  </div>
</div>

<div class="site-width order">
  <div class="left">
    <h3>414.455.6070</h3>

    <h4>PLEASE HAVE READY:</h4>
    <ol>
      <li>Your Name and/or Company Name</li>
      <li>Telephone number</li>
      <li>The job site address and directions</li>
      <li>Description of your project</li>
      <li>Concrete mix type and slump</li>
      <li>Amount of concrete &mdash; Use the Concrete Calculator</li>
      <li>Truck spacing &mdash; If your order requires more than one truck, you will be asked how long you need to empty each truck. If you are unsure, talk to dispatch.</li>
      <li>The date and time of delivery</li>
      <li>Payment terms</li>
    </ol>
    
    <script type="text/javascript" src="inc/jquery.scrollTo.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $(".order .left .button").click(function(e) {
          $.scrollTo("#contact",{ duration: 500 });
          e.preventDefault();
        });
      });
    </script>
    <a href="#" class="button">NEED MORE INFORMATION?</a>
  </div>

  <div class="right">
    <script type='text/javascript'>
      $(document).ready(function() {
        $("#calculator").submit(function(event) {
          event.preventDefault();

          var length = $("#length").val();
          var width = $("#width").val();
          var depth = $("#depth").val() / 12;

          var total = Math.round(((length * width * depth) / 27) * 100) / 100;

          $("#total").val(total);
        });
      });
    </script>

    <h2>Volume Calculator</h2>

    <form id="calculator">
      <div>
        <input type="tel" name="length" id="length" placeholder="LENGTH (FT.)">

        <input type="tel" name="width" id="width" placeholder="WIDTH (FT.)">

        <input type="tel" name="depth" id="depth" placeholder="DEPTH (IN.)">

        <input type="submit" name="submit" value="CALCULATE TOTAL"><br>
        <br>

        <label for="total">TOTAL CUBIC YARDS NEEDED =</label>
        <input type="tel" name="total" id="total">
      </div>
    </form>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    var form = $('#contact');
    var formMessages = $('#form-messages');
    $(form).submit(function(event) {
      event.preventDefault();

      function formValidation() {
        if ($('#name').val() === '') { alert('Name required.'); $('#name').focus(); return false; }
        if ($('#email').val() === '') { alert('Email Address required.'); $('#email').focus(); return false; }
        if ($('#phone').val() === '') { alert('Phone Number required.'); $('#phone').focus(); return false; }
        if ($('[name="contact"]:checked').length === 0) { alert('Contact method required.'); return false; }
        if ($('#message').val() === '') { alert('Message required.'); $('#message').focus(); return false; }
        return true;
      }

      if (formValidation()) {
        var formData = $(form).serialize();
        formData += '&src=ajax';

        $.ajax({
          type: 'POST',
          url: $(form).attr('action'),
          data: formData
        })
        .done(function(response) {
          $(formMessages).html(response);

          $(form).find('input:text, textarea').val('');
          $('#email').val(''); // Grrr!
          $(form).find('input:radio, input:checked').removeAttr('checked').removeAttr('selected');
        })
        .fail(function(data) {
          if (data.responseText !== '') {
            $(formMessages).html(data.responseText);
          } else {
            $(formMessages).text('Oops! An error occured and your message could not be sent.');
          }
        });
      }
    });
  });
</script>

<?php
// Settings for randomizing form field names
$ip = $_SERVER['REMOTE_ADDR'];
$timestamp = time();
$salt = "RivcreteContactForm";
?>

<noscript>
<?php
$feedback = (!empty($_SESSION['feedback'])) ? $_SESSION['feedback'] : "";
unset($_SESSION['feedback']);
?>
</noscript>

<form action="form-contact.php" method="POST" id="contact">
  <div>
    <h5>Questions or a Request? Fill out the form below or contact us directly at:<br><br><?php email("contactus@rivcrete.com"); ?> or (414) 455-6070</h5>

    <input type="text" name="<?php echo md5("name" . $ip . $salt . $timestamp); ?>" id="name" placeholder="Name">

    <input type="text" name="<?php echo md5("company" . $ip . $salt . $timestamp); ?>" id="company" placeholder="Company">

    <div style="clear: both;"></div>

    <input type="email" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="Email Address">

    <input type="tel" name="<?php echo md5("phone" . $ip . $salt . $timestamp); ?>" id="phone" placeholder="Phone Number">

    <div style="clear: both;"></div>

    <div class="radio">
      <span>Preferred Method of Contact:</span>
      <input type="radio" name="contact" value="Phone" id="r-phone">
      <label for="r-phone">Phone</label>
      <input type="radio" name="contact" value="Email" id="r-email">
      <label for="r-email">Email</label>
    </div>

    <textarea name="<?php echo md5("message" . $ip . $salt . $timestamp); ?>" id="message" placeholder="What can we help you with?"></textarea>

    <input type="hidden" name="referrer" value="contact.php">

    <input type="text" name="confirmationCAP" style="display: none;">

    <input type="hidden" name="ip" value="<?php echo $ip; ?>">
    <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

    <div id="form-messages"><?php echo $feedback; ?></div>

    <input type="submit" name="submit" value="SUBMIT MESSAGE">
  </div>
</form>

<?php include "footer.php"; ?>