<?php
$insert=false;
  if(isset($_POST['name']))
  {
    $server="localhost";
    $username="root";
    $password="";
    $con=mysqli_connect($server,$username,$password);
    if(!$con)
    {
        die("Connection to this database failed due to :".mysqli_connect_error());
    }
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $desc=$_POST['desc'];
    $sql="INSERT INTO `d_trip`.`d_trip` (`Name`, `Age`, `Gender`, `Email`, `Phone No.`, `Other Info`, `Date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";
    // echo $sql;
    if($con->query($sql)==true)
    {
         //echo "Successfully inserted";
         $insert=true;
    } 
    else
    {
        echo"ERROR: $sql <br> $con->error";
    }
    $con->close();
}
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Welcome to Krishnagar-Darjeeling trip</h1>
        <p>Enter your details & submit this form to confirm your seat in this auspicious trip:</p>
       <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="number" name="age" id="age" placeholder="Enter Your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter Your Gender">
            <input type="email" name="email" id="email" placeholder="Enter Your Email">
            <input type="number" name="phone" id="phone" placeholder="Enter Your Phone No.">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other info"></textarea>
            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->
        </form>
    </div>
</body>

</html>