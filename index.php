<?php
    $fname = "Mehedi Khan";
    $lname="Rakib";
    echo $fname.' '.$lname . "<br>";
    // Array
    $arr = array(1,2,3,4,5,6,7);
    array_push($arr,8);
    array_pop($arr);
    array_shift($arr);
    array_unshift($arr,1);
    echo count($arr),"<br>";
    $arr[4] = "Rakib";
    $arr1 = array("Rahim"=>12,"Karim"=>6,"Nadim"=>10,"Rakib"=>20);
    if(in_array(20,$arr1)){
        echo "Exists","<br>";
    }else{
        echo "Not Exists","<br>";
    }
    if(array_key_exists("Rahim",$arr1)){
        echo "Yes","<br>";
    }else{
        echo "No","<br>";
    }
    echo end($arr1);
    echo "<pre>";
    print_r($arr);
    print_r($arr1);
   echo count($arr1);
   echo "<br>";
    echo $arr1["Rahim"];
    echo "<br>";
    $arr2 = array(array("Rahim"=>12,"Karim"=>6,"Nadim"=>10,"Rakib"=>20),array("Rabbi"=>22,"Kadir"=>29,"Raihan"=>30),array("Rafik"=>50,"Asad"=>67,"Sadia"=>16));
    $arr3 = array(
        "pankaj" => array("maths"=>60,"eng"=>70,"sci"=>80),
        "rohan" => array("maths"=>80,"eng"=>75,"sci"=>80),
        "suresh" => array("maths"=>70,"eng"=>70,"sci"=>60)
    );
    print_r($arr2);
    echo ($arr2[0]["Nadim"]);
    echo "<pre>";
    print_r($arr3);
    print_r($arr3["pankaj"]["maths"]);
    echo "<br>","<br>";
    // var_dump($arr1);

    // Strings
    var_dump($fname);
    echo "String length is: ", strlen($fname),"<br>";
    // $hello = "Hello there! this is \"PHP\" String tutorial";
    $hello = 'Hello there! this is "PHP" String tutorial';
    echo "String position is: ",strpos($hello,"PHP"),"<br>";
    $file = "profile.php";
    // $extn = substr($file,8);
    $extn = substr($file,strlen($file) - 3);
    echo $extn,"<br>";
    // joining & splitting
    $fruits = "apple, banana, orange";
    echo $fruits;
    $fruitsArr=explode(",",$fruits);
    // var_dump($fruitsArr);
    echo "<pre>";
    print_r($fruitsArr);
    $languages = ["PHP","C","JAVA","PYTHON"];
    $langStr = implode(", ",$languages);
    // var_dump($langStr);
    echo $langStr,"<br>";
    echo strtoupper($fname),"<br>";
    echo strtolower($fname),"<br>";


    // Objects
    class obj{
        public $name;
        public function abc(){
            return "New object is created!";
        }
    }
    $newObj = new obj();
    var_dump($newObj);

    $day=date("D");
    // Ternary
   echo ($day=="Fri")? "Vacation":"Not a Vacation";
   echo "<br>";

   $day1 = date("l");
   switch ($day1){
       case "Sunday":
            echo "Happy Weekend!";
            break;
        case "Saturday":
            echo "Happy Night!";
            break;
        case "Friday":
            echo "Weekend is coming soon";
            break;
        default:
            echo "Weekday!";
   }


   for($i=0;$i<10;$i++){
       echo "Number is: ",$i,"<br>";
   }
   echo "<br>";
   foreach($arr1 as $array1){
       echo "One dimensional Array is: ",$array1,"<br>";
   }
   echo "<br>";

   foreach($arr2 as $array2){
       foreach($array2 as $array3){
            echo "Two dimensional Array is: ",$array3,"<br>";
       }
    }
    echo "<br>";

    $num1=2;
    $num2=3;
    function number(){
        global $num1,$num2;
        return $num1*$num2;
    }
    $mul= number();
    echo $mul,"<br>";

    function sum($n1,$n2){
        return $n1+$n2;
    }
    $result= sum(6,10);
    echo $result,"<br>";

    // using ... token to access variable arguments
    function dots(...$num){
        $sum=0;
        if(!empty($num)){
            foreach($num as $number){
                $sum+=$number;
            }
        }
        return $sum;
    }
    $res=dots(1,3,5);
    echo "Sum is = ".$res,"<br>";

    // PHP Cookies
    // Set a cookie
    // setcookie("name","rakib",time()+3600);
    // Get/Access Cookies
    // print_r($_COOKIE["name"]);
    if(isset($_COOKIE["name"])){
        echo "Hello, ".$_COOKIE["name"];
    }
    // Delete cookie
    setcookie("name","rakib",time() - 3600);

    // Set Cookie arrays
    setcookie("cookie[one]","Cookie One");
    setcookie("cookie[two]","Cookie Two");
    setcookie("cookie[three]","Cookie Three");
    if(isset($_COOKIE["cookie"])){
        echo "<pre>";
        print_r($_COOKIE["cookie"]);
    }

    // php sessions
    session_start();
    if(isset($_SESSION["visit_counter"])){
        $_SESSION["visit_counter"]+=1;
    }
    else{
        $_SESSION["visit_counter"] = 1;
    }
    $msg = "You have visited this page ".$_SESSION["visit_counter"] . " in this session.";
    echo $msg;
    $_SESSION["user"]="Mehedi Khan Rakib";
    // header("location:/php-learning/session.php");
    echo "<pre>";
    print_r($_SESSION);
    // Delete a/single Session variable
    // unset($_SESSION["visit_counter"]);
    // Delete all Session variables
    // session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <form action="form_action.php" method="POST" enctype="multipart/form-data" target="_blank">
        <input type="file" name="filename">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>





