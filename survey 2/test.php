<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="user.css" rel="stylesheet">
   
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password</p>

              <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "employee_surveys";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $loginMessage = ""; // Initialize login message variable

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $enteredEmail = $_POST["typeEmailX"];
                    $enteredPassword = $_POST["typePasswordX"];

                    $checkUserSql = "SELECT * FROM users WHERE email = '$enteredEmail' AND password = '$enteredPassword'";
                    $result = $conn->query($checkUserSql);

                    if ($result->num_rows > 0) {
                        $loginMessage = "<p class='text-success'>Login successful!</p>";
                    } else {
                        $loginMessage = "<p class='text-danger'>Invalid email or password</p>";
                    }
                }

                // Close the database connection
                $conn->close();
              ?>

              <?php echo $loginMessage; ?>

              <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <!-- Centered Email text box -->
                <div class="form-outline form-white mb-4 mx-auto">
                  <input type="email" name="typeEmailX" class="form-control form-control-lg" />
                  <label class="form-label" for="typeEmailX">Email</label>
                </div>

                <!-- Password text box -->
                <div class="form-outline form-white mb-4">
                  <input type="password" name="typePasswordX" class="form-control form-control-lg" />
                  <label class="form-label" for="typePasswordX">Password</label>
                </div>

                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                <button type="submit" class="btn btn-outline-light btn-lg px-5" name="submit">Login</button>
              </form>

              <?php
                if (isset($loginMessage) && strpos($loginMessage, "successful") !== false) {
                    // Only display the link if the login was successful
                   
                    echo '<a href="http://localhost/survey%202/data.php" class="btn btn-outline-light btn-lg px-5">Continue to Data</a>';
                }
              ?>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
