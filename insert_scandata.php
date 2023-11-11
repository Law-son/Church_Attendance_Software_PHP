<?php

if(isset($_POST['data'])){
        $username = $_POST['data'];
        include 'scan.php';
        include 'index.php';
        include 'connect.php';
        echo($date);
        $con = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

        $sql = "INSERT INTO {$date} (username, fname, lname, phone, hostel, location)
                        SELECT username, fname, lname, phone, hostel, location FROM members WHERE (username = '$username')
                        ";
        $result = mysqli_query($con,$sql);
}

?>