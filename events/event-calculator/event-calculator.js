



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




main();