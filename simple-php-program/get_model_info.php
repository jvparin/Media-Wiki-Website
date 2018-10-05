<!DOCTYPE html>
<html>
<head>
<title>PHP in HTML Example</title>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php
// Get a connection for the database
require_once('mysqli_connect.php');
 
// Create a query for the database
$query_1 = "SELECT Model FROM software_models";
$query_2 = "SELECT Customer_Availability FROM software_models";
$query_3 = "SELECT Scope FROM software_models";
$query_4 = "SELECT Feature_Prioritization FROM software_models";
$query_5 = "SELECT Team FROM software_models";
$query_6 = "SELECT Funding FROM software_models";
$query_7 = "SELECT Summary FROM software_models";
 
// Get a response from the database by sending the connection
// and the query
$response_1 = @mysqli_query($dbc, $query_1);
$response_2 = @mysqli_query($dbc, $query_2);
$response_3 = @mysqli_query($dbc, $query_3);
$response_4 = @mysqli_query($dbc, $query_4);
$response_5 = @mysqli_query($dbc, $query_5);
$response_6 = @mysqli_query($dbc, $query_6);
$response_7 = @mysqli_query($dbc, $query_7);
 
// If the query executed properly proceed
if($response_1 && $response_2 && $response_3 && $response_4 && $response_5 && $response_6 && $response_7){
 
echo '<table class="table table-bordered">
<thead class="thead-dark">
  <tr>
    <th scope="col">Model Factor</th>';
    while($row = mysqli_fetch_array($response_1)){
      echo '<th scope="col">' . $row['Model'] . '</th>';
    }
echo '</tr>
</thead>';
 
// mysqli_fetch_array will return a row of data from the query
// until no further data is available
echo '<tbody>
<tr>
  <th scope="row">Customer Availability</th>';
  while($row = mysqli_fetch_array($response_2)){
  echo '<td>' . $row['Customer_Availability'] . '</td>';
  }
echo '</tr>
<tr>
  <th scope="row">Scope</th>'; 
  while($row = mysqli_fetch_array($response_3)){
    echo '<td>' .  $row['Scope'] . '</td>';
    }
echo '</tr>
<tr>
  <th scope="row">Feature Prioritization</th>';
  while($row = mysqli_fetch_array($response_4)){
    echo '<td>' .  $row['Feature_Prioritization'] . '</td>';
    }
echo '</tr>
<tr>
  <th scope="row">Team</th>';
  while($row = mysqli_fetch_array($response_5)){
    echo '<td>' .  $row['Team'] . '</td>';
    }
echo '</tr>
<tr>
  <th scope="row">Funding</th>';
  while($row = mysqli_fetch_array($response_6)){
    echo '<td>' .  $row['Funding'] . '</td>';
    }
echo '</tr>
<tr>
  <th scope="row">Summary</th>';
  while($row = mysqli_fetch_array($response_7)){
    echo '<td>' .  $row['Summary'] . '</td>';
    }
echo '</tr>
</tbody>
</table>';
} else {
 
echo "Couldn't issue database query<br />";
 
echo mysqli_error($dbc);
 
}
 
// Close connection to the database
mysqli_close($dbc);
 
?>
</body>
</html>