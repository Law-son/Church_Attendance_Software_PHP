function onScanSuccess(qrCodeMessage) {
    $.ajax({
        url: 'insert_scandata.php',
        method: 'post',
        data: {
            query: qrCodeMessage
        },
        dataType: 'text',
        success: function(data){
            console.log(data);
            },
            cache: false,
            error: function(xhr, status, error){
            alert(error);
            }
    });
}

function onScanError(errorMessage) {
    //handle scan error
}

var html5QrcodeScanner = new Html5QrcodeScanner(
    "reader", {
    fps: 10,
    qrbox: 250
});
html5QrcodeScanner.render(onScanSuccess, onScanError);



