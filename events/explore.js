// add events data to display it in explore page
// const eventsData = [
//   {
//     title: "Technology Conference",
//     description:
//       "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo tenetur asperiores tempora doloribus praesentium voluptate soluta? Modi reprehenderit facilis nulla at, aliquid minima dolor voluptatem asperiores ratione, exercitationem labore in!",
//     maximumAudience: 21300,
//     eventTime: "12/3/2025 10:00pm",
//     location: "Lecutre Hall 4",
//     imgUrl: "/public/events/conference.jpg",
//     link: "events-description/event-1.php",
//   },
//   {
//     title: "Soccer Cup",
//     description:
//       "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo tenetur asperiores tempora doloribus praesentium voluptate soluta? Modi reprehenderit facilis nulla at, aliquid minima dolor voluptatem asperiores ratione, exercitationem labore in!",
//     maximumAudience: 5000,
//     eventTime: "3/2/2025 6:30am",
//     location: "SQU Football Field",
//     imgUrl: "/public/events/football.jpg",
//     link: "events-description/event-2.php",
//   },
//   {
//     title: "Business Training",
//     description:
//       "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo tenetur asperiores tempora doloribus praesentium voluptate soluta? Modi reprehenderit facilis nulla at, aliquid minima dolor voluptatem asperiores ratione, exercitationem labore in!",
//     maximumAudience: 50,
//     eventTime: "3/5/2026 3:00am",
//     location: "Self-Learning Center",
//     imgUrl: "/public/events/training.jpg",
//     link: "events-description/event-3.php",
//   },
// ];

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

// create event script

const titleInput = document.getElementById("exampleInputEmail1");
const aboutInput = document.getElementById("exampleInputabout1");
const locationInput = document.getElementById("exampleLocation");
const maxAudienceInput = document.getElementById("exampleInputMaxAud1");
const eventTimeInput = document.getElementById("eventTime1");
const imageUrlInpt = document.getElementById("exampleInputurl1");
const createBtn = document.getElementById("create-event");

createBtn.addEventListener("click", (e) => {

  const ulElement = document.querySelector("ul#events-list");


  // form validatin
  // setting up the variables for the form elements
  var title = document.getElementById("exampleInputEmail1");
  var about = document.getElementById("exampleInputabout1");
  var url = document.getElementById("exampleInputurl1");
  var max = document.getElementById("exampleInputMaxAud1");
  var date = document.getElementById("eventTime1");
  var location = document.getElementById("exampleLocation");

  // Validate the title
  // making sure the title is between 3 and 32 characters long and contains only letters and numbers
  if (title.value.search(/^[a-zA-Z0-9]{3,32}$/) == -1) {
    // invalid title
    // add the invalid class to the title input field
    title.classList.add("is-invalid");
    // focus on the title input field
    title.focus();
    // return false to prevent form submission
    return false;
  } else {
    // valid title
    // remove the invalid class and add the valid class
    title.classList.remove("is-invalid");
    title.classList.add("is-valid");
  }

  // Validate the about field
  // check if the about field is not empty
  if (about.value.trim() == "") {
    // invalid  about field format
    // display an error message
    about.classList.add("is-invalid");
    // set focus on the the about inpuit field
    about.focus();
    // return false to stop the form from submitting
    return false;
  } else {
    // valid the about field format
    about.classList.remove("is-invalid");
    about.classList.add("is-valid");
  }

  // Validate the url
  // making sure the url is a valid url format
  // using the URL constructor to check if the url is valid
  try {
    new URL(url.value);
    url.classList.remove("is-invalid");
    url.classList.add("is-valid");
    url.focus();
  } catch (_) {
    url.classList.add("is-invalid");
    url.focus();
    return false;
  }

  // Validate the max audience
  // making sure the max audience a number between 1 to 9 digits long
  if (max.value.search(/^[0-9]{1,6}$/) == -1) {
    // invalid max audience number
    // add the invalid class to the max audience input field
    max.classList.add("is-invalid");
    // focus on the max audience  input field
    max.focus();
    // return false to prevent form submission
    return false;
  } else {
    // valid max audience number
    // remove the invalid class and add the valid class
    max.classList.remove("is-invalid");
    max.classList.add("is-valid");
  }

  // Validate the date
  // making sure the date is a valid date format and is not in the past
  const today = new Date();
  const selectedDate = new Date(date.value);

  // check if the selected date is in the past or if the date input is empty
  if (!date.value) {
    // invalid date
    // add the invalid class to the date input field
    date.classList.add("is-invalid");
    // focus on the date input field
    date.focus();
    // return false to prevent form submission
    return false;
  } else {
    // valid date
    // remove the invalid class and add the valid class
    date.classList.remove("is-invalid");
    date.classList.add("is-valid");
  }

  // Validate the location
  // making sure the location has 3 to 32 lettes or numbers)
  if (location.value.search(/[a-zA-Z0-9]{3,32}/) == -1) {
    // invalid location
    // add the invalid class to the location input field
    location.classList.add("is-invalid");
    // focus on the location input field
    location.focus();
    // return false to prevent form submission
    return false;
  } else {
    // valid location
    // remove the invalid class and add the valid class
    location.classList.remove("is-invalid");
    location.classList.add("is-valid");
  }

  const eventData = new Object({
    title: titleInput.value,
    description: aboutInput.value,
    maximumAudience: parseInt(maxAudienceInput.value),
    eventTime: eventTimeInput.value,
    location: locationInput.value,
    imgUrl: imageUrlInpt.value,
    link: "events-description/event-2.php",
  });
  
  ulElement.innerHTML += buildEventCard(eventData);
  // If all validations pass, return true to allow form submission
  document.getElementById("closemodal").click();
});
