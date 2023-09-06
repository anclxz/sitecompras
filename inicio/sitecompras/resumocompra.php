<?php

session_start();

$_SESSION['dadospag'] = "";

$usuario = (isset($_SESSION['usuario']['usuario'])? $_SESSION['usuario']['usuario']: "" );
$nome = (isset($_SESSION['usuario']['nome'])? $_SESSION['usuario']['nome']: "" );
$endereco= (isset($_SESSION['usuario']['endereco'])? $_SESSION['usuario']['endereco']: "" );
$total = (isset($_SESSION['total'])? $_SESSION['total']: "" );
$metpag = (isset($_SESSION['dadospag1']['metpag'])? $_SESSION['dadospag1']['metpag']: "" );
$numcartao_avista = (isset($_SESSION['dadospag1']['numcartao-avista'])? $_SESSION['dadospag1']['numcartao-avista']: "" );
$numcartao_credito = (isset($_SESSION['dadospag1']['numcartao-credito'])? $_SESSION['dadospag1']['numcartao-credito']: "" );

if(isset($_POST['confirmar'])){
    header('Location: confirmacaocompra.php', true, 303);
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv='X-UA Compatible' content='IE-edge'>
    <title>Document</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" media="screen" href="resumocompras.css">
    <script src="main.js"></script>
</head>
<body>
    <div class="xain">
        <h1>XAIN</h1>
        <p class="rodape1">Tudo | Feminino | Masculino | Infantil</p>
    </div>
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

<table>
        <tr>
            <th colspan="5">Itens da compra</th>
        </tr>
        <tr>
            <th>#</th>
            <th>N° Item</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Valor</th>
        </tr>
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
            <th><?php echo $total; ?></th>

        </tr>
    </table>

    <br>

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
                <td>#</td>
                <td>
                <?php
                    if($metpag == "deb-avista"){
                        echo "Débito à vista";
                    }else if($metpag == "credito"){
                        echo "Crédito";
                    }else if($metpag == "pix"){
                        echo "PIX";
                    }
                ?>
                </td>
                <td>
                <?php
                    if($metpag == "deb-avista"){
                        echo "Número do cartão: ";
                    }else if($metpag == "credito"){
                        echo "Número do cartão: ";
                    }else if($metpag == "pix"){
                        echo "Chave PIX: Site Girl's LTDA - 04.712.500/0001-07";
                    }
                ?>
                </td>
                <td>
                <?php
                    if($metpag == "deb-avista"){
                        echo $numcartao_avista;
                    }else if($metpag == "credito"){
                        echo $numcartao_credito;
                    }
                ?>
                </td>
            </tr>
    </table>

    <form action="resumocompra.php" method="post">

        <table>
            <tr>
                <td class="b">Confirmar compra: </td>
                <td><input class="confirmar" type="submit" name="confirmar" value="confirmar"></td>
            </tr>
        </table>
            <div class="rodape2">
    <p> Informações da empresa </br>
       Sobre XAIN </br>
       Ajuda e suporte</br>
       Devolução</br>
       nossas redes: @lojasxain_ </br>
</p>
</div> 
</body>
</html>
