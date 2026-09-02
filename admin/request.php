<?php 
session_start();
$pageTitle = "Request access";
$cssFile = "request.css";
require "includes/header.php";

?>

<?php if(isset($_SESSION["email"])): ?>

<div class="access-box">

<div class="logo">
<i class="fas fa-check-circle"></i>
</div>

<div class="content">
    <div class="header">
        <strong>Your account has been created Successful. You will send a request to approve your account</strong>
    </div>

    <div class="profile">
        <span>
            <strong>First Name: </strong> <?= $_SESSION["fname"] ?>

        </span>
        <span>
        <strong>Last Name: </strong> <?= $_SESSION["lname"] ?>
        </span>
        <span>
        <strong>Email: </strong> <?= $_SESSION["email"] ?>
        </span>
        
    </div>

    <div class="access-link">
        <a href="https://wa.me/+250780920096?text=Hello, fruits of love. Here is my email I used to create account: <?= $_SESSION["email"] ?>"> <i class="fab fa-whatsapp"></i> Send request here </a>
    </div>
</div>

</div>
<?php else: ?>
    <?php header("Location: signup.php"); ?>
<?php endif; ?>
