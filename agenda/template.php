<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilos.css">
    <title>Agenda </title>
</head>
<body>
    <h1> Cadastre os seus contatos na sua agenda: </h1>

    <form action='agendadc.php' method='GET'>
        <fieldset>
            <legend> Adicione os dados do contato </legend>
            <br>
            <label> 
                Nome do contato:
                <input type='text' name="nome">
            </label>
            <br>

            <label>
                Telefone do contato:
                <input type='text' name="telefone">
            </label>
            <br>

            <label>
                Email do contato:
                <input type='text' name="email">
            </label>
            <br>
            <br>

            <legend> Dados do contato: </legend>
            <br>

            <label>
              Data de Nascimento:
              <input type="date" name="dnascimento">
            </label>
            <br> 
            <br>

            <label>
                O contato é favorito?

                sim
               <input type="checkbox" name="favoritos" value="sim">
            </label> 

                <input type="submit" value="Cadastrar">
            </fieldset>
            </form>

            <h2> Dados do Contato cadastrado: </h2> 
            <table>
                <tr> 
                    <th> Nome:  </th>
                    <th> Telefone: </th>
                    <th> Email:  </th>
                    <th> Data de Nascimento: </th>
                    <th> Favorito: </th>
                </tr> 

            
              <?php foreach ($lista_contatos as $contato): ?>
                <tr>
                    <td><?php echo $contato['nome']; ?></td>
                    <td><?php echo $contato['telefone']; ?></td>
                    <td><?php echo $contato['email']; ?></td>
                    <td><?php echo $contato['dnascimento']; ?></td>
                    <td><?php echo ($contato['favoritos'] === 'sim') ? 'Sim' : ''; ?></td> 
            
                </tr>
                <?php endforeach; ?> 

            </table>
                    
</body>
</html>