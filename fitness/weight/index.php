<?php
session_start();
    $name = "John Doe";
    $message = "Welcome $name";
    
    $person = array( 'Name' => $name, 'Age' => 21, WeightGoal => 170 );
    
    $weight = $_SESSION['weight'];
    if(!$weight){
      $_SESSION['weight'] = $weight = array(
          array( Weight => 190, BMI => '25.1', 'Time' => strtotime("-1 hour"),  Change => 0 ),
          array( Weight => 187, BMI => '24.9', 'Time' => strtotime("1 hour"),  Change => -3 ),
          );
    }
    
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Weight Log</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style/stylesheet.css" />  
  </head>
  <body>
    <div class="container">
      <ul class="nav nav-tabs">
          <li role="presentation"><a href="../index.php">Home</a></li>
          <li role="presentation"><a href="../account.php">Account</a></li>
          <li role="presentation" class="active"><a href="#">Weight</a></li>
          <li role="presentation"><a href="../exercise">Exercise</a></li>
          <li role="presentation"><a href="../diet.php">Diet</a></li>
          <li role="presentation"><a href="../stats.php">Stats</a></li>
          <li role="presentation"><a href="../login.php">Login</a></li>
      </ul>
            <h1>Weight Log</h1>
            <h2><?=$message?></h2>
            <div class="panel panel-success">
                <div class="panel-heading">Your Data</div>
                <div class="panel-body">
                    <dl class="dl-horizontal">
                        <dt>Name</dt>
                        <dd><?=$person['Name']?></dd>
                        <dt>Age</dt>
                        <dd><?=$person['Age']?></dd>
                        <dt>Weight Goal</dt>
                        <dd><?=$person['WeightGoal']?></dd>
                    </dl>
                </div>
            </div>
      <div class="row">
        <div class="col-md-12 col-xs-12">
            <a href="edit.php" class="btn btn-success">
                <i class="glyphicon glyphicon-plus"></i>
                New Record
            </a>
            <br />
            <table class="table table-condensed table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Weight(lbs)</th></th>
                  <th>BMI</th>
                  <th>Time</th>
                  <th>Weight Change</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($weight as $i => $log): ?>
                <tr>
                  <th scope="row">
                    <div class="btn-group" role="group" aria-label="...">
                      <a href="view.php?id=<?=$i?>" title="View" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
                      <a href="edit.php?id=<?=$i?>" title="Edit" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="delete.php?id=<?=$i?>" title="Delete" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                    </div>
                  </th>
                  <td><?=$log['Weight']?></td>
                  <td><?=$log['BMI']?></td>
                  <td><?=date("M d Y  h:i:sa", $log['Time'])?></td>
                  <td><?=$log['Change']?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>  
          
        </div>
      </div>
      
            
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>