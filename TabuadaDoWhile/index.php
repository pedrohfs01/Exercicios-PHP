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
            $v = isset($_GET["v"]) ? $_GET["v"] : 1;
            $i = 1;
            do{
                echo "$v x $i =".($v*$i)."<br>";
                $i++;
            }while($i <= 10);
        ?>
        <a href="form.html">Voltar</a>
    </body>
</html>
