<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <!-- <link rel="stylesheet" href="./global.css"> -->
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <link rel="icon" type="image/x-icon" href="/public/logo.png">
    <title>Hajz | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">  <!-- my change --> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous" defer></script>
        <style>
            .scrolling-banner {
              white-space: nowrap;
              overflow: hidden;
              box-sizing: border-box;
            }
            .scrolling-text {
              display: inline-block;
              animation: scroll-left 10s linear infinite;
            }
            @keyframes scroll-left {
              0% {
                transform: translateX(100%);
              }
              100% {
                transform: translateX(-100%);
              }
            }
          </style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Modal -->
    <!-- Button trigger modal -->
    <button type="button" id="open-welcome-modal-btn" class="btn visually-hidden btn-primary" data-bs-toggle="modal"
        data-bs-target="#exampleModal">
        lunch welcome message
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Welcome to Hajz Website</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Time: <span id="current-time"></span> </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php include("shared/navbar.php"); ?>
 

    <div class="mt-5 " style="padding: 0 30px; max-width: 1000px; margin: auto;">
        <div class="row justify-content-center">
            <div class="col-sm" style="max-width: 400px;">
                <h1>event ticket system website</h1>

                <p class="fs-6 text-muted fw-normal">A platform where organizers can create and manage events, sell
                    tickets, and track attendance, while users
                    can browse upcoming events, purchase tickets securely, and receive digital passes for entry.</p>

                <div class="d-flex gap-2">
                    <a href="/events/explore.php">
                        <button class="btn"
                            style="background-color: #6518ff; color: #fff; padding: 10px 15px; text-decoration: none; border-radius: 10px; border: 2px solid #6518ff; cursor: pointer;">Get
                            Started</button>
                    </a>

                    <a href="/auth/login.php">
                        <button class="btn"
                            style="background-color: #6518ff; color: #fff; padding: 10px 15px; text-decoration: none; border-radius: 10px; border: 2px solid #6518ff; cursor: pointer;">Login</button>
                    </a>
                </div>
            </div>
            <div class="hero-img col-sm">
                <img src="./public/hero-img.jpg" class="img-fluid w-100" width="300px" height="300px" />
            </div>
        </div>
    </div>

    <div class="d-flex pt-5" style="justify-content: center;background-color: #f5edff;"> 
        <h2 class="fs-2" >Our Gallery</h2>
    </div>

    <div class="w-100" style="background-color: #f5edff;">
    <div id="carouselExampleIndicators" class="carousel slide rounded py-5" data-interval="3000" data-ride="carousel" style="max-width: 600px;margin: auto;background-color: #f5edff;">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" style="aspect-ratio: 16/9; height: 338px;" src="/public/image1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" style="aspect-ratio: 16/9; height: 338px;" src="/public/image2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" style="aspect-ratio: 16/9; height: 338px;" src="/public/image3.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <?php include("shared/footer.php"); ?>
  
    <div class=" w-100" style="background-color: #6518ff;">
        <div class="row">
          <div class="col-12">
            <div class=" text-white p-2">
              <div class="scrolling-banner">
                <div class="scrolling-text">
                    Welcome to the Hajz website! Today is <span id="current-date"></span>, and the time is <span
                    id="current"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    


    <!-- open welcome modal & show current day and time -->
    <script>


        // select the welcome modal button and trigger the welcome model to open
        document.getElementById("open-welcome-modal-btn").click();
        document.getElementById("current").innerText = (new Date()).toLocaleTimeString();
        document.getElementById("current-date").innerText = (new Date()).toLocaleDateString();

    </script>
</body>

</html>