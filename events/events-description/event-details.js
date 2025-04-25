

/**
 * 
 * there is should be global variable named 'eventDetails' to make this script work
 */

function renderDyanimcEventDetails(eventDetails) {
    const html =  `
                <h1>${eventDetails.title}</h1>
        <img class="cover" src="${eventDetails.imgUrl}" alt="" width="300" height="160">
        <p>${eventDetails.description}</p>

        <table border="1">
            <tr>
                <td><img class="icon" src="/public/events/location.png" width="10px" height="10px" />Location</td>
                <td>${eventDetails.location}</td>
            </tr>
            <tr>
                <td><img class="icon" src="/public/events/calendar.png" width="10px" height="10px" />Event Time</td>
                <td>${eventDetails.eventTime}</td>
            </tr>
            <tr>
                <td>
                    <img class="icon" src="/public/events/group.png" width="20px" height="20px" /> Maximum audience
                </td>
                <td>${eventDetails.maximumAudience}</td>
            </tr>
            <tr>
                <td><img class="icon" src="/public/events/ticket.png" width="20px" height="20px" /> Available Tickets
                </td>
                <td>${eventDetails.availableTickets}</td>
            </tr>
        </table>

        <form action="" class="ticket">
            <label for="">Number of Tickets</label>
            <input type="number" value="1" required>
            <button class="get-ticket">Get Tickets</button>
        </form>
    `;

    return html;
}




function main() {
    const eventDivElement = document.querySelector(".event");
    eventDivElement.innerHTML = renderDyanimcEventDetails(eventDetails)

}


// fire main function
main()