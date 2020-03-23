<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post">
            <fieldset style="width: 30%; position: static;">
            <legend><b>Simulação de Financiamento pela tabela SAC</b></legend>
            <p>Valor financiado: <input type="text" name="valorF" size="20" placeholder="100000" required></p>
            <p>Número de meses: <input type="number" name="numeroMeses" min="0" max="300" placeholder="12" required/> </p>
            <p>Taxas de juros mensal: <input type="number" name="taxaJuros" min="0.00" max="50.00" step="0.1" value="5.0"></p>
            <p><input type="Submit" value="Verificar" name="verificar"/></p>
            </fieldset>
        </form>
        <?php
            $nmes = 1;
            $vf = 1;
            if(isset($_POST["verificar"])){
                $vf = isset($_POST["valorF"]) ? $_POST["valorF"] : 10;
                $nm = isset($_POST["numeroMeses"]) ? $_POST["numeroMeses"] : 1;
                $tj = isset($_POST["taxaJuros"]) ? $_POST["taxaJuros"] : 1;
                $am = ($vf / $nm);
                $sda = $vf;
                $jrmes = $tj * $sda /100;
                echo "<fieldset style='width: 30%; position: static; background-color:#4F4F4F'> 
                <table border='1px solid' width = '360' bgcolor='000000'>
                <caption><b>Valor financiado: <u><span style='color: #F0E68C;'>"
                .number_format($vf, 2, ',', '.')."</span></b></u></caption>
                <thead><tr>
                <td height='50' bgcolor='lightblue' align='center' >Mês</td>
                <td height='50' bgcolor='lightblue' align='center'>Amortização</td>
                <td height='50' bgcolor='lightblue' align='center'>Parcela</td>
                <td height='50' bgcolor='lightblue' align='center'>Saldo</td>
                </tr></thead>"; 
                for($i = 1; $i <= $nm; $i++){
                    $parcela = $jrmes + $am;
                    $sda -= $am;
                    $jrmes = $tj * $sda/100;
                    echo"<tr><td align='center' bgcolor='#D3D3D3'>$nmes</td><td align='center' bgcolor='#D3D3D3'>";
                    echo number_format($am, 2);
                    echo "</td><td align='center' bgcolor='#D3D3D3'>";
                    echo number_format($parcela, 2);
                    echo "</td><td align='center' bgcolor='#D3D3D3'>";
                    echo number_format($sda, 2, ',', '.');
                    echo("</td>");
                    $nmes++;
                }
                echo "</table></fieldset>";
            }
            else{
                echo"<fieldset style='width: 30%; position: static;'> <legend>Resultado:
                </legend>Aperte o botão verificar</fieldset>";
            }
        ?>
    </body>
</html>
