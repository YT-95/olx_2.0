<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>OLX 2.0</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="vendor/jquery/jquery.min.js" rel="stylesheet">
    <link href="vendor/bootstrap/js/bootstrap.min.js" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <!--<link rel="stylesheet" href="assets/css/search.css">
    <link rel="stylesheet" href="css/style-select-box.css">-->
  <link rel="stylesheet" href="css/image.css">
      



  </head>
  <?php

  // cheack login...
  error_reporting("ALL ERRORs");
  include("configuration.php");
  
    if( empty($_SESSION['user-email']) )
    {
      echo "<script> alert('Please login now!');window.location=('login.php');</script>";
    }
    
?>

  <body>

   
    <!-- Header -->

    <?php

        include('header.php');
        echo "<br><br><br><br>";
        ?>



   <div class=" col-md-12 float-center">
      <!-- user details -->
      <table class="table table-striped">
        <thead>
        <tbody>
                  <tr>
                    <th>User Name</th>
                    <th>E-mail ID</th>
                    <th>Mobile No</th>
                    <th>Product</th>
                    <th>Messages</th>
                    
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
    <?php
    include("configuration.php");
    $tmp = $_SESSION['user-email'];
    $qry = mysql_query("select *from users where email='$tmp' ");
    $row2 = mysql_fetch_row($qry);
    $tmp2 = $row2[0];
    $tmp3 = strtoupper($row2[1]);
    echo "<h5><b><i> WELL COME - $tmp3</i></b></h5><br>";
   

    $result=mysql_query("select *from notification where p_u_id='$tmp2' ");
   
      while($row = mysql_fetch_array($result))
    {
      echo "<tr>";
      echo "<td>".$row["name"];
      echo "<td>".$row["email"];
      echo "<td>".$row["mobile"];
      echo "<td>".$row["p_name"];

      echo "<td>".$row["message"];
      
      if($row["noti"]=="read")
      {
        
        echo "<td align='center'><a style='text-decoration:none;' href='msg-read.php?slid=".$row["cusid"]."'><input type='submit' value='Readed' disabled='true'/></a> | 
        <a style='text-decoration:none;' href='msg-read.php?deletemid=".$row["id"]."'><button class='fa fa-trash'></button></a> ";
      }
      else if($row["noti"]=="unread")
      {
        echo "<td align='center'><a style='text-decoration:none;' href='msg-read.php?slid=".$row["id"]."'><input type='submit' value='New Messages' /></a>";
      }
      echo "<tr>";
    }
  ?>
    
       </tbody>
       </table>
     </div>
     </div>
   <div>

<div class="col-md-12">

    <?php

        include('footer.php');

        ?>
      </div>
    <!--<li class="nav-item active"></li>-->