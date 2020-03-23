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
            $n1 = isset($_GET["n1"])? $_GET["n1"] : 5;
            $n2 = isset($_GET["n2"])? $_GET["n2"] : 5;
            $media = ($n1+$n2) / 2;
            if($media >= 6){
                echo "Sua média foi: $media e você está aprovado.";
            }
            else if($media >= 5){
                echo "Sua média foi: $media e você está de recuperação.";
            }
            else{
                echo "Sua média foi $media e você está reprovado.";
            }
        ?>
        </br>
        <a href ="formularioAluno.html">Voltar</a>
    </body>
</html>
