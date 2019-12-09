$(document).ready(function() {
  $(".with-color").click(function() {
    if ($(this).hasClass("btn-success")) {
      $(this).addClass("btn-danger");
      $(this).removeClass("btn-success");
      $(this).removeClass("btn-warning");
    } else {
      $(this).addClass("btn-success");
      $(this).removeClass("btn-danger");
      $(this).removeClass("btn-warning");
    }
  });

  $(".pushme-light").click(function() {
    $(this).text(function(i, v) {
      return v === "LIGHT ON" ? "LIGHT OFF" : "LIGHT ON";
    });
  });

  $(".pushme-fan").click(function() {
    $(this).text(function(i, v) {
      return v === "FAN ON" ? "FAN OFF" : "FAN ON";
    });
  });
});

$(document).ready(function() {
  $("trigger").click(function() {
    $.ajax({
      url: "mqtt_conn.php",
      success: function(result) {
        alert(result);
      },
      error: function(xhr) {
        alert("An error occured: " + xhr.status + " " + xhr.statusText);
      }
    });
  });
});

// First part can be used for GET/POST requests 
//
//$.ajax({
//   type: "POST",
//   url: "/ajax/request.html",
//   data: {action: 'test'},
//   dataType:'JSON', 
//   success: function(response){
//       console.log(response.blablabla);
//       // put on console what server sent back...
//   }
// });

// and the php part can be so:

// <?php
//   if(isset($_POST['action']) && !empty($_POST['action'])) {
//       echo json_encode(array("blablabla"=>$variable));
//   }
// ?>
