<!DOCTYPE html>
<html>
<?php
    include 'connect.php';
    ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">  
    <title>Drug Monitoring System</title>
    <link rel="icon" href="assets/img/icon.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/footer-basic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body class="text-monospace">
    <nav class="navbar navbar-dark navbar-expand-md bg-success text-monospace text-center" style="font-size: 14px;">
        <div class="container"><a class="navbar-brand" href="viewdrugs.php"><i class="fas fa-pills"></i>&nbsp; Drug Monitoring System</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="viewdrugs.php">Home</a></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="notifications.php">Messages</a></li>
                   <li class="nav-item" role="presentation"><a class="nav-link active" href="drugs.php">Add Drugs</a></li>
                     <li class="nav-item" role="presentation"><a class="nav-link active" href="expired_drugs.php">Expired</a></li>
                    <li class="nav-item" role="presentation" style="padding-top: 5px;"><a class="btn btn-warning btn-sm text-monospace text-center text-white" role="button" style="font-weight: bold;letter-spacing: 1px;" href="logout.php">SignOut</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div class="jumbotron border rounded-0" style="background-image: url(&quot;assets/img/pills.jpg&quot;);background-position: center;background-size: cover;background-repeat: no-repeat;margin-bottom: 5px;">
        <div class="text-center text-white border rounded" style="background-color: rgba(0,0,0,0.5);padding: 5px;">
            <h2>Drug Monitoring System</h2>
            <p style="font-size: 14px;">DCMS allows health experts in pharmacies and chemists to classify drugs in order and be able to get an alert when drugs are almost expiring or have expired. It aims at also reducing wastage of resource and wastage of money used to acquire
                drugs.<br></p>
        </div>
    </div>
    <div class="container border rounded shadow-sm">
        <h4 class="text-center border rounded shadow" style="font-weight: bold; margin-top:10px;">Drug Records</h4>
          <hr>
        <p style="font-size: 14px;">The table show all drugs available in your system. Use the delete button provided to remove a single record.</p>
        <p class="text-right text-danger flash animated infinite" style="font-size: 12px;"><i class="fas fa-comments"></i>&nbsp;You have a new notification.</p>
      
        <div class="table-responsive table-bordered text-monospace" style="height: 300px;font-size: 13px;">
            <?php
            //
            $sql4="SELECT * FROM `drugs` where `expired` = 'No' order by `date_added` desc;";
            $query4=mysqli_query($connect,$sql4) or die  (mysqli_error($connect));
            ?>
            <table class="table table-striped table-bordered table-sm">
                <thead style="background-color: rgba(149,247,147,0.9); font-size:12px;">
                    <tr>
                        <th>Date Added</th>
                        <th>Name</th>
                        <th>Manufacturer</th>
                        <th>Administration</th>
                        <th>Type</th>
                        <th>Quantity</th>
                        <th>Description</th>
                        <th>Expiry Date</th>
                    </tr>
                </thead>
                <?php
                while($result4=mysqli_fetch_assoc($query4)){
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $result4["date_added"];  ?></td>
                         <td><?php echo $result4["name"];  ?></td>
                         <td><?php echo $result4["manufacturer"];  ?></td>
                        <td><?php echo $result4["administration"];  ?></td>
                         <td><?php echo $result4["type"];  ?></td>
                        <td><?php echo $result4["quantity"];  ?></td>
                        <td><?php echo $result4["description"];  ?></td>    <td><?php echo $result4["expiry_date"];  ?></td>
                        <td class="text-center">
                            <div><a class="btn btn-danger btn-sm text-white" role="button" href="delete.php?view=<?php echo $result4["drug_id"]; ?>" style="padding-top:0px;padding-bottom:0px; font-size:12px;">Delete</a></div>
                            <div><a class="btn btn-info btn-sm text-white" role="button" href="delete.php?exp=<?php echo $result4["drug_id"]; ?>" style="padding-top:0px;padding-bottom:0px; font-size:12px;">Expired</a></div></td>
                    </tr>
                </tbody>
                <?php
                };
                ?>
            </table>
        </div>
    </div>
    <div class="footer-basic" style="padding-top: 20px;padding-bottom: 20px;background-color: rgb(79,167,70);color: rgb(255,255,255);margin-top: 50px;">
        <footer>
            <p class="copyright" style="color: rgb(255,255,255);letter-spacing: 1px;">Drug Monitoring System © 2021</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/smart-forms.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>