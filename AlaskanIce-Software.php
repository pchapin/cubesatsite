<!DOCTYPE html>
<html lang="en">
<?php
include "includes/Header-AlaskanIce.php";
?>
<body>
<main id="maincontent">
  <div id="page">
    <div class="post">
      <h1 class="ada_compliance">Software Components</h1>
      <p><img src="images/software.png" alt="Software
      Toolchain Diagram" style="float: right; border: 0;margin-left:20px;"/></p>

      <p>The software for the buoy is written in SPARK, a strict subset of the Ada programming
        language. This was chosen because of its high integrity and reliability. Once the buoy is
        deployed, there will be no opportunity to correct software bugs or errors, so a solid
        program is essential.</p>

      <p>Unfortunately, the microcontroller we chose (Texas Instruments MSP430) has no Ada
        compiler available. To combat this, a software toolchain has been created, which can be
        seen at right. </p>

      <p>In detail, the SPARK code written by the developers is run through <b><a
              href="https://www.altran.com/uk/en/about-us/what-we-do/expertise-centres/intelligent-systems/">Altran's</a></b>
        SPARK examiner to ensure that the annotations match the code. The code is then run through
        <b><a href="http://www.sofcheck.com/">SofCheck</a></b>'s AdaMagic compiler, which compiles
        the Ada code into C code. That C code is then combined with microcontroller device drivers
        written in C and called from Ada, and it is compiled for the MSP430 platform using <b><a
              href="http://www.rowley.co.uk/">Rowley Associates</a></b>' CrossWorks.</p>

      <!-- BEGIN FOOTER -->
      <div id="footer">
        <p>&#169; Copyright 2019 by Vermont State University | Last Revised: December 20, 2019</p>
      </div>
      <!-- END FOOTER -->
    </div>
  </div>
</body>
</html>
