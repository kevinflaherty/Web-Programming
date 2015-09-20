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
          <li role="presentation"><a href="account.php">Account</a></li>
          <li role="presentation"><a href="exercise.php">Exercise</a></li>
          <li role="presentation"><a href="diet.php">Diet</a></li>
          <li role="presentation"><a href="stats.php">Stats</a></li>
          <li role="presentation" class="active"><a href="login.php">Login</a></li>
        </ul>
        <div class="jumbotron" id="head">
            <h2>Sign Up</h2>
            <form>
                <div class="form-group">
                    <label for="inputUsername">Username</label>
                    <input type="username" class="form-control" id="inputUsername" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email address</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                </div>
                <div class="form-group">
                    <p class="help-block">Click here to finish registration.</p>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            
            <h3>Already have an account?</h3>
            <form>

                <div class="form-group">
                    <label for="inputEmailLogin">Email address</label>
                    <input type="email" class="form-control" id="inputEmailLogin" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="inputPasswordLogin">Password</label>
                    <input type="password" class="form-control" id="inputPasswordLogin" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-default">Sign In</button>
            </form>
            
        </div>
       <br>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>