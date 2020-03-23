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
           $v = isset($_GET["v"]) ? $_GET["v"] : 0;
           $div = 0;
           echo "O número $v tem os múltiplos: ";
           for($i=1; $i <= $v; $i++){
               $ver = $v % $i;
               if($ver == 0){
                   echo $i." ";
                   $div++;
               }
           }
           echo"</br>";
           if($div == 2){echo "O número $v é PRIMO";}
           else{echo "O número $v NÃO é PRIMO";}
        ?><br>
        <a href="form.html"> voltar </a>
    </body>
</html>
