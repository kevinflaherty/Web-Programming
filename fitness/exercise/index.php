<?php
session_start();
    $name = 'John Doe';
    $message = "Welcome $name";
    
    $person = array( 'Name' => $name, 'Age' => 21, BurnedGoal => 2000 );
    
    $exercise = $_SESSION['exercise'];
    if(!$exercise){
      $_SESSION['exercise'] = $exercise = array(
          array( 'Name' => 'Run', 'Amount' => '5 miles', 'Time' => "10/10/2015", Calories => 600 ),
          array( 'Name' => 'Free Weights', 'Amount' => ' 1 hour', 'Time' => "10/11/2015", Calories => 200 ),
          array( 'Name' => 'Kyaking', 'Amount' => ' 30 minutes', 'Time' => "10/11/2015", Calories => 400 ),
          );
    }
        
    $total = 0;
    foreach ($exercise as $workout) {
        $total += $workout['Calories'];
    }
    
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Exercise Tracking</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style/stylesheet.css" />  
  </head>
  <body>
    <div class="container">
      <ul class="nav nav-tabs">
          <li role="presentation"><a href="../index.php">Home</a></li>
          <li role="presentation"><a href="../account.php">Account</a></li>
          <li role="presentation"><a href="../weight">Weight</a></li>
          <li role="presentation" class="active"><a href="#">Exercise</a></li>
          <li role="presentation"><a href="../diet.php">Diet</a></li>
          <li role="presentation"><a href="../stats.php">Stats</a></li>
          <li role="presentation"><a href="../login.php">Login</a></li>
      </ul>
            <h1>Exercise</h1>
            <h2><?=$message?></h2>
            <div class="panel panel-success">
                <div class="panel-heading">Your Data</div>
                <div class="panel-body">
                    <dl class="dl-horizontal">
                        <dt>Name</dt>
                        <dd><?=$person['Name']?></dd>
                        <dt>Age</dt>
                        <dd><?=$person['Age']?></dd>
                        <dt>Calories Burned Goal</dt>
                        <dd><?=$person['BurnedGoal']?></dd>
                        <dt>Total Burned Today</dt>
                        <dd><?=$total?></dd>
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
                  <th>Name</th>
                  <th>Amount</th>
                  <th>Time</th>
                  <th>Calories</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($exercise as $i => $workout): ?>
                <tr>
                  <th scope="row">
                    <div class="btn-group" role="group" aria-label="...">
                      <a href="view.php?id=<?=$i?>" title="View" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
                      <a href="edit.php?id=<?=$i?>" title="Edit" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="delete.php?id=<?=$i?>" title="Delete" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                    </div>
                  </th>
                  <td><?=$workout['Name']?></td>
                  <td><?=$workout['Amount']?></td>
                  <td><?=$workout['Time']?></td>
                  <td><?=$workout['Calories']?></td>
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