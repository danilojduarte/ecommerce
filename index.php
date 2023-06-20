<html>
    <body>
        <form action="" method="post">
            Email: <input type="text" name="email" value=""> <br>
            Senha: <input type="text" name="senha" value=""> <br>
            <button>Cadastrar</button>
        </form>

        <?php

        $email = $_POST["email"];
        $senha = $_POST["senha"];

        echo "Olá, o e-amil cadastrado foi ".$email.", e a senha é ".$senha;
        ?>
    </body>
</html>