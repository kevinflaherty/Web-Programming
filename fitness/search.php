<?
var mysql = require("mysql");
$query = $_GET['query'].'%';

$conn = GetConnection();
$stmt = $conn->prepare('SELECT name FROM FitnessTracker_Meal WHERE name LIKE = :query');
$stmt->bindParam(':query', $query, PDO::PARAM_STR);
$stmt->execute();


$results = array();
foreach ($stmt->fetchAll(PDO::FETCH_COLUMN) as $row) {
    $results[] = $row;
}

return json_encode($results);

function GetConnection(){
        var conn = mysql.createConnection({
          host: "localhost",
          user: "Kevin",
          password: "admin06",
          database: "c9"
        });
    return conn;
}