<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>Drug Monitoring System</title>
    <link rel="icon" href="assets/img/icon.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/footer-basic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
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
        <h4 class="text-center border rounded shadow" style="font-weight: bold;">Add Drug</h4>
        <p style="font-size: 14px;">Use the form below to add drugs into your system database.</p>
        <hr>
        <form class="border rounded-0" style="font-size: 14px;" method="post" action="algo.php">
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6" style="padding: 10px;"><label>Drug Name:</label><input class="form-control form-control-sm" type="text" name="dname"></div>
                    <div class="col-md-6" style="padding: 10px;"><label>Quantity:</label><input class="form-control form-control-sm" type="number" name="qty" required></div>
                    <div class="col-md-6" style="padding: 10px;"><label>Manufacturer:</label><input class="form-control form-control-sm" type="text" name="mnf" required></div>
                    <div
                        class="col-md-6" style="padding: 10px;"><label>Administration:</label>
                        <select class="form-control form-control-sm" name="adm" required><optgroup label="administration method"><option value="inhalable" selected="">Inhalable</option><option value="nasal">Nasal</option><option value="oral">Oral</option><option value="rectal">Rectal</option><option value="vaginal">Vaginal</option><option value="injection">Injection</option></optgroup></select>
                    </div>
                    <div class="col-md-6" style="padding: 10px;"><label>Type:</label>
                        <select class="form-control form-control-sm" name="type" required><optgroup label="drug type"><option value="stimulants" selected="">Stimulants</option><option value="hallucinogens">Hallucinogens</option><option value="anesthetics">Anesthetics</option><option value="narcotic">Narcotic</option><option value="inhalants">Inhalants</option><option value="cannabis">Cannabis</option></optgroup></select>
                    </div>
                    
                <div
                    class="col-md-6" style="padding: 10px;"><label>Drug Description:</label><textarea class="form-control form-control-sm" rows="2" name="desc" required></textarea></div>
            <div class="col-md-6" style="padding: 10px;"><label>Expiriy Date:</label><input class="form-control form-control-sm" type="date" name="expiry" required></div>
            <div class="col-md-6 text-center d-lg-flex justify-content-lg-center align-items-lg-center" style="padding: 10px;"><button class="btn btn-info btn-sm" type="submit" name="add">Add Drug</button></div>
    </div>
    </div>
    </form>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
</body>

</html>