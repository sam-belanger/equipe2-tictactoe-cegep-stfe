let mainContainer,
    p1,
    p2,
    turn,
    symbolP1,
    symbolP2,
    scoreP1,
    scoreP2,
    cells,
    game;

function startNewGame() {
    game = true;
    turn = 1;
    setPlayersSymbols();
    clearBoard();
    mainContainer.querySelector("#ttt-info").innerText = `${p1} commence.`;
}

function clearBoard() {
    for (let cell of cells) {
        cell.innerText = "";
    }
}

function setPlayersSymbols() {
    symbolP1 = mainContainer.querySelector("select").value;

    if (symbolP1 == "X") {
        symbolP2 = "O";
    } else {
        symbolP2 = "X";
    }
}

window.onload = function () {
    mainContainer = document.querySelector("#tic-tac-toe");
    p1 = mainContainer.querySelector("#ttt-p1").value;
    p2 = mainContainer.querySelector("#ttt-p2").value;
    turn = 1; // 1 or 2
    symbolP1;
    symbolP2;
    scoreP1 = 0;
    scoreP2 = 0;
    cells = mainContainer.querySelectorAll("#gameboard div");
    game = true;

    mainContainer.querySelector("#ttt-info").innerText = `${p1} commence.`;

    for (let cell of cells) {
        cell.addEventListener("click", function (event) {
            if (game) {
                // Check first step
                if (checkAllEmpty()) {
                    setPlayersSymbols();
                }

                if (this.textContent !== "") {
                    return;
                }

                // Show user status information
                if (turn === 1) {
                    mainContainer.querySelector(
                        "#ttt-info"
                    ).innerText = `${p2} c'est à ton tour.`;
                } else if (turn === 2) {
                    mainContainer.querySelector(
                        "#ttt-info"
                    ).innerText = `${p1} c'est à ton tour.`;
                }

                // Check empty cell and draw symbol in cell
                clickAction(event.target);

                // Check for win
                currentSymbol = getCurrentSymbol();
                win = checkWin(currentSymbol);

                if (win) {
                    game = false;
                    updateScore();
                    showScore();
                    if (turn === 1) {
                        mainContainer.querySelector(
                            "#ttt-info"
                        ).innerText = `${p1} a gagné.`;
                    } else if (turn === 2) {
                        mainContainer.querySelector(
                            "#ttt-info"
                        ).innerText = `${p2} a gagné`;
                    }
                }

                // Check no wins
                if (checkNoWin()) {
                    mainContainer.querySelector("#ttt-info").innerText =
                        "Partie nulle";
                }

                switchPlayer();
            }
        });
    }

    function checkAllEmpty() {
        for (cell of cells) {
            if (cell.innerText != "") {
                return false;
            }
        }

        return true;
    }

    function getCurrentSymbol() {
        if (turn === 1) {
            return symbolP1;
        } else if (turn === 2) {
            return symbolP2;
        }
    }

    function switchPlayer() {
        if (turn === 1) {
            turn = 2;
        } else {
            turn = 1;
        }
    }

    function checkWin(symbol) {
        let winCombinations = [
            ["ttt-11", "ttt-12", "ttt-13"],
            ["ttt-21", "ttt-22", "ttt-23"],
            ["ttt-31", "ttt-32", "ttt-33"],
            ["ttt-11", "ttt-21", "ttt-31"],
            ["ttt-12", "ttt-22", "ttt-32"],
            ["ttt-13", "ttt-23", "ttt-33"],
            ["ttt-11", "ttt-22", "ttt-33"],
            ["ttt-31", "ttt-22", "ttt-13"],
        ];

        for (let row of winCombinations) {
            cel1 = mainContainer.querySelector(
                `#gameboard #${row[0]}`
            ).innerText;
            cel2 = mainContainer.querySelector(
                `#gameboard #${row[1]}`
            ).innerText;
            cel3 = mainContainer.querySelector(
                `#gameboard #${row[2]}`
            ).innerText;

            if (cel1 === symbol && cel2 === symbol && cel3 === symbol) {
                return true;
            }
        }

        return false;
    }

    function checkNoWin() {
        for (let cell of cells) {
            if (cell.innerText === "") {
                return false;
            }
        }

        return true;
    }

    function clickAction(cell) {
        // Check empty cell
        if (cell.innerText === "") {
            // Check player
            if (turn === 1) {
                cell.innerText = symbolP1;
            } else if (turn === 2) {
                cell.innerText = symbolP2;
            }
        }
    }

    function updateScore() {
        if (turn === 1) {
            scoreP1++;
        } else if (turn === 2) {
            scoreP2++;
        }
    }

    function showScore() {
        mainContainer.querySelector("#score1").innerText = scoreP1;
        mainContainer.querySelector("#score2").innerText = scoreP2;
    }
};
