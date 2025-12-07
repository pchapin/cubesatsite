<!DOCTYPE html>
<html lang="en">
<?php
include "includes/Header-BasicLEO.php";
?>
<body>
<main id="maincontent">
  <div id="page">
    <div class="post">
      <h1 class="ada_compliance">Software Components</h1>

      <p>Most of the software we write that flies in space is written in SPARK, a subset of the
        <b><a href="http://www.adaic.org/">Ada programming language</a></b> that supports program
        verification. With the use of appropriate tools, SPARK programs can be mathematically
        proved free of runtime error, and they can have other correctness properties proved as
        well.</p>
    </div>

    <div class="post">
      <h2>Basic Low Earth Orbit</h2>

      <p>Our basic low-earth orbit CubeSat uses the SPARK 2005 language. As far as we are aware
        our CubeSat is the first spacecraft of any kind to use SPARK (although other spacecraft
        have used Ada). We should note, however, that some of the low-level drivers and a third
        party library for manipulating our SD card are written in C. We hope to minimize the
        amount of C in future missions.</p>

      <p>Our software makes no use of an operating system but instead runs on the bare metal. The
        SPARK code was compiled with all checks suppressed, which we felt was justified by using
        the SPARK tools to prove the program free of runtime error (see below for more
        information). This also allowed us to eliminate the Ada runtime system from the
        executable, saving space and further reducing the amount of unproved code used.</p>

      <p><img src="images/software.png" alt="Software Toolchain Diagram"
              style="float: right; border: 0;margin-left:20px;"/></p>

      <p>We used the <b><a
              href="http://www.ti.com/lsds/ti/microcontrollers_16-bit_32-bit/msp/ultra-low_power/overview.page">Texas
            Instruments MSP430</a></b> microcontroller due to its exceptionally low power
        consumption and our prior experience with it in the <b><a href="AlaskanIce.php">Alaskan
            Ice Buoy project</a></b>. Unfortunately, when we started our project, there was no Ada
        compiler available for the MSP430. Thus, we used a tool chain, shown at right, that
        converted the SPARK to C using <b><a href="http://www.sofcheck.com/">SofCheck</a></b>'s
        AdaMagic compiler. We then compiled the C, along with the required low-level drivers and
        libraries, to MSP430 object code using <b><a href="http://www.rowley.co.uk/">Rowley
            Associates</a></b>' CrossWorks.</p>

      <p>The primary Ada development was done using the GPS integrated development environment
        from <b><a href="http://www.adacore.com/">AdaCore</a></b>. GPS supports integration with
        SPARK and the GNAT Ada compiler was used for compiling and running tests. AdaMagic was
        only used to generate the final flight software via CrossWorks as described above.</p>
    </div>

    <div class="post">
      <h2>Software Metrics</h2>

      <p>The SPARK portion of the flight control program consists of 5991 lines of code and 4095
        lines of comments (where 2843 comment lines are actually SPARK annotations), for a total
        of 10,086 lines. These numbers do <em>not</em> consider blank lines. The SPARK 2005
        Examiner found the code base free of flow errors but issued 72 warnings, mostly related to
        automatically generated loop assertions. The Examiner generated 4542 verification
        conditions (VCs) of which all but 102 were proved automatically. Thus, 98% of all VCs were
        proved. In this project we attempted to prove the program free of runtime errors (to
        support our decision to suppress all checks), but we did not specifically attempt to prove
        any higher level properties of the program. Also, due to lack of time before launch, we
        did not pursue the remaining 102 unproved VCs either formally, for example, with the
        checker tool, or via focused testing.</p>

      <p>The C portion of the flight control program consists of 2239 lines (<em>including</em>
        blank lines). This does not include the header files or source files of the third party SD
        card library. Thus, the C portion of the flight control program is approximately 18% of
        the total. However, that number is somewhat inflated because the count of C source lines
        above includes blank lines.</p>

      <p>The final executable consumes 3874 bytes of RAM (not including stack space) and 45,428
        bytes of ROM. On our processor this corresponds to 47% of the RAM and 38% of the ROM.
        These numbers include the space consumed by the third party SD card library we used. No
        attempt was made, however, to analyze stack space consumption.</p>
    </div>

    <!-- BEGIN FOOTER -->
    <div id="footer">
      <p>&#169; Copyright 2019 by Vermont State University | Last Revised: December 20, 2019</p>
    </div>
    <!-- END FOOTER -->
  </div>
</body>
</html>
