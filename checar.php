
<!DOCTYPE html>

<html>

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Checar se o número e par ou impar</title>
    </head>

    <body>

        <h1></h1>

        <fieldset>

            <legend>Par ou impar</legend>
            <div class="container">

                <?php

                        $num = $_POST["numero"];

                        if ($num % 2 == 0) {

                            echo "Número Par";

                        }else {

                            echo "Número Impar";            
                        }
                ?>
                <br><br>
                <a href="index.php"> Voltar </a>

            </div>
             

        </fieldset>
        
    </body>
    
</html>

