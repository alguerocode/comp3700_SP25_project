

/**
 * 
 * there is should be global variable named 'eventDetails' to make this script work
 */

function renderDyanimcEventDetails(eventDetails) {
    const html =  `
       <h1>${eventDetails.title}</h1>
        <img style="width: 100%; height: auto; max-width: 700px; border-radius: 20px; aspect-ratio: 16/9;" src="${eventDetails.imgUrl}" alt="" width="300" height="160">
        <p>${eventDetails.description}</p>

<div class="card w-100" style="max-width: 33rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item d-flex" style="justify-content:space-between">
                        <div><img  class="d-inline-block" style="width: 20px; height: 20px; margin-right: 10px;" src="/public/events/location.png" width="10px" height="10px" />Location</div>
                <div>${eventDetails.location}</div>
    </li>
    <li class="list-group-item d-flex" style="justify-content:space-between">
    <div><img  class="d-inline-block" style="width: 20px; height: 20px; margin-right: 10px;" src="/public/events/calendar.png" width="10px" height="10px" />Event Time</div>
                <div>${eventDetails.eventTime}</div>
    </li>
    <li class="list-group-item d-flex" style="justify-content:space-between">
                    <div>
                    <img  class="d-inline-block" style="width: 20px; height: 20px; margin-right: 10px;" src="/public/events/group.png" width="20px" height="20px" /> Maximum audience
                </div>
                <div>${eventDetails.maximumAudience}</div>
    </li>
    <li class="list-group-item d-flex" style="justify-content:space-between">
                    <div><img src="/public/events/ticket.png" width="20px" height="20px"  class="d-inline-block" style="width: 20px; height: 20px; margin-right: 10px;" /> Available Tickets
                </div>
                <div>${eventDetails.availableTickets}</div>
    </li>
  </ul>

</div>        
 <a href="../event-calculator/event-calculator.php" class="get-ticket w-100" style="max-width: 33rem;">
        <div class="ticket btn w-100 btn-primary" style="max-width: 33rem; background-color: #6518ff; color: white;">
           <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="mx-2 bi bi-ticket-detailed-fill" viewBox="0 0 16 16">
  <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6zm4 1a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5m0 5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5M4 8a1 1 0 0 0 1 1h6a1 1 0 1 0 0-2H5a1 1 0 0 0-1 1"/>
</svg>Get Tickets
        </div>
        </a>
    `;

    return html;
}




function main() {
    const eventDivElement = document.querySelector(".event");
    eventDivElement.innerHTML = renderDyanimcEventDetails(eventDetails)

}


// fire main function
main()