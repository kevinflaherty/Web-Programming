<?php
session_start();
  $exercise = $_SESSION['exercise'];
  if($_POST){
    if(isset($_GET['id'])){
      $exercise[$_GET['id']] = $_POST;
    }else{
      $exercise[] = $_POST;
    }
    
    $_SESSION['exercise'] = $exercise;
    header('Location: ./');
  }
    
  if(isset($_GET['id'])){
    $workout = $exercise[$_GET['id']];
  }else{
    $workout = array();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Exercise Log: Edit</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" type="text/css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="../style/stylesheet.css" />
  </head>
  <body>
    <div class="container">

        <div class="page-header">
          <h1>Exercise <small>Record your daily workouts</small></h1>
        </div>
        <form class="form-horizontal" action="" method="post" >
          <div class='alert' style="display: none" id="myAlert">
            <button type="button" class="close" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h3></h3>
          </div> 
          <div class="form-group">
            <label for="txtName" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="txtName" name="Name" placeholder="Ex. Run, Bike, Weights...etc" value="<?=$workout['Name']?>">
            </div>
          </div>
          <div class="form-group">
            <label for="txtAmount" class="col-sm-2 control-label">Amount</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="txtName" name="Amount" placeholder="Ex. 5 miles, 2 hours...etc" value="<?=$workout['Name']?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="txtCalories">Calories</label>
            <div class="col-sm-10">
                  <input type="number" class="form-control" id="txtCalories" name="Calories" placeholder="Calories burned"  value="<?=$workout['Calories']?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="txtDate">Date of workout</label>
            <div class="col-sm-10">
                  <input type="text" class="form-control date" id="txtDate" name="Time" placeholder="Date"  value="<?=$workout['Time']?>">
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