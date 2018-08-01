<?php
require("inc/top.php");
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">IntISP V<?php echo file_get_contents("../data/version"); ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse pull-right" id="navbarNav">
    <ul class="navbar-nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link <?php
        if (isset($_SESSION["stp2"])) { echo "disabled"; 
        } else { echo "active"; 
        } ?>" href="#"> Welcome</a>
</li>
    <li class="nav-item">
        <a class="nav-link <?php
        if (!isset($_SESSION["stp2"])) { echo "disabled"; 
        } else { echo "active"; 
        } ?>" href="#"> Database</a>
</li>
    <li class="nav-item">
        <a class="nav-link <?php
        if (!isset($_SESSION["stp3"])) { echo "disabled"; 
        } else { echo "active"; 
        } ?>" href="#"> Installation</a>
</li>
    <li class="nav-item">
        <a class="nav-link <?php
        if (!isset($_SESSION["stp4"])) { echo "disabled"; 
        } else { echo "active"; 
        } ?>" href="#"> Activation</a>
</li>
    </ul>
  </div>
</nav>
<div class="container">
        <h1>Welcome to your new IntISP Installer</h1>
     <p>This setup will guide your through the installation of the IntISP Control Panel. Before proceeding please make sure you accept the Terms and Conditions of Adaclare Technologies. You configured your database details using the simple installer or you are using this script as a demo. You have a valid IntISP registration which Adaclare Technologies.</p>
     <a href="step2.php"  class="btn btn-dark">Next</a>
    </div>
<?php
require("inc/bottom.php");
?>