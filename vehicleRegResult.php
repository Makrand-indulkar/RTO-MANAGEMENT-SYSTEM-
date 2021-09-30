<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vehicle Registration Result</title>
</head>
<body>
<?php require_once('header.php'); ?>
<?php
    error_reporting(0);
    session_start();
    require_once('Connection.php');
    $tempNo = $_SESSION['tempNo'];
    $tempNo = $_POST['tempNo'];
    $obj = new Connection();
    $db = $obj->getNewConnection();
    $sql = "SELECT * FROM vehicle WHERE tempNo = '$tempNo' AND status = '1'";
    $result = mysqli_query($db, $sql);
    if($result){
        print("
        <h1>Vehicle Registration Status</h1> <br>
        <h2>Status : Accepted <br></h2>
    ");
    }
    else{
        print("
        <h1>Vehicle Registration Status</h1> <br>
        <h2>Status : Pending <br></h2>
    ");
    }
   
    session_destroy();
?>
<?php require_once('footer.php'); ?>
    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>
</html>