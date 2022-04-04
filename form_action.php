<?php
    if(isset($_POST["submit"])){
        // echo "<pre>";
        // print_r($_FILES);
        $errors=[];
        $fileName=$_FILES["filename"]["name"];
        $tmpName=$_FILES["filename"]["tmp_name"];
        $fileSize=$_FILES["filename"]["size"];
        $arr = explode(".",$fileName);
        $fileExtn = strtolower(end($arr));
        $allowedExtns = ["jpg","jpeg","png"];
        if(!in_array($fileExtn,$allowedExtns)){
            $errors[] = "Invalid file extention. Only jpg, jpeg and png files are allowed.";
        }
        if($fileSize>5242880){
            $errors[] = "File size should not be greater than 5 MB";
        }
        if(empty($errors)){
            $destination= getcwd() . "/uploads/" . $fileName;
            if(move_uploaded_file($tmpName,$destination)){
                echo "File uploaded successfully";
            }
            else{
                echo "File could not be uploaded";
            }
        }
        else{
            echo "<pre>";
            print_r($errors);
        }
    }
?>

<img src="./uploads/1.jpg" alt="" style="width: 20vw">