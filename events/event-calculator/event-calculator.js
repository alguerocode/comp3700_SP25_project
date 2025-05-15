



const ticketPrice = 10;


// calculator tickets details elements
const availableTicketsEl = document.getElementById("available-tickets");
const ticketPriceEl =document.getElementById("ticket-price") ;

// calculator form elements
const calculatorFormEl = document.getElementById("event-calculator-input");
const calculatorBtnEl = document.getElementById("calculator-btn");

// results elements
const resultMultipleTicketEl =document.getElementById("multiple-ticket-discount") ;
const resultChildrenDiscountEl =document.getElementById("children-discount") ;
const resultVIPEl =document.getElementById("vip-fee") ;
const resultFoodServiceEl =document.getElementById("food-service-fee") ; 
const resultTotalPrice = document.getElementById("total-price");




function multipleTicketDiscount (price) {
    return price - price * 0.1;
}

function foodServiceFee (price) {
    return price + price + 0.15;
}

function childrenDiscount(price, ticketNum) {
    return price - (5 * ticketNum);
}

function vipFee(price, ticketNum) {
    return price + (ticketNum * 10);
}




function calculatePrices() {
    // get entered values
    const ticketNumber = calculatorFormEl.ticketsNumber.value;
    const isMore3Ticket = ticketNumber > 3;
    const isFoodService = calculatorFormEl.foodService.checked;
    const isKidType = calculatorFormEl.childrenTickets.checked;
    const VIPTickets = calculatorFormEl.VIPTickets.checked;


    // calculate all the prices
    let StarterTotalPrice = ticketNumber * ticketPrice;
    let foodService = StarterTotalPrice * 0.15;
    let multipleDiscount = StarterTotalPrice * 0.10
    let childrenDiscount = ticketNumber * 5;
    let VIPTicketsPrice = ticketNumber * 10;
    let finalTotalPrice = StarterTotalPrice;


    // if is child offer apply discount
    if(isKidType) finalTotalPrice -= childrenDiscount;
    else childrenDiscount = 0
    resultChildrenDiscountEl.innerText = " -$" + childrenDiscount;


    // if more than 3 ticket offer apply the discount
    if(isMore3Ticket)  finalTotalPrice -= multipleDiscount
    else multipleDiscount = 0
    resultMultipleTicketEl.innerText = " -$" + multipleDiscount

    // apply food services expense
    if(isFoodService) finalTotalPrice += foodService;
    else foodService = 0
    resultFoodServiceEl.innerText = " +$" + foodService;


    // apply vip tickets expenses
    if(VIPTickets) finalTotalPrice += VIPTicketsPrice;
    else VIPTicketsPrice = 0
    resultVIPEl.innerText = " +$" + VIPTicketsPrice;


    resultTotalPrice.innerText = "$" + finalTotalPrice;
}



// main calculator function
function main() {
    // calculate the prices when click calculate
    calculatorBtnEl.addEventListener("click", (e) => {
        e.preventDefault();
        calculatePrices();
    })

}


// Altariq : this the update for the code 
document.addEventListener('DOMContentLoaded', () => {
  document.getElementById('insert-btn').addEventListener('click', e => {
    e.preventDefault();
    ticketAction('insert');
  });
  document.getElementById('delete-btn').addEventListener('click', e => {
    e.preventDefault();
    ticketAction('delete');
  });
  // on load, fetch existing tickets
  ticketAction('fetch');
});

function ticketAction(action) {
  const form  = document.getElementById('event-calculator-input');
  const data  = new FormData(form);
  data.append('action', action);
  data.append('userId',   document.getElementById('user-id').value);
  data.append('eventId',  document.getElementById('event-id').value);

  fetch('ticket-action.php', { method: 'POST', body: data })
    .then(r => r.json())
    .then(json => {
      if (!json.success) {
        return alert('Error: ' + json.message);
      }
      renderTickets(json.tickets);
    });
}

function renderTickets(tickets) {
  const container = document.getElementById('user-tickets');
  if (!tickets.length) {
    container.innerHTML = '<p>No tickets found.</p>';
    return;
  }
  let html = `
    <table class="table table-sm">
      <thead>
        <tr>
          <th>ID</th><th>Count</th><th>Food</th><th>VIP</th><th>Children</th>
        </tr>
      </thead>
      <tbody>
  `;
  tickets.forEach(t => {
    html += `
      <tr>
        <td>${t.id}</td>
        <td>${t.count}</td>
        <td>${t.food_service? 'Yes':'No'}</td>
        <td>${t.vip_tickets?  'Yes':'No'}</td>
        <td>${t.children_tickets? 'Yes':'No'}</td>
      </tr>
    `;
  });
  html += '</tbody></table>';
  container.innerHTML = html;
}
// Altariq: until here 


main();
