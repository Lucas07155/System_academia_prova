<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Treinos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="tabela-treinos">
        <div class="cabecalho">
            <div class="celula"></div>
            <div class="celula">SEG</div>
            <div class="celula">TER</div>
            <div class="celula">QUA</div>
            <div class="celula">QUI</div>
            <div class="celula">SEX</div>
            <div class="celula">SÁB</div>
            <div class="celula">DOM</div>
        </div>
        
        <div class="linha">
            <div class="categoria">Cardio</div>
            <div class="treino" style="grid-column: span 2;">Corrida</div>
            <div class="vazio"></div>
            <div class="treino">Bicicleta</div>
            <div class="vazio"></div>
            <div class="vazio"></div>
            <div class="treino" style="grid-column: span 3;">Caminhada</div>
        </div>
        
        <div class="linha">
            <div class="categoria">Força</div>
            <div class="vazio"></div>
            <div class="treino">Musculação</div>
            <div class="treino" style="grid-column: span 2;">Crossfit</div>
            <div class="vazio"></div>
            <div class="treino">Pilates</div>
            <div class="vazio"></div>
        </div>

        <div class="linha">
            <div class="categoria">Flexibilidade</div>
            <div class="vazio"></div>
            <div class="treino" style="grid-column: span 3;">Yoga</div>
            <div class="vazio"></div>
            <div class="treino">Alongamento</div>
            <div class="vazio"></div>
        </div>
    </div>
</body>
</html>
