<?php
$PageTitle = "Resources";
include "header.php";
$FooterImages = "no";
?>

<div class="page-header noimage">
  <div class="site-width">
    <div class="text">
      <h1>Riv/Crete Resources</h1>
    </div>

    <div class="image"></div>
  </div>
</div>

<div class="site-width resources">
  Riv/Crete Ready Mix is a family-owned business based in Milwaukee, Wisconsin.  Our company is focused on providing our customers with the best service and highest quality concrete in the Milwaukee market.<br>
  <br>

  To streamline and improve how we do business with you we have created several resources that can be downloaded or mailed to you upon request.  These procedures and resources are designed to improve how we do business with you to make your experience working with Riv/Crete even better.<br>
  <br>

  <h2>Resources</h2>

  <div class="resource">
    <h3>Customer Handbook</h3>
    <h4>Rules and Guidlines</h4>

    <div class="links">
      <a href="pdf/Customer_Handbook.pdf<?php echo "?".filemtime("pdf/Customer_Handbook.pdf"); ?>" class="button">View PDF</a>
    </div>
  </div>

  <div class="resource">
    <h3>QC Project Procedures</h3>
    <h4>Recommendtions and Guidelines</h4>

    <div class="links">
      <a href="pdf/QC_Project_Procedures.pdf<?php echo "?".filemtime("pdf/QC_Project_Procedures.pdf"); ?>" class="button">View PDF</a>
    </div>
  </div>

  <div class="resource">
    <h3>Ready Mix Concrete</h3>
    <h4>Safety Data Sheet</h4>

    <div class="links">
      <a href="pdf/Ready_Mix_Concrete_SDS.pdf<?php echo "?".filemtime("pdf/Ready_Mix_Concrete_SDS.pdf"); ?>" class="button">View PDF</a>
    </div>
  </div>

  <div class="resource">
    <h3>Business Credit Application</h3>
    <h4>&nbsp;</h4>

    <div class="links">
      <a href="pdf/RIVCRETE_Business_Credit_Application.pdf<?php echo "?".filemtime("pdf/RIVCRETE_Business_Credit_Application.pdf"); ?>" class="button">View PDF</a>
    </div>
  </div>

  <div class="footer">
    <img src="images/resources.webp" alt="" width="1000" height="667">

    <div>
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

      <h3>Volume Calculator</h3>

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
</div>

<?php include "footer.php"; ?>