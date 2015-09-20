<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Fitness Tracker Extreme</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="style/stylesheet.css" />  
  </head>
  <body>
    
    <div class="container">
        
        <ul class="nav nav-tabs">
          <li role="presentation"><a href="index.php">Home</a></li>
          <li role="presentation" class="active"><a href="account.php">Account</a></li>
          <li role="presentation"><a href="exercise.php">Exercise</a></li>
          <li role="presentation"><a href="diet.php">Diet</a></li>
          <li role="presentation"><a href="stats.php">Stats</a></li>
          <li role="presentation"><a href="login.php">Login</a></li>
        </ul>
        <h1>Account</h1>
          <div class="row">
              
              <div class="col-md-12 col-xs-12">
                    <h3>Report your weight loss!</h3>
                    <form>
                        
                        <div class="form-group">
                            <label for="inputWeight">New Weight</label>
                            <input type="text" class="form-control" id="inputWeight" placeholder="Weight(lbs)">
                        </div>
                        
                        <button type="submit" class="btn btn-default">Update</button>
                    </form>
                </div>
                
                <div class="col-md-12 col-xs-12">
                    <h3>Update your information.</h3>
                    <form>
                        
                        <div class="form-group">
                            <label for="inputBirthday">Birthday</label>
                            <input type="date" class="form-control" id="inputBirthday" placeholder="dd/mm/yyyy">
                        </div>
                        
                        <div class="form-group">
                            <label for="inputHeight">Height(Feet)</label>
                            <input type="text" class="form-control" id="inputHeight" placeholder="Ex. 5'10">
                        </div>
                        
                        <div class="form-group">
                            <input type="radio" name="sex" value="male" checked> Male
                            <br>
                            <input type="radio" name="sex" value="female"> Female
                        </div>
                        <button type="submit" class="btn btn-default">Update</button>
                    </form>
                </div>
                
                
                
           </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>