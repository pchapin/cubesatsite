
<!-- This is a document fragment -->
<head>
  <title>CubeSat Laboratory</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
  <script src="js/nav.js"></script>
</head>

<a class="skipNav" href="#maincontent">Skip navigation</a>
<div id="header">
  <h2 class="siteTitle">Vermont State University<br>CubeSat Laboratory</h2>
</div>
<!-- end #header -->

<div class="menu-wrap">
  <nav class="menu">
    <ul>
      <li><a class="normal" href="index.php">Home</a></li>
      <li>
        <a class="normal" href="CubedOS.php">CubedOS </a>
      </li>
      <li class="tab">
        <a class="newdropdown" onmouseenter="mouseEnterBasicLEO()"
           onclick="toggle('BasicLEODropdown', 'drop1')">BasicLEO</a>
        <button class="navbar" aria-haspopup="true" aria-expanded="false" id="drop1"
                onclick="toggle('BasicLEODropdown', 'drop1')">&#9660;
        </button>
        <ul class="sub-menu" onmouseleave="mouseLeaveBasicLEO()" style="display: none"
            id="BasicLEODropdown">
          <li><a href="BasicLEO.php">Overview</a></li>
          <li><a href="BasicLEO-Hardware.php">Hardware</a></li>
          <li><a href="BasicLEO-Software.php">Software</a></li>
          <li><a href="BasicLEO-Pictures.php">Pictures</a></li>
          <li><a href="BasicLEO-Data.php">Data</a></li>
        </ul>
      </li>

      <li class="tabActive">
        <a class="newdropdown" onmouseenter="mouseEnterAlaskanIce()"
           onclick="toggle('AlaskanIceDropdown', 'drop2')">AlaskanIce</a>
        <button class="navbar" aria-haspopup="true" aria-expanded="false" id="drop2"
                onclick="toggle('AlaskanIceDropdown', 'drop2')">&#9660;
        </button>
        <ul class="sub-menu" onmouseleave="mouseLeaveAlaskanIce()" style="display: none"
            id="AlaskanIceDropdown">
          <li><a href="AlaskanIce.php">Overview</a></li>
          <li><a href="AlaskanIce-Hardware.php">Hardware</a></li>
          <li><a href="AlaskanIce-Software.php">Software</a></li>
        </ul>
      </li>
    </ul>
  </nav>
</div>
