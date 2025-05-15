<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <title>Hajz | Login</title>
</head>

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


    <script>
        
       

        // Function to validate the form
        function validateForm() {
        // setting up the variables for the form elements
        var uname = document.getElementById("uName");
        var pass = document.getElementById("pWord");

        // Validate username
        // making sure the username is between 3 and 16 characters long and contains only letters and numbers
        if (uname.value.search(/^[a-zA-Z0-9]{3,16}$/) == -1) {
            // if the username is invalid, add the is-invalid class and focus on the input field
            uname.classList.add('is-invalid');
            uname.focus();
            // return false to prevent form submission
            return false;
        } else {
            // if the username is valid, remove the is-invalid class and add the is-valid class
            uname.classList.remove('is-invalid');
            uname.classList.add('is-valid');
        }

        // Validate password
        // any non-whitespace password between 8 and 32 characters long
        // starts with (^) a non-whitespace character and ends with ($) a non-whitespace character
        if (pass.value.search(/^\S{8,32}$/) == -1) {
            // if the password is invalid, add the is-invalid class and focus on the input field
            pass.classList.add('is-invalid');
            pass.focus();
            // return false to prevent form submission
            return false;
        } else {
            // if the password is valid, remove the is-invalid class and add the is-valid class
            pass.classList.remove('is-invalid');
            pass.classList.add('is-valid');
        }
        // return true to allow form submission
        return true;
        }
    </script>
<body>
    
    <?php include("shared/navbar.php"); ?>
    

    



    <div class="container-fluid text-center w-100 p-5">
        <div class="row content ">
            <div class="container col-sm-3 text-left rounded-4 border shadow ">
                <form id="loginForm" onsubmit="return validateForm()" class="needs-validation" method="post" action="https://httpbin.org/post" novalidate>
                    <div class="mt-4 mb-4">
                        <img src="/public/logo.png" width="75" alt="Logo">
                    </div>
                    <div>
                        <h1 class="">Hajz</h1>
                        <p class="text-muted">Please enter your name & Password</p>
                    </div>
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-10">
                            <!-- Username Input -->
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control rounded-4" name="username" id="uName" placeholder="username" required>
                                <label for="uName" class="form-label">Name</label>
                                <div class="invalid-feedback">
                                    Please enter a valid username.
                                </div>
                            </div>

                            <!-- Password Input -->
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control rounded-4" name="password" id="pWord" placeholder="password" required>
                                <label for="pWord" class="form-label">Password</label>
                                <div class="invalid-feedback">
                                    Please enter a valid password.
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary rounded-4 w-100">Log In</button>
                        </div>
                    </div>
                    <p class="mt-3">Don't have an account? <a href="sign-in.html">Sign Up</a></p>
                </form>
            </div>
        </div>
    </div>

    <?php include("shared/footer.php"); ?>
    
</body>
</html>