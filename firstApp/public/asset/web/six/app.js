"use strict";

const player1 = document.querySelector(".player_0");
const player2 = document.querySelector(".player_1");
const left = document.querySelector(".left");
const right = document.querySelector(".right");
const hold = document.querySelector(".hold");
const roll = document.querySelector(".roll");
const newGame = document.querySelector(".new");
const score0 = document.getElementById("score_0");
const score1 = document.getElementById("score_1");
const diceEl = document.querySelector(".dice");
const total1 = document.getElementById("total_0");
const total2 = document.getElementById("total_1");

let finalScore, activePlayer, currentScore, playing;

const init = function() {
    finalScore = [0, 0];
    activePlayer = 0;
    currentScore = 0;
    playing = true;

    total1.textContent = 0;
    total2.textContent = 0;
    score0.textContent = 0;
    score1.textContent = 0;
    diceEl.classList.add("hidden");
    player1.classList.remove("winner");
    player2.classList.remove("winner");
    player1.textContent = "Player 1 🙋‍♂️";
    player2.textContent = "Player 2 🙋‍♂️";
    document.querySelector(".side-0").classList.remove("bgcng");
    document.querySelector(".side-1").classList.remove("bgcng");

    left.classList.remove("active");
    right.classList.add("active");
};

const switchPlayer = function() {
    document.getElementById(`score_${activePlayer}`).textContent = 0;
    activePlayer = activePlayer === 0 ? 1 : 0;
    currentScore = 0;
    left.classList.toggle("active");
    right.classList.toggle("active");
};

init();

//Rolling dice

roll.addEventListener("click", function() {
    if (playing) {
        // 1. Generating a random dice roll
        const dice = Math.trunc(Math.random() * 6) + 1;
        // 2. Display dice
        diceEl.classList.remove("hidden");
        diceEl.src = `dice-${dice}.png`;

        // 3. Check roll, if 1
        if (dice !== 1) {
            //add cuurent score
            currentScore += dice;
            document.getElementById(
                `score_${activePlayer}`
            ).textContent = currentScore;
        } else {
            // then switch next player

            switchPlayer();
        }
    }
});
hold.addEventListener("click", function() {
    if (playing) {
        finalScore[activePlayer] += currentScore;
        document.getElementById(`total_${activePlayer}`).textContent =
            finalScore[activePlayer];

        if (finalScore[activePlayer] >= 20) {
            playing = false;
            document.querySelector(`.player_${activePlayer}`).classList.add("winner");
            document.querySelector(`.side-${activePlayer}`).classList.add("bgcng");
            document.querySelector(`.player_${activePlayer}`).textContent =
                "✨ Winner";
            diceEl.classList.add("hidden");
        } else {
            switchPlayer();
        }
    }
});

newGame.addEventListener("click", init);