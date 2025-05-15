<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">   

    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="global.css">
    <link rel="icon" type="image/x-icon" href="/public/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

  
 
    <title>Hajz | Contact Us</title>
</head>

<body>
    <?php include("shared/navbar.php"); ?>


        
  <!-- Main Content -->
  <div class="container mt-5 mb-5">
    <h1 class="text-center mb-4">Contact Us</h1>

    <form action="mailto:s146201@student.squ.edu.om" method="post" enctype="text/plain" class="border p-4 rounded shadow-sm bg-light">
      <div class="mb-3">
        <label for="Name" class="form-label">Name:</label>
        <input type="text" id="Name" name="Name" class="form-control" placeholder="Enter your name" required>
      </div>

      <div class="mb-3">
        <label for="Email" class="form-label">Email:</label>
        <input type="email" id="Email" name="Email" class="form-control" placeholder="Enter your email" required>
      </div>

      <div class="mb-3">
        <label for="Subject" class="form-label">Subject:</label>
        <input type="text" id="Subject" name="Subject" class="form-control" placeholder="Enter the subject" required>
      </div>

      <div class="mb-3">
        <label for="Message" class="form-label">Message:</label>
        <textarea id="Message" name="Message" rows="5" class="form-control" placeholder="Write your message" required></textarea>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary me-2">Send</button>
        <button type="reset" class="btn btn-warning">Reset</button>
      </div>
    </form>
    <div class="w-100 d-flex" style="justify-content: center;">
    <a href="/questionnaire.php">
    <button id="calculator-btn" class="btn my-3 w-100"
    style="background-color: #6518ff; color: white; margin:auto; max-width: 400px;"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="me-4 bi bi-question-square" viewBox="0 0 16 16">
        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
        <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286m1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94"/>
      </svg>See questionnaire Form</button>
    </div>
    </div>

</a>

</div>
    <?php include("shared/footer.php"); ?>

    </div>
</body>

</html>