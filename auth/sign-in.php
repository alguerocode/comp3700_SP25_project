<?php

    ob_start();
    if($_SERVER["REQUEST_METHOD"] === "POST" && ( !empty( $_POST["username"]) ||!empty( $_POST["password"] ))) {

        $error_message = "";
        $works = '';

        include("../lib/connect-db.php");

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $email = $_POST["username"];
        $password = $_POST["password"];


        $stmt = $conn ->prepare("SELECT * FROM `hz_user` WHERE `email` =  '$email' AND `password` = '$password';");
        $stmt -> execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ( $result) {
            $error_message = 'Account already exists';
        } 
        else {
            $stmt = $conn->prepare("INSERT INTO `hz_user`( `email`, `password`) VALUES ('$email','$password');");
            $stmt->execute();
            $works = 'Account created!';
            

        }

        

    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hajz | Register</title>
    <link rel="icon" type="image/x-icon" href="/public/logo.png">


    <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"
    ></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"
    ></script>

        <link rel="icon" type="image/x-icon" href="/public/logo.png">
     <!-- Required meta tags -->
     <meta charset="utf-8" />
     <meta
         name="viewport"
         content="width=device-width, initial-scale=1, shrink-to-fit=no"
     />

     <!-- Bootstrap CSS v5.2.1 -->
     <link
         href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
         rel="stylesheet"
         integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
         crossorigin="anonymous"
     />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

</head>



<script>
        
    // Function to validate the form
    function validateForm() {
    // setting up the variables for the form elements
    var uname = document.getElementById("uName");
    var pass = document.getElementById("pWord");
    var box1 = document.getElementById("check1");
    var box2 = document.getElementById("check2");
    var box3 = document.getElementById("check3");

    // Validate username
    // making sure the username is between 3 and 16 characters long and contains only letters and numbers
    if (uname.value.search(/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/) == -1) {
        // invalid username
        // add the invalid class to the username input field
        uname.classList.add('is-invalid');
        // focus on the username input field
        uname.focus();
        // return false to prevent form submission
        return false;
    } else {
        // valid username
        // remove the invalid class and add the valid class
        uname.classList.remove('is-invalid');
        uname.classList.add('is-valid');
    }

    // Validate password

    // any non-whitespace password between 8 and 32 characters long
    // starts with (^) a non-whitespace character and ends with ($) a non-whitespace character
    if (pass.value.search(/^\S{8,32}$/) == -1) {
        // invalid password
        // add the invalid class to the password input field
        pass.classList.add('is-invalid');
        // focus on the password input field
        pass.focus();
        // return false to prevent form submission
        return false;
    } else {
        // valid password
        // remove the invalid class and add the valid class
        pass.classList.remove('is-invalid');
        pass.classList.add('is-valid');
    }

    // Validate checkboxes
    // checks if all checkboxes are checked
    // if not checked, add the invalid class and focus on the checkbox that is not checked
    if (box1.checked == false) {
        box1.classList.add('is-invalid');
        box1.focus();
        return false;
    } else {
        box1.classList.remove('is-invalid');
        box1.classList.add('is-valid');
    }

    if (box2.checked == false) {
        box2.classList.add('is-invalid');
        box2.focus();
        return false;
    } else {
        box2.classList.remove('is-invalid');
        box2.classList.add('is-valid');
    }

    if (box3.checked == false) {
        box3.classList.add('is-invalid');
        box3.focus();
        return false;
    } else {
        box3.classList.remove('is-invalid');
        box3.classList.add('is-valid');
    }

    
    // If all validations pass, return true to allow form submission
    return true;
    }
</script>
<body>

        <?php include("../shared/navbar.php"); ?>

    <div class="container-fluid text-center w-100  p-5 ">

        <div class="row content ">

            
            <div class="container col-sm-3 rounded-4 border shadow ">

                <form  id="signupForm" onsubmit="return validateForm()" class="needs-validation" novalidate method="post" 
                action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  >
                <div class="mt-4 mb-4">
                    
                    <img src="/public/logo.png" width="75" alt="Logo">
                    
                </div>
                
                
                <div>
                    <h1 class="">Hajz</h1>
                    <p class="text-muted">Please enter your Email & Password</p>
                </div>
                <div class="row">
                    <div class="col-1">
                    </div>
                    <div class="col-10 ">
                        
                        <div class="form-floating mb-3 mt-3">
                
                            <input type="text" class="form-control rounded-4 " name="username" id="uName" placeholder="Email" required>
                            <label for="uName" class="form-label">Email</label>
                            <div class="invalid-feedback">Please enter a valid Email.</div>
                            
                        </div>
                        <div class="form-floating mb-4 ">
                            <input type="password" class="form-control rounded-4" name="password" id="pWord" placeholder="password" required>
                            <label for="pWord" class="form-label">Password</label>
                            <div class="invalid-feedback">Please enter a valid password.</div>
                        </div>
                        <div class="test-center mb-4">
                            <div class="form-check mb-1 text-start">
                                <input class="form-check-input" type="checkbox" id="check1"  name="CheckOne" value="cantSue" required >
                                <label class="form-check-label text-start" for="myCheck">I cant sue you</label>
                            </div>
            
                            <div class="form-check mb-1 text-start">
                                <input class="form-check-input" type="checkbox" id="check2" name="CheckTwo" value="noRights" required >
                                <label class="form-check-label text-start" for="myCheck">I give up all of my rights</label>
                            </div>
            
                            <div class="form-check mb-3 text-start">
                                <input class="form-check-input" type="checkbox" id="check3" name="CheckThree" value="Spam" required >
                                <label class="form-check-label text-start" for="myCheck">Please send me spam mails</label>
                            </div>
                            <button type="submit" class="btn btn-primary rounded-4 w-100">Sign Up</button>
                        </div>
                    </div>
                </div> 
                <?php if (!empty($error_message)): ?>
                        <p class="text-danger"><?= $error_message ?></p>
                <?php endif; ?>
                <?php if (!empty($works)): ?>
                        <p class="text-success"><?= $works ?> <a href="login.php">Log In</a></p>
                <?php endif; ?>
                <p>Already have an account? <a href="login.php">Log In</a></p>
                </form>
            </div>  
        </div>
    </div>


    <?php include("../shared/footer.php"); ?>
    
</body>
</html>