<h1>Student Information</h1>
<?php
    if(!empty($_POST)){
        echo "<pre>";
        print_r($_POST);
        $rollNumber = $_POST['rollNumber'];
        $fullName = $_POST['fullName'];
        $fatherName = $_POST['fatherName'];
        $motherName = $_POST['motherName'];
        $emailAddress = $_POST['emailAddress'];
        $genderValue = $_POST['genderValue'];
        $departmentName = $_POST['departmentName'];
        $language = $_POST['language'];
        $phoneNumber = $_POST['phoneNumber'];
        $currentDate = $_POST['currentDate'];
        $contactAddress = $_POST['contactAddress'];
        $image = $_POST['image'];
    }
?>

<table border="1">
<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Father's Name</th>
        <th>Mother's Name></th>
        <th>Email Address</th>
        <th>Gender</th>
        <th>Department</th>
        <th>Languages</th>
        <th>Phone Number</th>
        <th>Contact Address</th>
        <th>Date</th>
        <th>Image</th>
    </tr>
    <tr>
        <td><?php echo $rollNumber;?></td>
        <td><?php echo $fullName;?></td>
        <td><?php echo $fatherName; ?></td>
        <td><?php echo $motherName; ?></td>
        <td><?php echo $emailAddress; ?></td>
        <td><?php echo $genderValue; ?></td>
        <td><?php echo $departmentName; ?></td>
        <td><?php echo $language[0]; ?></td>
        <td><?php echo $phoneNumber; ?></td>
        <td><?php echo $contactAddress; ?></td>
        <td><?php echo $currentDate; ?></td>
        <td><?php echo $image; ?></td>
    </tr>
</table>