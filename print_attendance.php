<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/view.css">
    <link rel="stylesheet" href="css/modal.css">
    <title>Print Attendance</title>
</head>
<body>
        <div class="modal" id="modal">
            <div class='modal__container'>
                <div class="modal__content">
                    <h1 class="modal__title">Print Attendance Table</h1>
                            <p class="modal__paragraph">To print attendance table, please enter the date service was held. Input should be in this format (30_Jun_22)</p>
                            <form action="#" method="post">
                                <input type="text" class="modal__input" name="attendance" id="attendance" placeholder="Eg: 30_Jun_22">
                                <button class="modal__button" type="submit" name="view">Search</button>
                            </form>
                </div>
                <i id="close" class="fas fa-times">
                    <span class="times">&times</span>
                </i>
            </div>
        </div>
            <section class="table-view">

                <div class="table-content">
                <?php
                    error_reporting(false);
                    $regID = "";
                ?>
                <div style="overflow-x:auto;">
                <table>
                    <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone</th>
                        <th>Hostel</th>
                        <th>Location</th>
                    </tr>
        <?php
            if(isset($_POST['view'])) {
                $regID = $_POST['attendance'];
                // $_SESSION['regID'] = $regID;

                include 'connect.php';
                $sql = "SELECT id, fname, lname, phone, hostel, location from {$regID}";
                $result = mysqli_query($con,$sql);

                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["fname"] . "</td><td>" . $row["lname"] . "</td><td>"
                . $row["phone"]. "</td><td>" . $row["hostel"] . "</td><td>" . $row["location"]. "</td></tr>";
                }
                echo "</table>";
                } else { echo "0 results"; }
                $con->close();
            }
         ?>
            <button type="submit" name="button" class="download" id="print-btn" onclick="printPage()">Print Data</button>
    </section>
    <script src="js/app.js" type="text/javascript"></script>
</body>
</html>