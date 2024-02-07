<?php

// Configurações de conexão com o banco de dados
$host = 'localhost';
$usuario = 'root';
$senha = '';
$bancoDados = 'Pitchau';

// Conecta ao banco de dados
$conn = new mysqli($host, $usuario, $senha, $bancoDados);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Obtém a estrutura das tabelas do banco de dados
$result = $conn->query("SHOW TABLES");
$tables = array();

while ($row = $result->fetch_row()) {
    $tables[] = $row[0];
}

// Gera o script SQL
$sqlScript = "";

foreach ($tables as $table) {
    $result = $conn->query("SHOW CREATE TABLE $table");
    $row = $result->fetch_row();
    $sqlScript .= $row[1] . ";\n\n";
}
echo $sqlScript;

// Fecha a conexão
$conn->close();

// Nome do arquivo SQL de saída (com caminho absoluto)
$nomeArquivoSQL = 'backup.sql';

// Escreve o script SQL no arquivo
file_put_contents($nomeArquivoSQL, $sqlScript);

echo "Backup do banco de dados criado com sucesso. Consulte o arquivo $nomeArquivoSQL.";

?>
