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
            function soma(){
                $v = func_get_args();
                $n = func_num_args();
                $res=0;
                for($i = 0; $i < $n; $i++){
                    $res += $v[$i];
                }
                return $res;
            }
            $r = soma(10,20,2,4,6,1,0,2,534,23);
            echo $r;
        ?>
    </body>
</html>
