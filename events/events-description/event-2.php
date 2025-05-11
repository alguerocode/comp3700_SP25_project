<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hajz | Soccer Cup</title>
    <!-- <link rel="stylesheet" href="/events/events-description/event-description.css"> -->

    <!-- <link rel="stylesheet" href="/global.css"> -->
    <link rel="icon" type="image/x-icon" href="/public/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</head>
<body>
    <?php include("../../shared/navbar.php"); ?>

    <div class="event d-flex flex-column align-items-center justify-content-center gap-3 mx-auto my-4" style="width: 95%; max-width: 700px;">
        <!-- here dynamic content rendered -->
    </div>
    <?php include("../../shared/footer.php"); ?>
    <script>
        // setup object of event details
        const eventDetails =     {
            title:"Soccer Cup",
        description:"Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo tenetur asperiores tempora doloribus praesentium voluptate soluta? Modi reprehenderit facilis nulla at, aliquid minima dolor voluptatem asperiores ratione, exercitationem labore in!",
        maximumAudience:5000,
        eventTime: "3/2/2025 6:30am",
        location: "SQU Football Field",
        imgUrl:"/public/events/football.jpg",
        link:"events-description/event-2.php",
        availableTickets: 360
    }
    </script>
    <script src="./event-details.js"></script>
</body>
</html>