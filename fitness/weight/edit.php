<?php
session_start();
  $weight = $_SESSION['weight'];
  if($_POST){
    if(isset($_GET['id'])){
      $weight[$_GET['id']] = $_POST;
    }else{
      $weight[] = $_POST;
    }
    
    $_SESSION['weight'] = $weight;
    header('Location: ./');
  }
    
  if(isset($_GET['id'])){
    $log = $weight[$_GET['id']];
  }else{
    $log = array();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Weight Log: Edit</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" type="text/css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="../style/stylesheet.css" />
  </head>
  <body>
    <div class="container">

        <div class="page-header">
          <h1>Weight <small>Record your weight</small></h1>
        </div>
        <form class="form-horizontal" action="" method="post" >
          <div class='alert' style="display: none" id="myAlert">
            <button type="button" class="close" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h3></h3>
          </div> 
          <div class="form-group">
            <label class="col-sm-2 control-label" for="txtWeight">Weight</label>
            <div class="col-sm-10">
                  <input type="number" step="any" class="form-control" id="txtWeight" name="Weight" placeholder="Weight(lbs)"  value="<?=$log['Weight']?>">
            </div>
          </div>
          <div class="form-group">
            <label for="txtBMI" class="col-sm-2 control-label">BMI</label>
            <div class="col-sm-10">
              <input type="number" step="any" class="form-control" id="txtBMI" name="BMI" placeholder="BMI" value="<?=$log['BMI']?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="txtChange">Weight Change</label>
            <div class="col-sm-10">
                  <input type="number" step="any" class="form-control" id="txtChange" name="Change" placeholder="Weight(lbs)"  value="<?=$log['Change']?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="txtDate">Date</label>
            <div class="col-sm-10">
                  <input type="text" class="form-control date" id="txtDate" name="Time" placeholder="Date"  value="<?=$log['Time']?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success" id="submit">Record</button>
            </div>
          </div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript">
      (function($){
        $(function(){
          
          $("#submit").on('click', function(e){
            var self = this;
            //$(self).css({display: "none"});
            $(self).hide().after("Working...");
            
            var per = 0;
            var interval = setInterval(function(){
              per += 25;
              $(".progress-bar").css("width", per + "%");
              $(".progress-bar span").text(per);
              if(per >= 100){
                clearInterval(interval);
                
                if( !$("#txtDate").val() ){
                  $("input").css({ backgroundColor: "#FFAAAA"});
                  $(self).prop("disabled", false).html("Try Again");
                  $("#myAlert").removeClass("alert-success").addClass("alert-danger").show()
                    .find("h3").html("You must enter a date");
                  toastr.error("You must enter a date");
                  
                }else{
                  // Display success
                  $("#myAlert").removeClass("alert-danger").addClass("alert-success").show()
                    .find("h3").html("Yay! You did it.");
                  toastr.success("Yay! You did it.")
                  
                }
                
                
              }
            }, 200);
            //return false;
          });
          $(".close").on('click', function(e) {
              $(this).closest(".alert").slideUp()
          });
          $("input[type='number']").spinner();
          $("input.date").datepicker();
        });
      })(jQuery);
    </script>
  </body>
</html>