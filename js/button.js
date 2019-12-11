$(document).ready(function() {
  $(".with-color").click(function() {
    if ($(this).hasClass("btn-success")) {
      $(this).addClass("btn-danger");
      $(this).removeClass("btn-success");
      if ($(this).is("#trigger2")) {
        $.ajax({
          url: "mqtt_conn.php?send=5",
          success: function(result) {

          },
          error: function(xhr) {
            alert("An error occured: " + xhr.status + " " + xhr.statusText);
          }
        });
        $(this).addClass("btn-danger");
        $(this).removeClass("btn-success");
      }
      if ($(this).is("#trigger")) {
        $.ajax({
          url: "mqtt_conn.php?send=6",
          success: function(result) {

          },
          error: function(xhr) {
            alert("An error occured: " + xhr.status + " " + xhr.statusText);
          }
        });
        $(this).addClass("btn-danger");
        $(this).removeClass("btn-success");
      }


    } else {
      $(this).addClass("btn-success");
      $(this).removeClass("btn-danger");
      if ($(this).is("#trigger2")) {
        $.ajax({
          url: "mqtt_conn.php?send=3",
          success: function(result) {

          },
          error: function(xhr) {
            alert("An error occured: " + xhr.status + " " + xhr.statusText);
          }
        });
        $(this).addClass("btn-success");
        $(this).removeClass("btn-danger");
      }
      if ($(this).is("#trigger")) {
        $.ajax({
          url: "mqtt_conn.php?send=4",
          success: function(result) {

          },
          error: function(xhr) {
            alert("An error occured: " + xhr.status + " " + xhr.statusText);
          }
        });
        $(this).addClass("btn-success");
        $(this).removeClass("btn-danger");
      }
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


  function thHandle(){
    $.ajax({
      url: "th_handler.php",
      success: function(result) {
        var arr = result.split(/,/);
        $("#temperature").html("<b>Temperature:</b> " + arr[0] + " °C");
        $("#humidity").html("<b>Humidity:</b> " + arr[1] + "%");
        $("#th_ts").html("<b>Last update:</b> " + arr[2]);
      }
    });
    $.ajax({
      url: "pir_handler.php",
      success: function(result) {
        $("#motion").html("<b>Last motion detected:</b> <br/> " + result);
      }
    });
  }
  thHandle();
  setInterval(thHandle, 5000);

/*  function longPoll() {
    $.ajax({
      url: "mqtt_subscribe.php",
      success: function(result) {
        longPoll();
        $("#motion").val(result);
      }
    });
  }
      setTimeout(longPoll(), 2000);
      */
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
