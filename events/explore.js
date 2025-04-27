// add events data to display it in explore page
const eventsData = [
  {
    title: "Technology Conference",
    description:
      "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo tenetur asperiores tempora doloribus praesentium voluptate soluta? Modi reprehenderit facilis nulla at, aliquid minima dolor voluptatem asperiores ratione, exercitationem labore in!",
    maximumAudience: 21300,
    eventTime: "12/3/2025 10:00pm",
    location: "Lecutre Hall 4",
    imgUrl: "/public/events/conference.jpg",
    link: "events-description/event-1.html",
  },
  {
    title: "Soccer Cup",
    description:
      "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo tenetur asperiores tempora doloribus praesentium voluptate soluta? Modi reprehenderit facilis nulla at, aliquid minima dolor voluptatem asperiores ratione, exercitationem labore in!",
    maximumAudience: 5000,
    eventTime: "3/2/2025 6:30am",
    location: "SQU Football Field",
    imgUrl: "/public/events/football.jpg",
    link: "events-description/event-2.html",
  },
  {
    title: "Business Training",
    description:
      "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo tenetur asperiores tempora doloribus praesentium voluptate soluta? Modi reprehenderit facilis nulla at, aliquid minima dolor voluptatem asperiores ratione, exercitationem labore in!",
    maximumAudience: 50,
    eventTime: "3/5/2026 3:00am",
    location: "Self-Learning Center",
    imgUrl: "/public/events/training.jpg",
    link: "events-description/event-3.html",
  },
];

// this function give description of events
// output a html of event card to render it inside unoredered list
function buildEventCard(eventData) {
  const eventHtmlCard = `
        <div  class="card m-3" style="width:30rem;height:50rem">
            <img class="card-img-top" src="${eventData.imgUrl}" width="350" height="370"/>
            <div>


            <div class="card-body">
            <h2 class="card-title">${eventData.title}</h2>
            <p class="card-text">${eventData.description}<p>
            
            <div class="card my-3" >
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                <img class="icon" src="/public/events/group.png" width="10px" height="10px"/>
                Maximum Audienc: ${eventData.maximumAudience}
                </li>
                <li class="list-group-item">
                              <img class="icon" src="/public/events/calendar.png" width="10px" height="10px"/>
              Event Time: <time>${eventData.eventTime}</time>  
                </li>
                <li class="list-group-item">
                <img class="icon" src="/public/events/location.png" width="10px" height="10px"/>
                location: ${eventData.location}</li>
            </ul>
            </div>
            <a href="${eventData.link}">
                <button class="btn btn-primary">View</button>
            </a>
            </div>
            </div>
        </div>
    `;

  return eventHtmlCard;
}

function dynamicRenderEventsCards(data) {
  // select ul
  const ulElement = document.querySelector("ul#events-list");

  // clear inside ul elements
  ulElement.innerHTML = "";

  // go throw each events and render events card dynamically
  data.forEach((eventData) => {
    ulElement.innerHTML += buildEventCard(eventData);
  });
}

// search for event by matched title
function searchEvents(data, searchText) {
  searchText = searchText.toLowerCase();
  const matchedEvents = data.filter((event) => event.title.toLowerCase().includes(searchText));
  return matchedEvents;
}

function main() {
  // render all events
  dynamicRenderEventsCards(eventsData);

  const searchInput = document.querySelector("#search-input");
  const searchButton = document.querySelector("#search-btn");

  searchButton.addEventListener("click", (e) => {
    e.preventDefault();
    const searchText = searchInput.value;
    const matched = searchEvents(eventsData, searchText);
    dynamicRenderEventsCards(matched);
  });
}

// fire main function
main();
