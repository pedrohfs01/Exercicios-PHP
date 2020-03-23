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
        <?php
            $inicio = isset($_GET["inicio"]) ? $_GET["inicio"] : 0;
            $fim = isset($_GET["fim"]) ? $_GET["fim"] : 0;
            $passo = isset($_GET["passo"]) ? $_GET["passo"] : 1;
            if($inicio <= $fim){
                while($inicio <= $fim){
                    echo "$inicio ";
                    $inicio += $passo;
                }
            }
            else{
                while($inicio >= $fim){
                    echo "$inicio ";
                    $inicio -= $passo;
                }
            }
        ?>
        <br><a href="formulario.html">Voltar</a>
    </body>
</html>
