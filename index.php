<?php
    error_reporting(false);
    // Get current date and save into a variable
    date_default_timezone_set('Africa/Accra');
    $day = date('d');
    $month = date('m');
    $year = date('y');

    $months = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
    $date = strval($day)."_".$months[($month) -1]."_".$year;
    // echo($date);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <div class="sub-container">
            <form method="POST">
                <p class="btn-area">
                    <a href="scan.php">
                        <input type="submit" class="btn" name="scan" value="Scan">
                    </a>
                </p>
                <p class="btn-area">
                    <a href="add_member.php">
                        <input type="submit" class="btn" name="add" value="Add Member">
                    </a>
                </p>
                <p class="btn-area">
                    <a href="view_member.php">
                        <input type="submit" class="btn" name="view" value="View Attendance">
                    </a>
                </p>
                <p class="btn-area">
                    <a href="print_attendance.php">
                        <input type="submit" class="btn" name="print" value="Print Attendance">
                    </a>
                </p>
                <p class="marquee-area">
                    <div class="marq">
                        <marquee>UCM Attendance Software</marquee>
                    </div>
                </p>
</form>
        </div>
    </div>

    <?php
        if(isset($_POST['scan'])){
            include 'connect.php';
            $con = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
            
        
            $sql = "CREATE TABLE {$date} (
                id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(50) unique,
                fname VARCHAR(50),
                lname VARCHAR(50),
                phone VARCHAR(10),
                hostel VARCHAR(100),
                location VARCHAR(100)
            )";
        
            // create table and check result
            if (mysqli_query($con, $sql)) {
                header('location:scan.php');
            } else {
                // echo "Could not create table. Error: " . mysqli_error($con);
            }    
        }
        if(isset($_POST['add'])){
            header('location:add_member.php');
        }
        if(isset($_POST['view'])){
            header('location:view_member.php');
        }
        if(isset($_POST['print'])){
            header('location:print_attendance.php');
        }
    ?>
</body>
</html>