<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hajz | Explore</title>
  <!-- <link rel="stylesheet" href="/global.css"> -->
  <!-- <link rel="stylesheet" href="./explore.css"> -->
  <link rel="icon" type="image/x-icon" href="/public/logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
    crossorigin="anonymous"></script>
</head>



<body>

  <nav class="navbar navbar-expand-lg " style="background-color: white;">
    <div class="container-fluid">
      <a class="navbar-brand" href="/index.html"> <img src="/public/logo.png" width="30px" height="30px" /></a>
      <h2>Hajz</h2></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mx-5" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about-us.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact.html">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/events/explore.html">Explore</a>
          </li>
        </ul>
        <!-- <form class="d-flex needs-validation" onsubmit="return validateForm()" class="needs-validation" novalidate
          method="post" action="https://httpbin.org/post" role="search"> -->
          <!-- Button trigger modal -->
          <button type="button" style="border: 1px solid #6518ff; color:#6518ff ;" class="btn m-1"
            data-bs-toggle="modal" data-bs-target="#exampleModal">
            Create New Event
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Create New Website</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                      required>
                    <div class="invalid-feedback">
                      please enter a valid title between 3 and 26 characters long
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">About</label>
                    <input type="text" class="form-control" id="exampleInputabout1" required>
                    <div class="invalid-feedback">
                      please enter a valid description of the event
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Image URL</label>
                    <input type="url" class="form-control" id="exampleInputurl1" required>
                    <div class="invalid-feedback">
                      please enter a valid url
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Maximum Audience</label>
                    <input type="text" class="form-control" id="exampleInputMaxAud1" required>
                    <div class="invalid-feedback">
                      please enter a valid number between 1 and 999999
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Event Time</label>
                    <input type="date" class="form-control" id="eventTime1" required>
                    <div class="invalid-feedback">
                      please select a valid date
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Location</label>
                    <input type="text" class="form-control" id="exampleLocation" required>
                    <div class="invalid-feedback">
                      please enter a valid location
                    </div>
                  </div>


                </div>
                <div class="modal-footer">
                  <button type="button" id="closemodal" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                  <!-- removed the "create-event" id to stop the form from closing when submitting -->
                  <button type="submit" id="create-event" class="btn btn-primary">Create</button> <!-- Changed this to sumbit -->
                </div>
              </div>

            </div>

          </div>
          <a class="btn m-1" href="/auth/sign-in.html" style="border: 1px solid #6518ff; color:#6518ff ;">Register</a>
          <a class="btn  m-1" href="/auth/login.html" style="background-color: #6518ff; color: white;">Login</a>
        </form>
      </div>
    </div>
  </nav>
  <h2 class="my-3" style="margin: auto;width: 350px;">Explore events page</h2>
  <div class="input-group mb-3" class="my-3" style="margin: auto;width: 350px;">
    <input id="search-input" type="text" class="form-control" placeholder="Search for Event"
      aria-label="Recipient's title" aria-describedby="button-addon2">
    <button class="btn" type="button" id="search-btn" style="background-color: #6518ff; color: white;">Search <svg
        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
        viewBox="0 0 16 16">
        <path
          d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
      </svg></button>
  </div>
  <ul id="events-list" class="d-flex flex-wrap">

  </ul>

    <?php include("../shared/footer.php"); ?>
  <script src="./explore.js"></script>
</body>

</html>