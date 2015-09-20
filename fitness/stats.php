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
          <li role="presentation" class="active"><a href="stats.php">Stats</a></li>
          <li role="presentation"><a href="login.php">Login</a></li>
        </ul>
          <div class="row">
              
              <div class="col-md-12 col-xs-12">
                    <h2>Weight</h2>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Weight</th>
                          <th>Weight Gain/Loss Rate</th>
                          <th>Total Change</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">07/02/2015</th>
                          <td>215 lbs</td>
                          <td>0 lbs/month</td>
                          <td>0 lbs</td>
                        </tr>
                        <tr>
                          <th scope="row">08/02/2015</th>
                          <td>210 lbs</td>
                          <td>5 lbs/month</td>
                          <td>5 lbs</td>
                        </tr>
                        <tr>
                          <th scope="row">08/26/2015</th>
                          <td>207 lbs</td>
                          <td>4.6 lbs/month</td>
                          <td>9 lbs</td>
                        </tr>
                      </tbody>
                    </table>
                    
                </div>
                
                <div class="col-md-12 col-xs-12">
                    <h2>Nutrition</h2>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Calories</th>
                          <th>Fat</th>
                          <th>Carbs</th>
                          <th>Fiber</th>
                          <th>Average Daily Caloric Intake</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">07/02/2015</th>
                          <td>2150</td>
                          <td>71g</td>
                          <td>152g</td>
                          <td>38g</td>
                          <td>2150</td>
                        </tr>
                        <tr>
                          <th scope="row">07/03/2015</th>
                          <td>2350</td>
                          <td>68g</td>
                          <td>183g</td>
                          <td>43g</td>
                          <td>2250</td>
                        </tr>
                        <tr>
                          <th scope="row">07/04/2015</th>
                          <td>1938</td>
                          <td>81g</td>
                          <td>144g</td>
                          <td>39g</td>
                          <td>2045</td>
                        </tr>
                      </tbody>
                    </table>
                </div>
                    
                <div class="col-md-12 col-xs-12">
                    <h2>Exercise</h2>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Exercise</th>
                          <th>Time</th>
                          <th>Calories Burned</th>
                          <th>Average Daily Calories Burned</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">07/02/2015</th>
                          <td>Jogging</td>
                          <td>24 mins</td>
                          <td>234</td>
                          <td>234</td>
                        </tr>
                        <tr>
                          <th scope="row">07/03/2015</th>
                          <td>Kayaking</td>
                          <td>60 mins</td>
                          <td>430</td>
                          <td>356</td>
                        </tr>
                        <tr>
                          <th scope="row">07/04/2015</th>
                          <td>Sit Ups</td>
                          <td>10 mins</td>
                          <td>86</td>
                          <td>246</td>
                        </tr>
                      </tbody>
                    </table>
                </div>
                
           </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>