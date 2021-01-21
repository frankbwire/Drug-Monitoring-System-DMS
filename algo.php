<!--== author (c)frankline_bwire ==-->
<!--== @knightlypro ==-->
<!--== (c)Notchcom Solutions Kenya ==-->
<!--== Facebook, Youtube and Instagram  ==-->
<?php
require 'connect.php';

//REGISTER USER
if(isset($_POST["register"])){
    //get data
    $fname=ucfirst($_POST["fname"]) ?? '';
    $lname=ucfirst($_POST["lname"]) ?? '';
    $email=$_POST["email"] ?? '';
    $pass1=$_POST["pass1"] ?? '';
    $pass2=$_POST["pass2"] ?? '';
    //create username
    $username=$fname.$lname;
    //test password match
    if($pass1 != $pass2){
        //error password match
    echo "<script type='text/javascript'>alert('The two passwords do NOT match. Try again.');
    window.location='register.php';
    </script>";  
        
    }
    else if ($pass1 == $pass2){
        //check if user exixts
        $sql0="SELECT * FROM `users` WHERE `email` = '$email' LIMIT 1;";
        $query0=mysqli_query($connect,$sql0) or die (mysqli_error($connect));
        $reqult0=mysqli_fetch_assoc($query0);
        //
        if(mysqli_num_rows($query0) >= 1){
            //error user exists
    echo "<script type='text/javascript'>alert('User already exists. Proceed to login.');
    window.location='index.php';
    </script>";  
        }
        else if (mysqli_num_rows($query0) <= 0){
              //insert data 
        $sql1="INSERT INTO `users` (`username`, `email`, `password`, `date_added`) VALUES ('$username', '$email', '$pass1', current_timestamp()); ";
        $query1=mysqli_query($connect,$sql1) or die (mysqli_error($connect));
        //success register
    echo "<script type='text/javascript'>alert('Account Created. Proceed to login.');
    window.location='index.php';
    </script>";  
        };   
    };
};

//Login user
if(isset($_POST["login"])){
    //get data
    $email=$_POST["email"] ?? '';
    $password=$_POST["password"] ?? '';
    //check data match
    $sql2="SELECT * FROM `users` where `email` = '$email' LIMIT 1;";
    $query2=mysqli_query($connect,$sql2) or die (mysqli_error($connect));
    $result2=mysqli_fetch_assoc($query2);
    $r_email=$result2["email"] ?? '';
    $r_password=$result2["password"] ?? '';
    //check if user exist
    if(mysqli_num_rows($query2) <= 0){
        //error no user
        echo "<script type='text/javascript'>alert('User does NOT exist. Proceed to Create account.');
    window.location='register.php';
    </script>"; 
    }
    else if(mysqli_num_rows($query2) >=1){
        //check password match
        if($r_email == $email and $r_password != $password){
            //error password match
 echo "<script type='text/javascript'>alert('INCORRECT password. Try again.');
    window.location='index.php';
    </script>"; 
        }
        else if($r_email == $email and $r_password == $password){
            //success login
              $_SESSION["id"]=$email;
            header("location:viewdrugs.php");
        };
    };
};
//Add Drug
if(isset($_POST["add"])){
  //get values
    $dname=ucfirst($_POST["dname"]) ?? '';
    $qty=$_POST["qty"] ?? '';
    $mnf=ucfirst($_POST["mnf"]) ?? '';
    $adm=ucfirst($_POST["adm"]) ?? '';
    $type=ucfirst($_POST["type"]) ?? '';
    $desc=ucfirst($_POST["desc"]) ?? '';
    $expiry=$_POST["expiry"] ?? '';
    $expired="No";
    //inser values
    $sql_add="INSERT INTO `drugs` (`name`, `description`, `administration`, `type`, `quantity`, `manufacturer`, `expiry_date`, `date_added`, `expired`) VALUES ('$dname', '$desc', '$adm', '$type', '$qty', '$mnf', '$expiry', current_timestamp(), '$expired');";
    $query_add=mysqli_query($connect,$sql_add) or die (mysqli_error($connect));
    header("location:viewdrugs.php"); 
};
?>