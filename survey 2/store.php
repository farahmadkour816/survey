<?php
// echo "hi";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $qa = isset($_POST["qa"]) ? $_POST["qa"] : "";

  
    $qb = isset($_POST["qb"]) ? $_POST["qb"] : "";

    
    $qc = isset($_POST["qc"]) ? $_POST["qc"] : "";

    $qd = isset($_POST["qd"]) ? $_POST["qd"] : "";
    $qe = isset($_POST["qe"]) ? $_POST["qe"] : "";

    
    $qf = isset($_POST["qf"]) ? $_POST["qf"] : "";

   
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";

    $agreeTerms = isset($_POST["conditions"]) ? "Yes" : "No";

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

$checkEmailSql = "SELECT * FROM responses WHERE emails = '$email'";
// echo $checkEmailSql;
// die();
$checkEmailResult = $conn->query($checkEmailSql);


if ($checkEmailResult->num_rows > 0) {
    // output data of each row
    echo "You have already submitted the survey.";
} else {
  
$sql = "INSERT INTO responses (qa, qb, qc, qd, qe, qf, names , emails, checkbox)
VALUES ($qa, $qb, '$qc','$qd', '$qe', $qf,'$name','$email','$agreeTerms')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location: index.php?status=success");
  
        exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  header("Location: index.php?status=fail");
        exit();
}

$conn->close();
   
// if ($msg === "success") {
//     echo <<<HTML
//         <p style='color: green;'>Operation was successful!</p>
// HTML;
// } else {
//     echo <<<HTML
//         <p style='color: red;'>An error occurred. Please try again.</p>
// HTML;
// } 


// echo "hiiii";

   
    // $surveyData = array(
    //     "service" => $qa,
    //     "rating" => $qb,
    //     "teamAttitudeCourteous" => $qc,
    //     "teamAttitudeInformative" => $qd,
    //     "teamAttitudePromptEfficient" => $qe,
    //     "callCenterServiceRating" => $qf,
    //     "name" => $name,
    //     "email" => $email,
    //     "conditions" => $agreeTerms
    // );

   
    // echo "<pre>";
    // print_r($surveyData);
    // echo "</pre>";
    
}}
?>
