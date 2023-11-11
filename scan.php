<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scan</title>
</head>

<script src="js/jquery-3.6.0.js"></script>
<script src="js/html5-qrcode.min.js"></script>
<style>
    body{
        overflow: hidden;
        width: 100vw;
        height: 100vh;
        background: url(bg-image2.svg);
        background-size: cover;
        object-position: center;
        background-repeat: no-repeat;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .payment-form{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 90%;
    }
    select{
        width: clamp(280px,50vw,500px);
    }
    h1{
        text-align: center;
        color: rgb(71, 71, 71);
    }

    .container{
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-left: auto;
        margin-right: auto;
        padding: 20px;
        background: rgba(255, 255, 255, 0.5);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(255, 255, 255, 0.5);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }
    
    button{
        margin: 15px auto;
        padding: 13px 15px;
        width: 200px;
        font-size: 1.2rem;
        border: 1px solid white;
        background: rgb(84, 209, 105);
        color: white;
        box-shadow: px 10px rgba(0,0,0,0.2);
        cursor: pointer;
        transform: scale(0.9);
    }
    button:hover{
        transform: scale(1);
    }

    #result{
    padding: 1px;
    font-size: 1.5vw;
    color: #00ff00;
    font-weight: bold;
    background: gray;
    border-radius: 5px;
  }

    @media screen and (max-width: 480px) {
        .container{
        position: relative;
        padding: 2vw;
        width: 90vw;
        margin-left: 2px;
        margin-top: -40vw;
    }
  }

</style>
    <div class="container">
        <h1>UCM ATTENDANCE SOFTWARE</h1>
        <p id="result"></p>
        <div class="paymnet-wrapper">
            <style>
            .main-container{
                display: flex;
                justify-content: center;
                align-items: center;
            }
            </style>
        </div>
        <div class="main-container">
            <div class="wrapper">
                <div class="row">
                    <div class="col">
                        <div style="width:clamp(280px,50vw,500px);" id="reader"></div>
                    </div>
                </div>
                <!-- <script src="script.js"></script> -->
            </div>
        </div>
    </div>

<script type="text/javascript">

    function onScanSuccess(qrCodeMessage) {
    var complete = "S C A N";
        document.getElementById('result').innerHTML = complete;
        $.ajax({
        dataType: 'text',
        method: "POST",
        url: 'insert_scandata.php',
        data: 'data=' + qrCodeMessage,
        success: function(data){
        console.log(data);
        },
        cache: false,
        error: function(xhr, status, error){
        alert(error);
        }
        });
        // html5QrcodeScanner.clear();
    }

    function onScanError(errorMessage) {
    //handle scan error
    }

    var html5QrcodeScanner = new Html5QrcodeScanner(
        "reader", { fps: 1, qrbox: 250 });
    html5QrcodeScanner.render(onScanSuccess, onScanError);

</script>
