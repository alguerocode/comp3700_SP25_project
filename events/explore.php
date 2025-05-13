
<?php 
include("../lib/connect-db.php");

$search = '';
$stmt = null;
if(isset($_GET["search"]) != NULL && strlen($_GET["search"]) > 0) {
  $search = $_GET["search"];
  $stmt = $conn->prepare("SELECT * FROM hz_event WHERE LOWER(title) LIKE LOWER(:search)");
  $sql_search = "%" . $_GET["search"] . "%";
  $stmt->bindParam(':search', $sql_search );
} else {
  $stmt = $conn->prepare("SELECT * FROM hz_event");
}
$stmt->execute();
?>
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
      <a class="navbar-brand" href="/index.php"> <img src="/public/logo.png" width="30px" height="30px" /></a>
      <h2>Hajz</h2></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mx-5" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about-us.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/events/explore.php">Explore</a>
          </li>
        </ul>
          <?php include("./create-event.php"); ?>
      </div>
    </div>
  </nav>
  <h2 class="my-3" style="margin: auto;width: 350px;">Explore events page</h2>
      <form action="explore.php" method="GET">
  <div class="input-group mb-3" class="my-3" style="margin: auto;width: 350px;">

    <input id="search-input" type="text" name="search" class="form-control" placeholder="Search for Event"
      value="<?php echo $search?>"
      aria-label="Recipient's title" aria-describedby="button-addon2">
    <button class="btn" type="submit" id="search-btn" style="background-color: #6518ff; color: white;">Search <svg
        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
        viewBox="0 0 16 16">
        <path
          d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
      </svg></button>
  </div>
        </form>

  <ul id="events-list" class="d-flex flex-wrap">
<?php 
          foreach($stmt->fetchAll() as $row) {
             echo '<div  class="card m-3" style="width:30rem;height:50rem">
            <img class="card-img-top" src="'. $row['img_url'].'" width="350" height="370"/>
            <div>


            <div class="card-body">
            <h2 class="card-title">'.$row["title"] .'</h2>
            <p class="card-text">'. $row['description'].'<p>
            
            <div class="card my-3" >
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                <img class="icon" src="/public/events/group.png" width="10px" height="10px"/>
                Maximum Audienc: '. $row['max_aud'].'
                </li>
                <li class="list-group-item">
                              <img class="icon" src="/public/events/calendar.png" width="10px" height="10px"/>
              Event Time: <time>'. $row['time'].'</time>  
                </li>
                <li class="list-group-item">
                <img class="icon" src="/public/events/location.png" width="10px" height="10px"/>
                location: '. $row['location'].'</li>
            </ul>
            </div>
            <a href="/events/event-description.php?id='. $row['id'].'">
                <button class="btn btn-primary">View</button>
            </a>
            </div>
            </div>
        </div>';
      }
        
        ;
      
?>

  </ul>

    <?php include("../shared/footer.php"); ?>
  <script src="./explore.js"></script>
</body>

</html>