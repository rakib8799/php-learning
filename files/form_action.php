<?php
    $firstName = $_GET["firstName"];
    $lastName = $_GET["lastName"];
    $emailAddress = $_GET["emailAddress"];
?>

<table border="1">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email Address</th>
    </tr>
    <tr>
        <td>
            <?php echo $firstName; ?>
        </td>
        <td>
            <?php echo $lastName; ?>
        </td>
        <td>
            <?php echo $emailAddress; ?>
        </td>    
    </tr>
</table>

<?php
     include_once("./db.php");
?>