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
          <li role="presentation"><a href="weight">Weight</a></li>
          <li role="presentation"><a href="exercise">Exercise</a></li>
          <li role="presentation" class="active"><a href="diet.php">Diet</a></li>
          <li role="presentation"><a href="stats.php">Stats</a></li>
          <li role="presentation"><a href="login.php">Login</a></li>
        </ul>
        <h1>What have you been eating?</h1>
        <form accept-charset="UTF-8" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden"</div>
            Food Search: <input autocomplete="off" class="text long" id="search" name="search" type="text" value="">
            &nbsp;&nbsp;
            <input class="button" name="commit" type="submit" value="Search">
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