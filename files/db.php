<?php
    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "php_learning";

    $conn = mysqli_connect($hostName, $userName, $password,$dbName);
    if($conn){
        echo "DB is connected successfully";
        // create table in the database
        // $createTable = "CREATE TABLE formData(
        //     id int(5) auto_increment,
        //     first_name varchar(20),
        //     last_name varchar(20),
        //     email varchar(20),
        //     crnt_date timestamp default current_timestamp,
        //     PRIMARY KEY(id)
        // )";
        // if (mysqli_query($conn, $createTable)) {
        //     echo "Table is created successfully";
        // } else {
        //     echo "Error creating table: " . mysqli_error($conn);
        // }
        
        // Insert data into database
        // $insertData = "INSERT INTO formData(first_name,last_name,email) 
        // VALUES
        //         ('$firstName','$lastName','$emailAddress')
        // ";
        // if (mysqli_query($conn, $insertData)) {
        //     echo "Record is inserted successfully";
        // } else {
        //     echo "Error inserting record: " . mysqli_error($conn);
        // }

        // Update data in database table
        // $updateData = "UPDATE formData SET email='mkrakib@gmail.com' WHERE id=4";
        // if (mysqli_query($conn, $updateData)) {
        //     echo "Record updated successfully";
        // } else {
        //     echo "Error updating record: " . mysqli_error($conn);
        // }


        // delete a record from the database
        // $deleteData = "DELETE FROM formData WHERE id=4";
        // if (mysqli_query($conn, $deleteData)) {
        // echo "Record deleted successfully";
        // } else {
        // echo "Error deleting record: " . mysqli_error($conn);
        // }

        // Select data from the database
        $selectData = "SELECT * FROM formData";
        $result3 = mysqli_query($conn,$selectData);
        echo "<pre>";
        if (mysqli_num_rows($result3) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result3)) {
              echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"].
              "  - email: " . $row["email"].
              "<br>";
            }
          }
          else {
            echo "0 results";
          }
    }
    else {
        die ("Connection error: " . mysqli_connect_error($conn));
    }

    mysqli_close($conn);
?>
    
