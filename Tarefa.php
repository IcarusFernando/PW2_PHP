<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
</head>
<body>
    <h1>Gerenciador de Tarefas</h1>
    <!-- Aqui o código -->
    <form>
        <fieldset>
            <legend>Nova tarefa</legend>
            <label>
                Tarefa:
                <input type="text" name="nome"/>
            </label>
            <input type="submit" value="Cadastrar" />
        </fieldset>
    </form>
    <?php
        if (isset($_GET['nome'])){
            echo "Nome informado: " . $_GET['nome'];
        }
    ?>
</body>
</html>