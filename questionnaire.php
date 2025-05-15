<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/public/logo.png">
    <!-- Required meta tags -->
    <meta charset="utf-8" />


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/public/logo.png">
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <title>Hajz | Questionnaire </title>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>



    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <title>Hajz | Questioneir</title>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>

</head>

<script type="text/javascript">

    // Function to validate the form
    function validateForm() {
        // setting up the variables for the form elements
        var name = document.getElementById("name");
        var mail = document.getElementById("email");
        var feedback = document.getElementById("feedback");
        var radio1 = document.getElementById("radio1");
        var radio2 = document.getElementById("radio2");
        var radio3 = document.getElementById("radio3");
        var category = document.getElementById("category");
        var radioSelected = false;


        // Validate email
        // check if the email has a valid format (someLetter@.)
        if (mail.value.search("@") == -1 || mail.value.search(".") == -1 || mail.value.search(/[a-zA-Z0-9]/) == -1 || mail.value.search(/\s/) != -1) {
            // invalid email format
            // display an error message
            mail.classList.add('is-invalid');
            // set focus on the email field
            mail.focus();
            // return false to stop the form from submitting
            return false;
        } else {
            // valid email format
            // remove the error message
            mail.classList.remove('is-invalid');
            // add a success message
            mail.classList.add('is-valid');
        }

        // Validate name
        // check if the name has a valid format (3-16 letters only)
        if (name.value.search(/([A-Z]|[a-z]){3,16}/) == -1) {
            // invalid name format
            // display an error message
            name.classList.add('is-invalid');
            // set focus on the name field
            name.focus();
            // return false to stop the form from submitting
            return false;
        } else {
            // valid name format
            // remove the error message
            name.classList.remove('is-invalid');
            // add a success message
            name.classList.add('is-valid');
        }

        // Validate category
        // check if the category is selected
        if (category.value == "") {
            // invalid category format
            // display an error message
            category.classList.add('is-invalid');
            // set focus on the category field
            category.focus();
            // return false to stop the form from submitting
            return false;
        } else {
            // valid category format
            category.classList.remove('is-invalid');
            category.classList.add('is-valid');
        }

        // Validate feedback
        // check if the feedback is not empty
        if (feedback.value.trim() == "") {
            // invalid feedback format
            // display an error message
            feedback.classList.add('is-invalid');
            // set focus on the feedback field
            feedback.focus();
            // return false to stop the form from submitting
            return false;
        } else {
            // valid feedback format
            feedback.classList.remove('is-invalid');
            feedback.classList.add('is-valid');
        }




        // Validate rating
        // check if any radio button is selected
        if (radio1.checked || radio2.checked || radio3.checked) {
            // no error message
            radioSelected = true;
        } else {
            // no radio button is selected
            // display an error message
            radio1.classList.add('is-invalid');
            radio2.classList.add('is-invalid');
            radio3.classList.add('is-invalid');
            // return false to stop the form from submitting
            return false;
        }








        return true;
    }

</script>

<?php include("shared/navbar.php"); ?>
<body>

    
    <div class="container-fluid text-center w-75  p-5 ">

        <div class="row content ">


            <div class="container col-sm-7 rounded-4 border shadow pt-5 ">
                <img src="public/logo.png" width="100" alt="">

                <form id="qForm" onsubmit="return validateForm()" class="needs-validation p-5" novalidate method="post"
                    action="#">

                    <div class="row">
                        <div class="col-sm-1">
                        </div>
                        <div class="col-sm-10 ">
                            <h1 class="mb-3">Hajz</h1>
                            <h1 class="mb-3">Questionnaire Form</h1>
                            <h6 class="mb-5">Please share all details in your feedback</h6>

                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control rounded-4" name="email" id="email"
                                            placeholder="Email" required>
                                        <label for="email" class="form-label">Email</label>
                                        <div class="invalid-feedback">
                                            Please enter a valid email address.
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control rounded-4" name="name" id="name"
                                            placeholder="Name" required>
                                        <label for="name" class="form-label">Name</label>
                                        <div class="invalid-feedback">
                                            Please enter a name.
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="row">

                                <div class="p-2 mb-2">

                                    <h6>Select the correct category of your feedback:</h6>
                                    <select name="groceries" size="1" class="form-select rounded-4 mb-4" id="category"
                                        required>
                                        <option value="" disabled selected>Select a category</option>
                                        <option value="general">General Feedback</option>
                                        <option value="account">Account Related</option>
                                        <option value="experience">Experience Related</option>
                                        <option value="rating">Rating and Improvement</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a feedback category.
                                    </div>
                                </div>
                               



                                <div class="col">
                                    <div class="form-floating mb-4">
                                        <textarea class="form-control rounded-4 h-100 mb-5" name="feedback"
                                            id="feedback" placeholder="Feedback" required></textarea>
                                        <label for="feedback" class="form-label">Feedback</label>
                                        
                                    </div>
                                </div>
                            </div>

                            <label class="p-2 mb-2">Rate Us: </label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radio1"
                                    value="1star" required>
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radio2"
                                    value="2star" required>
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radio3"
                                    value="3star" required>
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>







                            <div>
                                <button type="submit"
                                    class="btn btn-primary p-2 mt-3 mb-3 rounded-4 w-100">Submit</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include("shared/footer.php"); ?>

</body>

</html>