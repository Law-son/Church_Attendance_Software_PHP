<?php
$HOSTNAME = 'sql302.epizy.com';
$USERNAME = 'epiz_32852402';
$PASSWORD = 'qGwHgX1ITDIz';
$DATABASE = 'epiz_32852402_ucm_attendance';

$con = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if(!$con){
    die (mysqli_error($con));
}
?>