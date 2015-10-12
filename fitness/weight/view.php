<?php
session_start();
  $weight = $_SESSION['weight'];
  if($_POST){
    unset($weight[$_POST['id']]);
    $_SESSION['weight'] = $weight;
    header('Location: ./');
  }
  
  $log = $weight[$_REQUEST['id']];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Weight Log: Delete</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" type="text/css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="../style/stylesheet.css" />
  </head>
  <body>
    <div class="container">

        <div class="page-header">
          <h1>Weight View</h1>
        </div>
        
        <ul>
            <li>Weight: <?=$log['Weight']?></li>
            <li>BMI: <?=$log['BMI']?></li>
            <li>Time: <?=date("M d Y  h:i:sa", $log['Time'])?></li>
            <li>Weight Change: <?=$log['Change']?></li>
        </ul>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript">
      (function($){
        $(function(){
          
        });
      })(jQuery);
    </script>
  </body>
</html>