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
            <div class="serverStatus" id="serverStatus">
                <span class="statusDot online"></span>Conectado ao MySQL
            </div>
        </div>
    </div>
    <div class="modalOverlay" id="gameoverModal">
        <div class="modalCard gameoverCard">
            <div class="modalHeader">
                <h2 class="gameoverTitle">GAME OVER</h2>
                <div class="finalScoreLabel">SUA PONTUAÇÃO</div>
                <div class="finalScoreNum" id="finalScoreValue">0</div>
                <div class="saveStatus" id="saveStatusMsg"></div>
            </div>
        </div>
        <div class="rankingContainer">
            <h3 class="rankingTitle">🏆 TOP 10 MELHORES PONTUAÇÕES</h3>
            <div class="tableWrapper">
                <table class="rankingTable">
                    <thead>
                        <tr>
                            <th>POS</th>
                            <th>JOGADOR</th>
                            <th>PONTUAÇÃO</th>
                        </tr>
                    </thead>
                    <tbody id="rankingBody">
                        <?php if(!empty($rankingInicial)) : ?>
                            <?php foreach ($rankingInicial as $i => $row) : ?>
                                <tr>
                                    <td class="rankingPos">
                                        <?= $i === 0 ? '🥇 1º' : ($i === 1 ? '🥈 2º' : ($i === 2 ? '🥉 3º' : ($i + 1) . 'º'))?>
                                    </td>
                                    <td><strong><?= htmlspecialchars($row['nome1'])?></strong></td>
                                    <td><?= (int)$row['pontos'] ?> pts</td>
                                </tr>
                            <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="3" class="loadingCell">Nenhuma pontuação gravada ainda. Jogue para ser o 1º!</td>
                                </tr>
                            <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modalActions">
            <button type="button" class="btn btnPrimary" id="btnRestart">JOGAR NOVAMENTE</button>
            <button type="button" class="btn btnSecondary" id="btnChangePlayer">TROCAR JOGADOR</button>
        </div>
    </div>

<script src="js/script.js" defer></script>
</body>
</html>