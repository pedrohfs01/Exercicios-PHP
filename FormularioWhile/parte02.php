<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
    </head>
    <body>
        <form method='get' action="index.php">
        <?php
                $c = 1;
                while($c <= 5){
                echo"Valor $c: <input type='number' value='0' name='v$c' min='0' max='100'/><br></br>";
                $c++;
            }
        ?>
        <br><br><input type='submit' value="Enviar">
        </form>
    </body>
</html>
