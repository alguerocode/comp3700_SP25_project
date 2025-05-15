<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hajz | Explore</title>
    <!-- <link rel="stylesheet" href="/global.css"> -->
    <link rel="icon" type="image/x-icon" href="/public/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</head>

<body>
    <?php include("../../shared/navbar.php"); ?>

    <div style="margin: auto; width: 300px;text-align: center;">
        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#6518ff" class="bi bi-calculator"
            viewBox="0 0 16 16">
            <path
                d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
            <path
                d="M4 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
        </svg>
    </div>
    <h2 class="" style="margin: auto; width: 300px; text-align: center; font-weight: 700; margin-top: 10px;">Event
        Calculator
    </h2>
    <div class="" style="margin: auto; width: 300px; text-align: center; font-weight: 700; margin-top: 10px;">
        <!-- <p>Available Tickets: <span id="available-tickets">13</span></p> -->
        <p>One Ticket Price : $<span id="ticket-price">10</span></p>
        <a class="btn my-3" 
        href="/funpage.php"
        style="border: 1px solid #6518ff; color:#6518ff ; margin: auto; width: 300px; margin: auto;"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-joystick mx-3" viewBox="0 0 16 16">
            <path d="M10 2a2 2 0 0 1-1.5 1.937v5.087c.863.083 1.5.377 1.5.726 0 .414-.895.75-2 .75s-2-.336-2-.75c0-.35.637-.643 1.5-.726V3.937A2 2 0 1 1 10 2"/>
            <path d="M0 9.665v1.717a1 1 0 0 0 .553.894l6.553 3.277a2 2 0 0 0 1.788 0l6.553-3.277a1 1 0 0 0 .553-.894V9.665c0-.1-.06-.19-.152-.23L9.5 6.715v.993l5.227 2.178a.125.125 0 0 1 .001.23l-5.94 2.546a2 2 0 0 1-1.576 0l-5.94-2.546a.125.125 0 0 1 .001-.23L6.5 7.708l-.013-.988L.152 9.435a.25.25 0 0 0-.152.23"/>
          </svg>Play To Win Free Ticket</a>

    </div>
    <div class="w-100 shadow p-3 mb-5  rounded" style="max-width: 400px; margin: auto; padding:10px">
        <form id="event-calculator-input">



            <!-- <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"> -->



            <div class="input-group my-4 w-100">
                <span class="input-group-text" id="basic-addon1">Number Of Tickets</span>
                <input name="ticketsNumber" type="number" class=" form-control" aria-describedby="basic-addon1" min="0"
                    value="1" max="100"><br>
            </div>
            <input class="form-check-input" name="foodService" type="checkbox">
            <label>Food Service</label><br>

            <input class="form-check-input" name="VIPTickets" type="checkbox">
            <label>VIP Tickets</label><br>

            <input class="form-check-input" name="childrenTickets" type="checkbox">
            <label>Children Tickets</label>
            <br>
            <button id="calculator-btn" class="btn my-3 w-100"
                style="background-color: #6518ff; color: white; margin:auto; ">Calculate Tickets Price</button>
        </form>
        </form>
        <div class="card" style="">
            <div class="card-header">
                Featured
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">More Than 3 Tickets Will apply 10% discount</li>
                <li class="list-group-item">If their children will decrement price by $5 per Tickets</li>
                <li class="list-group-item">VIP ticket addup 10$ price per ticket</li>
                <li class="list-group-item">Apply Food service apply 15% addup to total price </li>
            </ul>
        </div>
        <div class="calculator-results mx-2 mt-4">
            <!-- <p>Starter Total price <span id="starter-total-price"></span></p> -->
            <div class="d-flex" style="justify-content: space-between;">

                <p>Children Discount: </p>
                <span id="children-discount">0.0</span>
            </div>
            <div  class="d-flex" style="justify-content: space-between;">
                <p>VIP Tickets Fee: </p>
                <span id="vip-fee">0.0</span>
            </div>
            <div class="d-flex" style="justify-content: space-between;">
                <p>More than 3 ticket discount (%10): </p>
                <span id="multiple-ticket-discount">0.0</span>
            </div>
            <div class="d-flex" style="justify-content: space-between;">
                <p>Food Service Fee: </p>
                <span id="food-service-fee">0.0</span>

            </div>
            <div class="d-flex" style="justify-content: space-between;">
                <p>Total Price: </p>
                <span id="total-price">10.0</span>
            </div>

        </div>

    </div>
    <?php include("../../shared/footer.php"); ?>

    <script src="./event-calculator.js" ></script>   <!--  fixed -->

</body>

</html>
