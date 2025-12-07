<!DOCTYPE html>
<html lang="en">
<?php
include "includes/Header-BasicLEO.php"
?>
<body>
<main id="maincontent">
  <div id="page">
    <div class="post">
      <h1 class="ada_compliance">Hardware Components</h1>

      <p>This page illustrates the main hardware components of our basic low Earth orbiting
        CubeSat.</p>

      <ul>
        <li><p><strong><a href="http://cubesatkit.com">CubeSat Kit</a> Development Board/Flight
              Module</strong></p>

          <p>The "brain" of the satellite. Includes a very low-power Texas Instruments MSP430
            microcontroller on the Pluggable Processor Module on the Motherboard. The aluminum
            structure of the CubeSat, into which Alnico V magnets are glued for passive magnetic
            stabilization.</p></li>

        <li><p><strong><a href="http://clyde-space.com">Clyde Space</a> EPS</strong></p>

          <p>Power supply controls charging of the lithium polymer batteries by the photovoltaic
            panels, and produces 3.3V and 5V and ~8V raw.</p>

          <p><a class="imageLink" href="images/ClydeSpaceEPS.jpg"><img
                  src="images/ClydeSpaceEPS.jpg" alt="Clyde Space EPS" width="200"/></a></p></li>

        <li><p><strong><a href="http://astrodev.com">Astrodev</a> Helium-100 Radio</strong></p>

          <p>Receiver for 2m band and transmitter for 70cm band. For communication between the
            ground station and the CubeSat.</p>

          <p><a class="imageLink" href="images/AstrodevHelium-100.jpg"><img
                  src="images/AstrodevHelium-100.jpg" alt="Astrodev Helium-100" width="200"/></a>
          </p></li>

        <li><p><strong><a href="http://www.isispace.nl">ISIS</a> AntS Deployable Antenna</strong>
          </p>

          <p>Crossed dipole antennas for 2m and 70cm, deploy after the CubeSat is deployed from
            the launch vehicle.</p>

          <p><a class="imageLink" href="images/ISIS-AntS.jpg"><img src="images/ISIS-AntS.jpg"
                                                                   alt="ISIS AntS"
                                                                   width="200"/></a></p></li>

        <li><p><strong><a href="http://novatel.com">Novatel</a> OEMV-1 GPS &amp; University of
              Michigan Position and Time Board</strong></p>

          <p>Space qualified GPS and mounting board.</p>

          <p><a class="imageLink" href="images/NovatelOEMV-1.jpg"><img
                  src="images/NovatelOEMV-1.jpg" alt="Novatel
        OEMV-1 GPS" width="200"/></a></p></li>

        <li><p><strong>IMU/Camera/Patch Antenna/Hysteresis Board</strong></p>

          <p>Mounts our <b><a href="http://www.microstrain.com">Microstrain</a></b> Inertial
            Measurement Unit, our GPS patch antenna, our camera and hysteresis rods.</p>

          <p><a class="imageLink" href="images/IMU-board.jpg"><img src="images/IMU-board.jpg"
                                                                   alt="IMU/Camera/GPS
        Patch/Hysteresis Rods" width="200"/></a></p></li>

        <li><p><strong>Photovoltaic Panels</strong></p>

          <p>Outer surface of the CubeSat mounting photovoltaic cells for solar power generation
            and very bright LEDs to observe the CubeSat from the ground. Made for us by <b><a
                  href="http://leddynamics.com">LED Dynamics</a></b>.</p>

          <p><a class="imageLink" href="images/DSC08890cropped.JPG"><img
                  src="images/DSC08890cropped.JPG"
                  width="200" alt="Photovoltaics Panels"/></a></p></li>
      </ul>

      <!-- BEGIN FOOTER -->
      <div id="footer">
        <p>&#169; Copyright 2019 by Vermont State University | Last Revised: December 21, 2019</p>
      </div>
      <!-- END FOOTER -->
    </div>
  </div>
</body>
</html>
