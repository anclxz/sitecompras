<?php

session_start();

$_SESSION['dadospag'] = "";

$usuario = (isset($_SESSION['usuario']['usuario'])? $_SESSION['usuario']['usuario']: "" );
$nome = (isset($_SESSION['usuario']['nome'])? $_SESSION['usuario']['nome']: "" );
$endereco= (isset($_SESSION['usuario']['endereco'])? $_SESSION['usuario']['endereco']: "" );
$total = (isset($_SESSION['total'])? $_SESSION['total']: "" );

if(isset($_POST['pagar'])){
    if(isset($_POST['metpag'])){
        $metpag = $_POST['metpag'];
        $numcartao_avista = (isset($_POST['numcartao-avista']) ? $_POST['numcartao-avista'] : "");
        $numcartao_credito = (isset($_POST['numcartao-credito']) ? $_POST['numcartao-credito'] : "");

    $_SESSION['dadospag1'] = array('metpag' => $metpag,
                                'numcartao-avista' => $numcartao_avista,
                                'numcartao-credito' => $numcartao_credito);

    header('Location: resumocompra.php', true, 303);
    
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
    <link rel="stylesheet" type="text/css" media="screen" href="main-css.css">
    <script src="main.js"></script>
</head>
<body>
    
<table>
    <tr>
        <br>
        <th colspan="2">Dados do usuário</th>
    </tr>

    <tr>
        <td>Usuário:</td>
        <td><?php echo $usuario; ?></td>
    </tr>

    <tr>
        <td>Nome completo:</td>
        <td><?php echo $nome; ?></td>
    </tr>

    <tr>
        <td>Endereço:</td>
        <td><?php echo $endereco; ?></td>
    </tr>

        </table>

<br>

    <form action="dadospag.php" method="post">

        <table>

            <tr>
                <th colspan="4">Dados do pagamento</th>

            </tr>

            <tr>
                <th>#</th>
                <th>Método de pagamento</th>
                <th colspan="2">Dados da cobrança</th>

            </tr>

            <tr>

                <td><input type="radio" name="metpag" value="deb-avista"></td>
                <td>Débito à vista</td>
                <td>Número do cartão</td>
                <td><input type="text" name="numcartao-avista"></td>

            </tr>
            <tr>

                <td><input type="radio" name="metpag" value="credito"></td>
                <td>Crédito à vista</td>
                <td>Número do cartão</td>
                <td><input type="text" name="numcartao-credito"></td>

            </tr>
            <tr>

                <td><input type="radio" name="metpag" value="pix"></td>
                <td>PIX</td>
                <td>Chave PIX</td>
                <td>Site Girl's LTDA - 04.712.500/0001-07</td>

            </tr>

            <tr>

            <th colspan="2"></th>
            <th>Valor total</th>
            <th><?php echo $total; ?></th>

            </tr>
            <tr>

            <td colspan="4"><input type="submit" name="pagar" value="pagar"></td>

            </tr>

        </table>


    </form>

</body>
</html>