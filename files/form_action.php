<?php
    $firstName = $_GET["firstName"];
    $lastName = $_GET["lastName"];
    $emailAddress = $_GET["emailAddress"];
?>

<p>First Name is: <?php echo $firstName; ?></p>
<p>Last Name is: <?php echo $lastName; ?></p>
<p>Email Address is: <?php echo $emailAddress; ?></p>

<?php
     include_once("./db.php");
?>