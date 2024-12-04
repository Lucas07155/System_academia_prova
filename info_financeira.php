<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações Financeiras - Pagamentos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilo_login_professor.css">
    <link rel="stylesheet" href="estilo_financeiro.css">
</head>
<body>

    <div class="container table-container">
        <h2 class="text-center mb-4">Histórico de Pagamentos do Aluno</h2>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Data de Pagamento</th>
                    <th>Valor</th>
                    <th>Status</th>
                    <th>Observações</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>12/12/2024</td>
                    <td>R$ 150,00</td>
                    <td><span class="badge badge-success">Pago</span></td>
                    <td>Pagamento mensal de dezembro.</td>
                    <td><a href="#" class="btn-view">Ver detalhes</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>15/11/2024</td>
                    <td>R$ 150,00</td>
                    <td><span class="badge badge-success">Pago</span></td>
                    <td>Pagamento mensal de novembro.</td>
                    <td><a href="#" class="btn-view">Ver detalhes</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>20/10/2024</td>
                    <td>R$ 150,00</td>
                    <td><span class="badge badge-danger">Pendente</span></td>
                    <td>Pagamento ainda não efetuado.</td>
                    <td><a href="#" class="btn-view">Ver detalhes</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>25/09/2024</td>
                    <td>R$ 150,00</td>
                    <td><span class="badge badge-success">Pago</span></td>
                    <td>Pagamento mensal de setembro.</td>
                    <td><a href="#" class="btn-view">Ver detalhes</a></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>
