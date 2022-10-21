<?php
$success = 0;
$user = 0;
    if($_SERVER['REQUEST_METHOD']=='POST'){
        include 'connect.php';
        
        $username = $_POST['username'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $hostel = $_POST['hostel'];
        $location = $_POST['location'];

        $sql = "select * from `members` where username='$username'";

        $result = mysqli_query($con,$sql);
        if($result){
            $num = mysqli_num_rows($result);
            if($num > 0){
                echo '<script>alertP("Sorry, Username already exists");</scrip>';
                $user = 1;
            }
            else{
                $sql = "insert into `members`(username,fname,lname,phone,hostel,location) values('$username','$fname','$lname', '$phone', '$hostel', '$location')";
                $result = mysqli_query($con,$sql);

                if($result){
                    // echo "Signup successfully";
                    // $success = 1;
                    header('location:add_member.php');
                }
                else{
                    die (mysqli_error($con));
                }
            }
        }
    }
?>
