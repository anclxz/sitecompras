<?php

session_start(); 

$ni = 0; 
$_SESSION['itens'] = array(); 
$_SESSION['total'] = 0.0;
$total = 0.0;

if(isset($_POST['comprar'])){
    for($i = 0; $i < 10; $i++){
        if(isset($_POST['ch'. $i])){
            $c = $ni; 
            $desc = $_POST['desc' . $i]; 
            $qtd = $_POST['qtd' . $i];
            $vl = $_POST['vl' . $i];

            $total += ($vl * $qtd); 

            //echo $i . "[x]" . $desc . "<br>"; 

            $_SESSION['itens'] = array_merge($_SESSION['itens'],
                                            array($c => array(
                                                'ni' => $i,
                                                'desc' => $desc,
                                                'qtd' => $qtd,
                                                'vl' => $vl
                                            )));

            $ni += 1; 
        }

    }

    if($ni > 0){

        $_SESSION['total'] = $total;

        header('Location: usuario.php', true, 303); 


       

    }

    //echo 'Valor total' . $total; 

    

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
    <form action="compras.php" method="post">
    <table>
        <tr>
            <th colspan="5">Lista de compras</th>
        </tr>
        <tr>
            <th>#</th>
            <th>[x]</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Valor</th>
        </tr>
        <tr>
            <td>1</td>
            <td><input type="checkbox" name="ch0"></td>
            <td><input type="text" name="desc0" value="Tenis Nike" readonly></td>
            <td><input type="numb" name="qtd0" value="0"></td>
            <td><input type="text" name="vl0" value="399.00" readonly></td>
        </tr>
        <tr>
            <td>2</td>
            <td><input type="checkbox" name="ch1"></td>
            <td><input type="text" name="desc1" value="Tenis Nike" readonly></td>
            <td><input type="numb" name="qtd1" value="0"></td>
            <td><input type="text" name="vl1" value="399.00" readonly></td>
        </tr>
        <tr>
            <td>3</td>
            <td><input type="checkbox" name="ch2"></td>
            <td><input type="text" name="desc2" value="Tenis Nike" readonly></td>
            <td><input type="numb" name="qtd2" value="0"></td>
            <td><input type="text" name="vl2" value="399.00" readonly></td>
        </tr>
        <tr>
            <td>4</td>
            <td><input type="checkbox" name="ch3"></td>
            <td><input type="text" name="desc3" value="Tenis Nike" readonly></td>
            <td><input type="numb" name="qtd3" value="0"></td>
            <td><input type="text" name="vl3" value="399.00" readonly></td>
        </tr>
        <tr>
            <td>5</td>
            <td><input type="checkbox" name="ch4"></td>
            <td><input type="text" name="desc4" value="Tenis Nike" readonly></td>
            <td><input type="numb" name="qtd4" value="0"></td>
            <td><input type="text" name="vl4" value="399.00" readonly></td>
        </tr>
        <tr>
            <td>6</td>
            <td><input type="checkbox" name="ch5"></td>
            <td><input type="text" name="desc5" value="Tenis Nike" readonly></td>
            <td><input type="numb" name="qtd5" value="0"></td>
            <td><input type="text" name="vl5" value="399.00" readonly></td>
        </tr>
        <tr>
            <td>7</td>
            <td><input type="checkbox" name="ch6"></td>
            <td><input type="text" name="desc6" value="Tenis Nike" readonly></td>
            <td><input type="numb" name="qtd6" value="0"></td>
            <td><input type="text" name="vl6" value="399.00" readonly></td>
        </tr>
        <tr>
            <td>8</td>
            <td><input type="checkbox" name="ch7"></td>
            <td><input type="text" name="desc7" value="Tenis Nike" readonly></td>
            <td><input type="numb" name="qtd7" value="0"></td>
            <td><input type="text" name="vl7" value="399.00" readonly></td>
        </tr>
        <tr>
            <td>9</td>
            <td><input type="checkbox" name="ch8"></td>
            <td><input type="text" name="desc8" value="Tenis Nike" readonly></td>
            <td><input type="numb" name="qtd8" value="0"></td>
            <td><input type="text" name="vl8" value="399.00" readonly></td>
        </tr>
        <tr>
            <td>10</td>
            <td><input type="checkbox" name="ch9"></td>
            <td><input type="text" name="desc9" value="Tenis Nike" readonly></td>
            <td><input type="numb" name="qtd9" value="0"></td>
            <td><input type="text" name="vl9" value="399.00" readonly></td>
        </tr>
        <tr>
            <td colspan="5">
                <input type="submit" name="comprar" value="comprar">
            </td>
        </tr>

    </table>


    </form>

</body>
</html>