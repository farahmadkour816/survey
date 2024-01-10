<?php

$servername = "localhost";
$username ="root";
$password = "";
$dbname = "employee_surveys";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$checkEmailSql = "SELECT * FROM responses";
$result = $conn->query($checkEmailSql);

// if ($result->num_rows > 0) {
//     // Output data of each row
//     // while ($row = $result->fetch_assoc()) {
//         echo "id: " . $row["id"] . "      /      Name: " . $row["names"] ."      /      email: " . $row["emails"] ."<br>";
//         }
// // 
// else {
//     echo "0 results";
// }

// " - Name: " . $row["firstname"] . " " . $row["lastname"] .

// Close connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Employee Responses</h2>
  <p> </p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
 if ($result->num_rows > 0) {
     while ($row = $result->fetch_assoc()) {
    //   echo "id: " . $row["id"] . "      /      Name: " . $row["names"] ."      /      email: " . $row["emails"] ."<br>";
    echo" <tr>

    <td> ".$row["names"]."</td>
    <td>".$row["emails"]."</td>
    <td><a href='details.php?id=".$row["id"]."'>View</aaaa> </td>
  </tr>";
      }}
 
    else {
      echo "0 results";
     }
     
      ?>
    </tbody>
  </table>
</div>

</body>
</html>



