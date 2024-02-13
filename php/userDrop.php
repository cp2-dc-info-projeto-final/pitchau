<?php
include_once "../consultas/flying_bubbles.php";
session_start();
// Certifique-se de que a variável de sessão está definida antes de chamar a função
if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];
    $apagar = Apagar_conta($user_id);
    header("Location:../php/logout.php");
    exit();
    // Verifique se a exclusão foi bem-sucedida antes do redirecionamento
    if ($apagar) {
        echo "Usuário excluído com sucesso!";
        // Redirecione para a página de logout ou outra página desejada
        header("Location:../php/logout.php");
        exit();
    } else {
        echo "Erro ao excluir o usuário.";
    }
} else {
    echo "ID do usuário não está definido.";
    
}
?>