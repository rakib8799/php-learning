<?php
// DB Connection

$host = "localhost";
$db_username = "root";
$db_pass = "";
$db_name="phpbasicdb";
// mysqli, pdo(php data object)
$conn = mysqli_connect($host,$db_username,$db_pass,$db_name) or die("Connection Error: ".mysqli_connect_error());
// var_dump($conn);
if($conn){
    $sql = "SELECT * FROM `students`";
    $results = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($results)){
        echo $row['stu_name'], " : ", $row['course'], "<br>";
    }
}