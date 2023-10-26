<?php

include("conectcadastro.php");

if (isset($_POST['register'])) {
    if(
        strlen($_POST['nome_completo']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['senha']) >= 1 
        strlen($_POST['confirmar_senha']) >= 1 
        strlen($_POST['telefone']) >= 1 &&
        strlen($_POST['cep']) >= 1 &&
        strlen($_POST['endereco_entrega']) >= 1 &&
        strlen($_POST['tipo_residencia']) >= 1 &&
       ) {
            $name = trim($_POST['nome_completo']);
            $email = trim($_POST['email']);
            $senha = trim($_POST['senha']);
            $confirmar_senha = trim($_POST['confirmar_senha']);
            $telefone = trim($_POST['telefone']);
            $cep = trim($_POST['cep']);
            $endereco_entrega = trim($_POST['endereco_entrega']);
            $tipo_residencia = trim($_POST['tipo_residencia']);
            $fecha = date("d/m/y");
            $consulta = "INSERT INTO datos(nome_completo, email, senha, confirmar_senha, telefone, cep, endereco_entrega, tipo_residencia, fecha)"
                VALUES('$nome_completo', '$email' '$senha', '$confirmar_senha', '$telefone', '$cep', '$endereco_entrega', '$tipo_residencia', '$fecha')";
            $resultado = mysqli_connect($conex, $consulta);
            if (resultado) {
             ?>
             <h3 class="sucess" >Seu registro está completo</h3>
             <?php
            } else {
                ?>
                <h3 class="error">Ocorreu um erro</h3>
                <?php
        }

}

?>