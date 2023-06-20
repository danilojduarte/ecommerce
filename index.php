<html>
    <body>
        <form action="" method="post">
            Email: <input type="text" name="email" value=""> <br>
            Senha: <input type="text" name="senha" value=""> <br>
            <button type="submit" name="logar">Entrar</button>
            <button>Cadastrar</button>
        </form>

    </body>
</html>

<?php
        if(isset($_POST['logar'])){
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        echo "Olá, o e-amil cadastrado foi ".$email.", e a senha é ".$senha;
    }
        ?>