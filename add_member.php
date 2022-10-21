<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/add.css">
    <title>Add Member</title>
</head>
<body>
    <div class="container">
        <div class="sub-container">
            <form method="" action="">
                <p class="input-area">
                        <input type="text" class="input" name="username" id="qr-data" placeholder="Username" onchange="generateQR()" required>
                </p>
                <p class="input-area">
                        <input type="text" class="input" name="fname" placeholder="First Name" required>
                </p>
                <p class="input-area">
                        <input type="text" class="input" name="lname" placeholder="Last Name" required>
                </p>
                <p class="input-area">
                        <input type="text" class="input" name="phone" placeholder="Phone Number" required>
                </p>
                <p class="input-area">
                        <input type="text" class="input" name="hostel" placeholder="Hostel/Residence" required>
                </p>
                <p class="input-area">
                        <input type="text" class="input" name="location" placeholder="Location" required>
                </p>
                <p class="input-area">
                        <input type="submit" class="input" name="submit" value="Submit" id="modal-btn">
                </p>
                <p class="marquee-area">
                    <div class="marq">
                        <marquee>UCM Attendance Software</marquee>
                    </div>
                </p>
</form>
        </div>
    </div>


    <style>
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
  border-radius: 10px;
}

.qrc{
  margin-left: clamp(18vw, 50vw, 12vw);
}

.p-text{
  color: #00ff00;
  text-align: center;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

@media screen and (max-width: 480px) {
  .qrc{
      margin-left: -2vw;
      margin-right: 2vw;
}
  }
</style>

<!-- The QR Code Modal -->
<div id="myqrModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="page-content">
            <div class="form-v4-content">
                <div>
                  <p class="p-text" style="font-size: 20px; padding: 30px;">REGISTRATION SUCCESSFUL</p>
                </div>
                <div id="qrcode" class="qrc"></div>
                <div>
                  <p style="color:black; padding: 30px; text-align: center;">Right click the QR Code to save the image.</p>
                </a>
                </div>
            </div>
        </div>
  </div>

</div>

<script src="js/qrcode.min.js"></script>
<script>
  // Get the modal
  var qrmodal = document.getElementById("myqrModal");

  // Get the button that opens the modal
  var mbtn = document.getElementById("modal-btn");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

    //QR Code 
    var qrcode = new QRCode(document.getElementById("qrcode"),{
      width: 240,
      height: 240,
      colorDark: "#000000",
      colorLight: "#ffffff",
    });

    //get id of input
    var qrdata = document.getElementById("qr-data");

    //generate with new input value
    function generateQR(){
    var data = qrdata.value;
    qrcode.makeCode(data);
    }


  // When the user clicks the button, open the modal 
  mbtn.onclick = function() {
    qrmodal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    qrmodal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if(event.target == qrmodal){
      qrmodal.style.display = "none";
    }
  }

</script>
    
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/add.js"></script>


</body>
</html>