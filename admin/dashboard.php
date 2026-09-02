<?php

require "includes/session.php";
require "config/db.php";




$pageTitle = "Dashboard";
$page = "dashboard";
$cssFile = "dashboard.css";


require "includes/header.php";
require "includes/sidebar.php";





?>



<main class="main-content">

    <header class="page-header">

        <div>

            <h1>Dashboard</h1>

            <p>Welcome back <?= $_SESSION["name"]?>! Manage fruits of love activities efficiently.</p>

        </div>

        <div class="teacher-profile">

            <i class="fa-solid fa-circle-user"></i>

            <span><?= htmlspecialchars($first_name)?></span>

        </div>

    </header>


    
<?php

require "includes/footer.php";

?>