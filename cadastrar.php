<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://images.pexels.com/photos/3944308/pexels-photo-3944308.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 400px;
            text-align: center;
        }

        h1 {
            color: #ff6f00;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
            text-align: left;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        select {
            appearance: none;
            padding: 8px;
        }

        button[type="submit"] {
            background-color: #ff6f00;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #ff9000;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Cadastro</h1>
        <form id="cadastro-form" action="" method="POST">
            <label for="nome_completo">Nome Completo:</label>
            <input type="text" id="nome_completo" name="nome_completo" required>
            
            <label for="email">Endereço de E-mail:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            
            <label for="confirmar_senha">Confirmar Senha:</label>
            <input type="password" id="confirmar_senha" name="confirmar_senha" required>
            
            <label for="telefone">Número de Telefone:</label>
            <input type="tel" id="telefone" name="telefone" required>
            
            <label for="cep">CEP:</label>
            <input type="text" id="cep" name="cep" required>
            
            <label for="endereco_entrega">Endereço de Entrega:</label>
            <input type="text" id="endereco_entrega" name="endereco_entrega" required>
            
            <label for="tipo_residencia">Tipo de Residência:</label>
            <select id="tipo_residencia" name="tipo_residencia" required>
                <option value="apartamento">Apartamento</option>
                <option value="condominio">Condomínio</option>
                <option value="casa">Casa</option>
            </select>
            
            <input class="btn" type="submit" name="register" value="Enviar">
        </form>
    </div>

    <script>
        document.getElementById("cadastro-form").addEventListener("submit", function(event) {
            event.preventDefault(); // Impede o envio padrão do formulário
            
            // Obter valores dos campos do formulário
            const nome = document.getElementById("nome_completo").value;
            const email = document.getElementById("email").value;
            const senha = document.getElementById("senha").value;
            const confirmarSenha = document.getElementById("confirmar_senha").value;
            const telefone = document.getElementById("telefone").value;
            const cep = document.getElementById("cep").value;
            const endereco = document.getElementById("endereco_entrega").value;
            const tipoResidencia = document.getElementById("tipo_residencia").value;
            
            // Verificar se as senhas coincidem
            if (senha !== confirmarSenha) {
                alert("As senhas não coincidem. Por favor, tente novamente.");
                return;
            }
            
            // Você pode adicionar mais lógica aqui para processar os dados, enviar para o servidor, etc.
            
            // Armazenar o status de login no localStorage
            localStorage.setItem("usuarioCadastrado", "true");
            
            // Redirecionar para a página de boas-vindas após o cadastro
            window.location.href = "login.html"; 
        });
    </script>

<?php
include("conectcadastro.php");
?>

</body>
</html>
