$(function () {
    $("form").validate();
  });

  $( "form" ).on( "submit", function(e) {
 
    var dataString = $(this).serialize();
     
    // alert(dataString); return false;
 
    $.ajax({
      type: "POST",
      url: "add.php",
      data: dataString,
    });
    e.preventDefault();
  });
