<?php

// Processar o formulário quando for enviado
if ($isset($_POST['submit']) ){
    $arquivo=$_FILES['file'];
    $arquivo = explode('.', $arquivo)['name'];
    if($arquivo[sizeof($arquivo)-1] != "jpg"){
        die("Voce não pode upar esse aquivo");
    }else{

        echo "podemos continuar!";
    }


    
}
?>
