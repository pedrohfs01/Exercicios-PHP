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
            $dataN = isset($_GET["dataNascimento"])?$_GET["dataNascimento"] : 2000;
            $idade = date("Y") - $dataN;
            if($idade >= 18 && $idade <= 65){
                echo "Voto obrigatório";
            }
            else if($idade < 18 && $idade > 15){
                echo "Voto opcional";
            }
            else{
                echo "Voto não obrigatório";
            }
            
        ?>
        <a href="formularioDN.html">Voltar</a>
    </body>
</html>
