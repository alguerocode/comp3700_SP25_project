


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="./global.css"> -->
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <!-- <link rel="stylesheet" href="./about-us.css"> -->
    <link rel="icon" type="image/x-icon" href="/public/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <title>Hajz | About US</title>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">  <!-- my change --> 

    <!-- adding java scipt code -->  
    <script>   
        // JavaScript array to dynamically create the table
        const aboutDetails = [
          { item: "Our Names:", information: "Salah Alhashmi" },
          { item: "", information: "Qusai Al Kalbani" },
          { item: "", information: "Al-tariq Alhajri" },
          { item: "Phone Number:", information: "+968 7777 7777" },
          { item: "Purpose:", information: "To innovate and deliver high-quality solutions" },
          { item: "Location:", information: "Muscat, Oman" },
          { item: "Instagram:", information: "@thismyprofile" }
        ];
      
        // when loading the page dyanic render the table
        window.onload = function () {
          // select table body
          const tableBody = document.getElementById("details-table-body");
          
          // go throw every detail information and render it as row
          aboutDetails.forEach(detail => {
            const row = document.createElement("tr");
    
            const itemCell = document.createElement("td");
            itemCell.textContent = detail.item;
    
            const infoCell = document.createElement("td");
            infoCell.textContent = detail.information;
            
            // construct the row and append it to table body
            row.appendChild(itemCell);
            row.appendChild(infoCell);
            
            tableBody.appendChild(row);
          });
        };
      </script>
</head>
<body>
    <?php include("shared/navbar.php"); ?>


    <div class="hero">


    <!-- Main Content -->
  <div class="container mt-5">
    <div class="text-center mb-4">
      <h1>About Us</h1>
      <p>A platform where organizers can create and manage events, sell tickets, and track attendance, while users can browse upcoming events, purchase tickets securely, and receive digital passes for entry.</p>
    </div>

    <div>
      <h2>Our Details</h2>
      <table class="table table-bordered">
        <thead class="table-light">
          <tr>
            <th>Item</th>
            <th>Information</th>
          </tr>
        </thead>
        <tbody id="details-table-body">
          <!-- this Content will be inserted by JavaScript -->
        </tbody>
      </table>
    </div>
    <p class="mt-4">
      For further information, feel free to reach us via email:
      <a href="mailto:s146201@student.squ.edu.om">s146201@student.squ.edu.om</a>
    </p>
  </div>
  <div class="w-100 d-flex" style="justify-content: center;">
    <a href="/questionnaire.html">
    <button id="calculator-btn" class="btn my-3 w-100"
    style="background-color: #6518ff; color: white; margin:auto; max-width: 400px;"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="me-4 bi bi-question-square" viewBox="0 0 16 16">
        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
        <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286m1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94"/>
      </svg>See questionnaire Form</button>
    </div>
        
      </a>
    </div>
    <?php include("shared/footer.php"); ?>
</body>
</html>
