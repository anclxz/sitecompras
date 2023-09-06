<?php

session_start();
$_SESSION['usuario'] = ""; 

/*$i = 0; 

 foreach($_SESSION['itens'] as $item){
    echo $i .  $item['desc'] . " - " . $item['vl'] . "<br>"; 
    $i++; 
}*/

    if(isset($_POST['login'])){
        if(isset($_POST['usuario']) && isset($_POST['nome']) && isset($_POST['endereco'])){
            $_SESSION['usuario'] = array(
                    'usuario' => $_POST['usuario'],
                    'nome' => $_POST['nome'],
                    'endereco' => $_POST['endereco']

            );

            header('Location: dadospag.php', true, 303);

        }

    }
        
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv='X-UA Compatible' content='IE-edge'>
    <title>Document</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" media="screen" href="usuario.css">
    <script src="main.js"></script>
</head>
<body>
    <div class="xain">
        <h1>XAIN</h1>
        <p class="rodape1">Tudo | Feminino | Masculino | Infantil</p>
    </div>
    <form class="principal" action="usuario.php" method="post">
        <table>
            <tr>
                <br>
                <th colspan="2">Dados do usuário</th>
            </tr>

            <tr>
                <td>Usuário:</td>
                <td><input type="text" name="usuario"></td>
            </tr>

            <tr>
                <td>Nome completo:</td>
                <td><input type="text" name="nome"></td>
            </tr>

            <tr>
                <td>Endereço:</td>
                <td><input type="text" name="endereco"></td>
            </tr>

            <tr>
                <td colspan="2">
                <input class="login" type="submit" name="login" value="login">
                </td>
            </tr>

        </table>

    </form>
 
      <div class="rodape2">
    <p> Informações da empresa </br>
       Sobre XAIN </br>
       Ajuda e suporte</br>
       Devolução</br>
       nossas redes: @lojasxain_ </br>
</p>
</div>
        <?php
        
        $i = 0;

        if(isset($_SESSION['itens'])){
            foreach($_SESSION['itens'] as $item){
        
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $item['ni']; ?></td>
            <td><?php echo $item['desc']; ?></td>
            <td><?php echo $item['qtd']; ?></td>
            <td><?php echo $item['vl']; ?></td>
        </tr>

        <?php

                $i++;
        }
        
    }
        ?>

        <tr>
            <th colspan="3"></th>
            <th>Valor total</th>
            <th><?php echo $_SESSION['total']; ?></th>

        </tr>

    </table>

</body>
</html>
