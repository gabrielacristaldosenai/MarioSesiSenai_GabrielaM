<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mario Jump</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>
    <div class="gameContainer">
        <header class="hudBar">
            <div class="playerInfo">
                <span class="label">PONTOS:</span>
                <span class="value" id="hudPlayerName">--</span>
            </div>
            <div class="scoreInfo">
                <span class="label">PONTOS:</span>
                <span class="value" id="scoreDisplay">--</span>
            </div>
        </header>
        <main class="gameBoard" id="gameBoard">
            <img src="assets/clouds.png" class="clouds" alt="Nuvens">
            <img src="assets/mario.gif" class="mario" alt="Mario">
            <img src="assets/pipe.png" class="pipe" alt="Cano">

            <span class="jumpTip" id="jumpTip">
                Pressione ESPAÇO ou clique para pular
            </span>
        </main>
    </div>
    <div class="modalOverlay active" id="startModal">
        <div class="modalCard">
            <div class="modalHeader">
                <h1 class="gameTitle">MARIO JUMP</h1><br>
                <p class="gameSubtitle">Corra, desvie dos canos e dispute o topo do ranking!</p><br>
            </div>
            <form class="startForm" id="startForm">
                <div class="inputGroup">
                    <label for="playerInput">DIGITE SEU NOME</label><br>
                    <input type="text" id="playerInput" placeholder="Ex: Seu Nome" maxlength="30" required autocomplete="off" autofocus>
                </div>
                <div class="modalActions">
                    <button type="submit" class="btn btnPrimary" id="btnStart">INICIAR JOGO</button>
                    <button type="button" class="btn btnSecondary" id="btnViewRanking">VER RANKING</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>