<?php

    ob_start();
    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = $_POST["email"];
        $type = $_POST["type"];
        $feedback = $_POST["feedback"];
        $rating = $_POST["rating"];
        
        include("lib/connect-db.php");

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }



        $confirm = 'Thanks for your feedback';

        $stmt = $conn->prepare("INSERT INTO `hz_feedback`(`email`, `category`, `feedback`, `rating`) VALUES ('$email','$type','$feedback','$rating');");
        $stmt->execute();
        
        
        // header("Location: questionnaire.php?confirm=".urlencode($confirm));
        // exit;



        
    }
    
    ?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
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
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main></main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
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

        <?php include("shared/navbar.php")  ?>


        <div class="container mt-5 p-5 text-center shadow">
            <img src="public/logo.png" width="75" alt="Logo" />
            <h3 >Thank you - <?php if (!empty($email)){echo $email;} ?> -  for sharing your feedback with us</h3>
            <h2 class="mb-5">your feedback has been submitted and will be reviewed by our team</h2>
            <table class="table boarder shadow ">
            <tr>
                <td>Category</td>
                <td>Feedback</td>
                <td>Rating</td>
            </tr>
            <tr>
                <td><?php if (!empty($type)){echo $type;} ?></td>
                <td><?php if (!empty($feedback)){echo $feedback;} ?></td>
                <td><?php if (!empty($rating)){echo $rating;} ?></td>
            </tr>
            </table>
        </div>
    
        <?php include("shared/footer.php")  ?>



    </body>
</html>
