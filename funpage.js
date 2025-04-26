



const ORIGNAL_ATTEMPTS = 3
let attempts = ORIGNAL_ATTEMPTS;
let playerWin = false;


const ticketHTML = `
    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#6518ff" class="bi bi-ticket-perforated" viewBox="0 0 16 16">
        <path d="M4 4.85v.9h1v-.9zm7 0v.9h1v-.9zm-7 1.8v.9h1v-.9zm7 0v.9h1v-.9zm-7 1.8v.9h1v-.9zm7 0v.9h1v-.9zm-7 1.8v.9h1v-.9zm7 0v.9h1v-.9z"/>
        <path d="M1.5 3A1.5 1.5 0 0 0 0 4.5V6a.5.5 0 0 0 .5.5 1.5 1.5 0 1 1 0 3 .5.5 0 0 0-.5.5v1.5A1.5 1.5 0 0 0 1.5 13h13a1.5 1.5 0 0 0 1.5-1.5V10a.5.5 0 0 0-.5-.5 1.5 1.5 0 0 1 0-3A.5.5 0 0 0 16 6V4.5A1.5 1.5 0 0 0 14.5 3zM1 4.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v1.05a2.5 2.5 0 0 0 0 4.9v1.05a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-1.05a2.5 2.5 0 0 0 0-4.9z"/>
      </svg>
`
const gameTemplate = `
        <!-- 3 by 3 -->
        <div data-row="1" data-col="1" class="game-cell bg-primary rounded m-1" style="width: 100px; height: 100px;"></div>
        <div data-row="1" data-col="2" class="game-cell bg-primary rounded m-1" style="width: 100px; height: 100px;"></div>
        <div data-row="1" data-col="3" class="game-cell bg-primary rounded m-1" style="width: 100px; height: 100px;"></div>
    
        <div data-row="2" data-col="1" class="game-cell bg-primary rounded m-1" style="width: 100px; height: 100px;"></div>
        <div data-row="2" data-col="2" class="game-cell bg-primary rounded m-1" style="width: 100px; height: 100px;"></div>
        <div data-row="2" data-col="3" class="game-cell bg-primary rounded m-1" style="width: 100px; height: 100px;"></div>
    
        <div data-row="3" data-col="1" class="game-cell bg-primary rounded m-1" style="width: 100px; height: 100px;"></div>
        <div data-row="3" data-col="2" class="game-cell bg-primary rounded m-1" style="width: 100px; height: 100px;"></div>
        <div data-row="3" data-col="3" class="game-cell bg-primary rounded m-1" style="width: 100px; height: 100px;"></div>
`;

// select imporant elements (game window, attempts text slot, game cells);
const gameWindow = document.getElementById("game-window");
const attemptsEl = document.getElementById("attempts");


function openCell(cell, ticketRow, ticketCol) {
    const cellRow = parseInt(cell.dataset.row);
    const cellCol = parseInt(cell.dataset.col);
    
    if(!cell.classList.contains("bg-primary")) {
        return;
    }

    if(attempts == 0 || playerWin) {
        window.alert("You Don't have attempts, play again");
        return;
    }

    cell.classList.remove("bg-primary");



    attempts--;
    if(ticketRow == cellRow && ticketCol == cellCol) {
        cell.innerHTML = ticketHTML;
        winGame();
    } else if(attempts <= 0) {
        loseGame()
    }
   
    attemptsEl.innerText = attempts;
}




function winGame() {
    playerWin = true;
    document.querySelector(".game-status").innerHTML = `<div class="alert alert-success" style="max-width:300px;margin: auto;
    margin-bottom: 20px;" role="alert">
  You Win! 🎉🎊
</div>`
}

function loseGame() {
    document.querySelector(".game-status").innerHTML = `
    <div class="alert alert-danger"  style="max-width:300px ;margin: auto;
    margin-bottom: 20px;" role="alert">
  You Lose 😔
</div>
    `
}

function selectRandomCell() {
    const row = Math.floor(1 + (Math.random() * 3));
    const col = Math.floor(1 + (Math.random() * 3));
    
    return[ row, col];
}




function gameStart() {
    playerWin = false;
    const [ticketRow, ticketCol ] =  selectRandomCell();
    gameWindow.innerHTML = gameTemplate;
    attempts = ORIGNAL_ATTEMPTS;
    attemptsEl.innerText = ORIGNAL_ATTEMPTS;
    document.querySelector(".game-status").innerHTML = "";
    console.log(ticketRow, ticketCol)
    
    const gameCells = document.querySelectorAll(".game-cell");
    
    gameCells.forEach((cell) => {
        cell.addEventListener("click", () => openCell(cell, ticketRow, ticketCol));
    })
}


gameStart();

document.querySelector("#reset-game").addEventListener('click', () => gameStart());


/**
 * task timeline:
 *  - select random cell to be free ticket
 *  - dynamic render the cells
 *  - open cell mechanism
 *   - add win status => alert you win game
 *   - or attempts finish
 * - reset game
 */