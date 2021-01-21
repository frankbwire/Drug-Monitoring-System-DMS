<?php
include "connect.php";
//delete drug item
if(isset($_GET["view"])){
    $id=$_GET["view"];
    $sql_del="DELETE FROM `drugs` WHERE `drug_id` = '$id'";
    $query_del=mysqli_query($connect,$sql_del) or die(mysqli_error($connect));
    //no
    header("location:viewdrugs.php");
    };

//add item to expired list
if(isset($_GET["exp"])){
    $id=$_GET["exp"];
    $sql_exp="UPDATE `drugs` SET `expired` = 'Yes' WHERE `drugs`.`drug_id` = '$id'";
    $query_exp=mysqli_query($connect,$sql_exp) or die(mysqli_error($connect));
    //
    $sql_gt="SELECT * FROM `drugs` WHERE `drug_id` = '$id' LIMIT 1;";
    $query_gt=mysqli_query($connect,$sql_gt) or die (mysqli_error($connect));
    if($result_gt=mysqli_fetch_assoc($query_gt)){
         $name_gt=$result_gt["name"];
    //notitification
    $not="An item with drug name ".$name_gt.",has been added to the EXPIRED list of drugs.";
    $sql_not="INSERT INTO `notifications` (`message`, `date_received`) VALUES ('$not', current_timestamp());";
    $query_not=mysqli_query($connect,$sql_not) or die (mysqli_error($connect));
    };
   
    header("location:expired_drugs.php");
};

//delete from expired list
if(isset($_GET["expired"])){
    $id=$_GET["expired"];
      $sql_exp="DELETE FROM `drugs` WHERE `drug_id` = '$id'";
    $query_exp=mysqli_query($connect,$sql_exp) or die(mysqli_error($connect));
    header("location:expired_drugs.php");
};

//delete notification
if(isset($_GET["not"])){
    $id=$_GET["not"];
      $sql_exp="DELETE FROM `notifications` WHERE `notification_id` = '$id'";
    $query_exp=mysqli_query($connect,$sql_exp) or die(mysqli_error($connect));
    header("location:notifications.php");
};