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
            $c = 1;
            while($c <= 5){
                $v = "num".$c;
                $url = "v".$c;
                $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
                $c++;
            }
            $c = 1;
            while($c <= 5){
                $v = "num".$c;
                echo"Valor $c: ".$$v."<br><br>";
                $c++;
            }
        ?>
    </body>
</html>
