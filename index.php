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
        $path = $_SERVER['DOCUMENT_ROOT'].'/ecommerce/
        include_once($path.'/Models/Usuarios.php');

    if(isset($_POST['logar'])){
        $objUsuario = new Usuario();
        $objUsuario->setEmail($_POST['email']);
        $objUsuario->setSenha($_POST['senha']);

        echo "Olá, o email é:".$objUsuario->getEmail()." e a senha é: ".objUsuario->getSenha();
    }

    ?>