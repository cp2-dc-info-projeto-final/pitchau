<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Administração</title>
    <link rel="stylesheet" href="transforma_admim.css">
</head>
<body>

    <div class="container">
        <h2>Usuários</h2>

        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Nível de Acesso Atual</th>
                <th>Ação</th>
            </tr>

            <!-- Exemplo de loop para exibir usuários -->
            <?php
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_usuario"] . "</td>";
                echo "<td>" . $row["nome"] . "</td>";
                echo "<td>" . $row["nivel_acesso"] . "</td>";
                echo "<td>";
                echo "<form method='post' action='admin_page.php'>";
                echo "<input type='hidden' name='id_usuario' value='" . $row["id_usuario"] . "'>";
                echo "<input type='submit' name='transformar_admin' value='Transformar em Administrador'>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>

</body>
</html>
