





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GbolaByte Survey Page</title>
    <!-- CSS -->
    <link href="styles.css" rel="stylesheet">
    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
</head>

<body>




    
    <div class="container">
        <div class="row text-center mt-5">
            <div class="col heading-1">
                <!-- Header image added here -->
                <!-- <img src="your-header-image-url.jpg" alt="Header Image" class="header-image"> -->
                <h1 id="title">Employee survey</h1>
                <p id="description">We are Abu Dhabi Marine – Marina; committed to providing you
                    with the best service possible, so we welcome your comments and
                    suggestions in this survey.
                    Please fill out this questionnaire and send it to our reception in the
                    marina or send it by email to: customerrelations@abudhabimarine.ae.
                    Thank you.
                    <br><br><br><br>
                </p>
            </div>
        </div>
    </div>
    <!-- The Survey Form -->

    <?php
    if(isset($_GET["status"])&& $_GET["status"] =='success'){
    
        echo '<div class="alert alert-success ml-4 mr-4" role="alert">Created successfully!</div>';
    }
    if(isset($_GET["status"])&& $_GET["status"] =='fail'){
    
        echo "Failed!";
    }
    ?>

    <div class="row">

        <div class="col">
            <form action="store.php" method="post" id="survey-form">
                <!-- Rest of your form content here -->
                <div class="form-group">









                    <div class="form-group">
                    
                        <div class="checkbox-">
                            <label>
                            <p>    Please rate the quality of the boat parking service at our marina </p>
                           
                            
                                <label>
                                    
                                    <input type="radio" name="qa" value="1" required>
                                     1 (Weak)
                                </label>
                    
                                <label>
                                    <input type="radio" name="qa" value="2" required>
                                     2
                                </label>
                    
                                <label>
                                    <input type="radio" name="qa" value="3" required>
                                     3
                                </label>
                    
                                <label>
                                    <input type="radio" name="qa" value="4" required>
                                     4
                                </label>
                    
                                <label>
                                    <input type="radio" name="qa" value="5" required>
                                    5 (Very good)
                                </label><br>
                            </label>
                        
                            <br>
                            <p>	Please rate the quality of information given by phone or by
                    email and the wi-fi service.</p>
                    
                        <label>
                            
                            <input type="radio" name="qb" value="1" required>
                             1 (Weak)
                        </label>
                    
                        <label>
                            <input type="radio" name="qb" value="2" required>
                             2
                        </label>
                    
                        <label>
                            <input type="radio" name="qb" value="3" required>
                             3
                        </label>
                    
                        <label>
                            <input type="radio" name="qb" value="4" required>
                             4
                        </label>
                    
                        <label>
                            <input type="radio" name="qb" value="5" required>
                            5 (Very good)
                        </label><br>
                        
                    
                    
                    
                    
                    
                    
                    
                    
                    
                        <br>
                        <p> Our team attitude in the marina was:</p>
                    
                    
                    <br>
                    <p> Courteous?</p>
                    
                    
                    <label>
                    
                    <input type="radio" name="qc" value="yes" required>
                    yes
                    </label>
                    
                    <label>
                    <input type="radio" name="qc" value="no" required>
                    no
                    </label>
                    
                    
                    
                    <br>
                    <p> Informative?</p>
                    </legend>
                    
                    <label>
                    
                    <input type="radio" name="qd" value="yes" required>
                    yes
                    </label>
                    
                    <label>
                    <input type="radio" name="qd" value="no" required>
                    no
                    </label>
                    
                    
                    <br>
                    <p>Prompt and efficient?</p>
                    
                    
                    <label>
                    
                    <input type="radio" name="qe" value="yes" required>
                    yes
                    </label>
                    
                    <label>
                    <input type="radio" name="qe" value="no" required>
                    no
                    </label>
                    
                    
                    <br>
                    <p> Please rate the quality of our call center service.</p>
                    
                    
                    <label>
                    <br>
                    <input type="radio" name="qf" value="1" required>
                    1 (Weak)
                    </label>
                    
                    <label>
                    <input type="radio" name="qf" value="2" required>
                    2
                    </label>
                    
                    <label>
                    <input type="radio" name="qf" value="3" required>
                    3
                    </label>
                    
                    <label>
                    <input type="radio" name="qf" value="4" required>
                    4
                    </label>
                    
                    <label>
                    <input type="radio" name="qf" value="5" required>
                    5 (Very good)
                    </label><br>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                     </div>
                    
                     <!--Checkboxes-->
                    
                     <br><br>
                    <p>Please fill with your details</p>
                    
                    
                     <label for="name"  id="name-label">Name</label>
                     <input type="name" name="name" class="form-control" id="name" placeholder="Enter your name " required="required">
                     </div>
                    <div class="form-group">
                     <label for="email"  id="email-label">Email</label>
                     <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required="required">
                     </div>
                    
                    
                    
                    
                     <div class="form-group">
                     <label for="checkbox">Please check the following box agreeing to the terms and conditions</label>
                         <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="conditions" class="custom-control-input" value="yes" id="customCheck1">
                      <label class="custom-control-label" for="customCheck1">i agree to the terms and conditions</label>
                    </div>
                    
                    
                      <br><br>
                      <center><button type="submit" id="submit" class="btn btn-primary w-50">Submit</button></center>
                    <br>
                    </form>
                    <br>
                      <p class="lead font-weight-bold text-center"> Abu Dhabi Marine- 026818882
                        info@abudhabimarine.ae
                        
                        
                        
                        
                       
                        
                    
                        <!--FreeCodeCamp CDN-->
                        <!-- <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script>
                     -->
                    <!--Bootstrap Javascript CDN-->
            
        </div>
    </div>
    <!-- Bootstrap JavaScript CDN -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script> -->
</body>
</html>
