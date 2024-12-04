     <!-- Desenvolvido por Lucas De Carvalho Praxedes -->
 <!-- DATA 22/10/2024-->
 <!-- Professor: Luís Alberto Pires de Oliveira -->
   
 <!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar professor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilo_cds_prf.css">

</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Registrar treino - Academia Super Fit</h1>
        <?php if (isset($_GET['sucesso'])): ?>
            <div class="alert alert-success"><?php echo $_GET['sucesso']; ?></div>
        <?php elseif (isset($_GET['erro'])): ?>
            <div class="alert alert-danger"><?php echo $_GET['erro']; ?></div>
        <?php endif; ?>
        <form action="processar_cadastro_professor.php" method="POST">
        <div class="form-group">
                <label for="data_treino">Data do Treino</label>
                <input type="date" name="data_treino" id="data_treino" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tipo_treino">Tipo de Treino</label>
                <select id="tipo_treino" name="tipo_treino" class="form-control" required>
                    <option value="" disabled selected>Selecione o tipo de treino</option>
                    <option value="musculacao">Musculação</option>
                    <option value="cardio">Cardio</option>
                    <option value="alongamento">Alongamento</option>
                    <option value="pilates">Pilates</option>
                    <option value="yoga">Yoga</option>
                </select>
            </div>
            <div class="form-group">
                <label for="duracao">Duração (em minutos)</label>
                <input type="number" name="duracao" id="duracao" class="form-control" placeholder="Digite a duração do treino" required>
            </div>
            <div class="form-group">
                <label for="intensidade">Intensidade</label>
                <select id="intensidade" name="intensidade" class="form-control" required>
                    <option value="" disabled selected>Selecione a intensidade</option>
                    <option value="baixa">Baixa</option>
                    <option value="moderada">Moderada</option>
                    <option value="alta">Alta</option>
                </select>
            </div>
            <div class="form-group">
                <label for="observacoes">Observações</label>
                <textarea name="observacoes" id="observacoes" class="form-control" rows="3" placeholder="Adicione observações sobre o treino (opcional)"></textarea>
            </div>
            <button type="submit" class="btn btn-sm btn-primary">Registrar Treino</button>
        </form>
    </div>
       
        </form>
    </div>
</body>
</html>