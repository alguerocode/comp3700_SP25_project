<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hajz | Create Event</title>
    <!-- <link rel="stylesheet" href="/global.css"> -->
    <!-- <link rel="stylesheet" href="/events/create-event.css"> -->
    <link rel="icon" type="image/x-icon" href="/public/logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</head>

<body>
    <?php include("shared/navbar.php"); ?>
    <div class="main">
    
        <div id="container" >
        <form method="post"   action="https://httpbin.org/get">
    
            <h3>Create Custom Event</h3>            
           
            
            <p > Event Name: <input type="text" name="eventName"  id="boxes" required> </p>
            <p > Event Date: <input type="date" name="eventDate"  id="boxes" required> </p>
            <p > Event Time: <input type="time" name="eventTime"  id="boxes" required> </p>
            <p > Event Location: <input type="text" name="eventLocation"  id="boxes" required> </p>
            <p > Event Description: <textarea name="eventDescription" rows = "9" required> </textarea> </p>





            <p><button type="submit" id="button" >Create</button></p>
        </form>
        </div>
        <h4>Or Use  <a href="explore.html" id="aLink">Preset Events</a></h4>
        
    </div> 
   

    

    <?php include("shared/footer.php"); ?>
</body>

</html>