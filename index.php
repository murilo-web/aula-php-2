<?php

if(isset($_POST["acao"])){
    $nome = $_POST['nome'];
    $numero = $_POST['numero'];
    $email = $_POST['email'];
    if(strlen($nome) >=5){
        echo 'nosso nome';
        echo '<br>';
    }

    if(is_numeric($numero)){
        echo 'numero';
        echo '<br>';
    }

    if(strstr($email,"@") != ''){
     echo 'tem @';
     echo '<br>';
    }
}
?>

<form method="post">
    <input type="text" name="nome">
    <input type="text" name="numero">
    <input type="text" name="email">
    <input type="submit" name="acao">
</form>