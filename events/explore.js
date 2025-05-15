// create event script
const titleInput = document.getElementById("exampleInputEmail1");
const aboutInput = document.getElementById("exampleInputabout1");
const locationInput = document.getElementById("exampleLocation");
const maxAudienceInput = document.getElementById("exampleInputMaxAud1");
const eventTimeInput = document.getElementById("eventTime1");
const imageUrlInpt = document.getElementById("exampleInputurl1");
const createBtn = document.getElementById("create-event");
const createEventForm = document.getElementById("create-event-form");


createBtn.addEventListener("click", (e) => {
 e.preventDefault();
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
  
  // If all validations pass, return true to allow form submission
  
  createEventForm.submit();
  document.getElementById("closemodal").click();
});
